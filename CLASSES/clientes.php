<?php
Class Usuario

{
	private $pdo;
	public $msgErro = "";
	
	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo;
		try
		{
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
		} catch (PDOException $e) {
			$msgErro = $e -> getMessage();
		}
		
	}

	public function cadastrar($nome_cliente, $email_cliente, $senha_cliente)
	{
		global $pdo;
		//verificar se já existe o email cadastrado
		$sql = $pdo -> prepare("SELECT id_cliente FROM cliente WHERE nome_cliente = :n");
		$sql -> bindValue(":n", $nome_cliente);
		$sql -> execute();
		if($sql -> rowCount() > 0)
		{
			return false;//já está cadastrado
		}
		else//caso não cadastrado, Cadastrar
		{
			$sql = $pdo -> prepare("INSERT INTO cliente (nome_cliente, email_cliente, senha_cliente) VALUES (:n, :e, :s)");
			$sql -> bindValue(":n", $nome_cliente);
			$sql -> bindValue(":e", $email_cliente);
			$sql -> bindValue(":s", md5 ($senha_cliente));
			$sql -> execute();
			return true;
		}

	}

	public function logar($email_cliente, $senha_cliente)
	{
		global $pdo;
		//verificar se email e senha estão cadastrados, se sim
		$sql = $pdo -> prepare("SELECT id_cliente FROM cliente WHERE email_cliente = :e AND senha_cliente = :s");
		$sql -> bindValue(":e", $email_cliente);
		$sql -> bindValue(":s", md5 ($senha_cliente));
		$sql -> execute();
		if($sql -> rowCount() > 0)
		{
		//entrar no sistema (sessão)
			$dado = $sql -> fetch();
			session_start();
			$_SESSION['id_cliente'] = $dado['id_cliente'];
			return true;//cadastrado com sucesso

		}
		else
		{
			return false;//não foi possível logar
		}

	}

}

?>