<?php

session_start();
include_once("conexao.php");

if((isset($_POST['email_admin'])) && (isset($_POST['senha_admin']))){
	$usuario = mysqli_real_escape_string($conn, $_POST['email_admin']);
	$senha_admin = mysqli_real_escape_string($conn, $_POST['senha_admin']);
	$senha_admin = md5($senha_admin);

	$result_usuario = "SELECT * FROM administrador WHERE email = '$usuario' && $senha_admin = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

		if(isset($resultado)){
			$_SESSION['id_admin'] = $resultado['id_admin'];
			$_SESSION['nome_admin'] = $resultado['nome_admin'];
			$_SESSION['email_admin'] = $resultado['email_admin'];
			header("Location: inicioAdmin.php");
			}else{
				$_SESSION['loginErro'] = "Usuário ou senha inválidos.";
				header("Location: index.php");
			}
		}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: inicioAdmin.php");
	}
?>