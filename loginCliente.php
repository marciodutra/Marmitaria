<?php

require_once "CLASSES/clientes.php";
$u = new Usuario;// instanciando classe Usuario de usuarios.php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Cliente</title>
	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<!--fazer CSS próprio para o login.php => <link rel= "stylesheet" href="css/style.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->
</head>

<body style="background-color: #d3222a; color: #ffc82d;">

	<div class="container" id="tamanhoContainer" style="width: 500px; margin-top: 50px;">
		<fieldset>
			<legend>Bem vindo, cliente! Está com fome?</legend>
			<form>

				<div class="form-group">
					<label for="inputEmail">E-mail</label>
					<input type="email" name="email_cliente" class="form-control" id="inputEmail" placeholder="Insira o E-mail">
				</div>
				<div class="form-group">
					<label for="inputPassword">Senha</label>
    				<input type="password" name="senha_cliente" class="form-control" id="inputPassword" placeholder="Digite sua senha">
    			</div>
    			<!--LIBERAR FUNCIONALIDADE CARRINHO NO PHP----------------------------->
    			<input type="submit" name="entrar" value="Entrar" style="float: right;">
    			
    		</form>
    	</fieldset>

    	<hr>

		<p>Ainda não é cliente OPSIW? <strong><a href="cadastrarCliente.php">Cadastre-se.</a></strong></p>

        <hr>
		<a href="index.php"><button type="submit" class="bt btn-primary">Voltar à tela incial.</button></a>
		<hr>

	</div>

	<?php

	if(isset($_POST['email_cliente']))
    {
    	$email_cliente = addslashes($_POST['email_cliente']);
		$senha_cliente = addslashes($_POST['senha_cliente']);
		//verificar se está preenchido
		if(!empty($email_cliente) && !empty($senha_cliente))
		{
			$u -> conectar("marmitaria", "localhost", "root", "");
			if($u -> msgErro == ""){
				if($u -> logar($email_cliente, $senha_cliente))
				{
					header("location: index.php");

					//PERMITIR CARRINHO!!!!

				}else{
				echo "Email e/ou senha incorretos.";
			}
		}else{
			echo "Erro: ".$u -> msgErro;
		}

		}else
		{
			echo "Preencha todos os campos.";
		}
	}

	?>

</body>
</html>