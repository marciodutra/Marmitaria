<?php

require_once ('CLASSES/admins.php');
$u = new Usuario;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login Administrador</title>
	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<!--fazer CSS próprio para o cadastros.php => <link rel= "stylesheet" href="css/style.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->
</head>

<body style="background-color: #d3222a; color: #ffc82d;">
    <div class="container" id="tamanhoContainer" style="width: 500px; margin-top: 50px;">
    	<fieldset>
    		<legend>Login Administrador</legend>
            <form name="form" id="form" method="POST">
            	
            	<div class="form-group">
            		<label>E-mail Administrador:</label>
            		<input type="email" name="email_admin" id="email_admin" class="form-control" required>
            	</div>
            	<div class="form-group">
            		<label>Senha</label>
            		<input type="password" name="senha_admin" id="senha_admin" class="form-control" required>        
              	</div>
              	<div class="form-group">
              		<input type="submit" name="entrar" value="Entrar">
              	</div>

            </form>
        </fieldset>
        <p>Ainda não é cadastrado? <strong><a href="https://api.whatsapp.com/send?1=ptBR&phone=5514991220621" target="_blank">Solicite uma permissão.</a></strong></p>

        <hr>
		<a href="index.php"><button type="submit" class="bt btn-primary">Voltar à tela incial.</button></a>
		<hr>

    </div>
    
    <?php
    if(isset($_POST['email_admin']))
    {
    	$email_admin = addslashes($_POST['email_admin']);
		$senha_admin = addslashes($_POST['senha_admin']);
		//verificar se está preenchido
		if(!empty($email_admin) && !empty($senha_admin))
		{
			$u -> conectar("marmitaria", "localhost", "root", "");
			if($u -> msgErro == ""){
				if($u -> logar($email_admin, $senha_admin))
				{
					header("location: inicioAdmin.php");

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