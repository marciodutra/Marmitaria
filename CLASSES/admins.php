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
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
		} catch (PDOException $e) {
			$msgErro = $e -> getMessage();
		}
		
	}

	public function cadastrar($nome_admin, $email_admin, $senha_admin)
	{
		global $pdo;
		//verificar se já existe o email cadastrado
		$sql = $pdo -> prepare("SELECT id_admin FROM administrador WHERE nome_admin = :n");
		$sql -> bindValue(":n", $nome_admin);
		$sql -> execute();
		if($sql -> rowCount() > 0)
		{
			return false;//já está cadastrado
		}
		else//caso não cadastrado, Cadastrar
		{
			$sql = $pdo -> prepare("INSERT INTO administrador (nome_admin, email_admin, senha_admin) VALUES (:n, :e, :s)");
			$sql -> bindValue(":n", $nome_admin);
			$sql -> bindValue(":e", $email_admin);
			$sql -> bindValue(":s", md5 ($senha_admin));
			$sql -> execute();
			return true;
		}

	}

	public function logar($email_admin, $senha_admin)
	{
		global $pdo;
		//verificar se email e senha estão cadastrados, se sim
		$sql = $pdo -> prepare("SELECT id_admin FROM administrador WHERE email_admin = :e AND senha_admin = :s");
		$sql -> bindValue(":e", $email_admin);
		$sql -> bindValue(":s", md5 ($senha_admin));
		$sql -> execute();
		if($sql -> rowCount() > 0)
		{
		//entrar no sistema (sessão)
			$dado = $sql -> fetch();
			session_start();
			$_SESSION['id_admin'] = $dado['id_admin'];
			return true;//cadastrado com sucesso

		}
		else
		{
			return false;//não foi possível logar
		}

	}

}

?>