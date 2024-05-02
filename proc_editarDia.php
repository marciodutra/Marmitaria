<?php

session_start();

include_once ("conexao.php");

$id_dia = filter_input(INPUT_POST, 'id_dia', FILTER_SANITIZE_NUMBER_INT);
$nome_dia = filter_input(INPUT_POST, 'nome_dia', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuarios = "UPDATE dia SET nome_dia = '$nome_dia' WHERE id_dia = '$id_dia'";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style = 'color: green; background:white;'><b>Dia editado com sucesso.<b></p>";
	header("Location: listarDia.php");
}else{
	$_SESSION['msg'] = "<p style = 'color: red; background:white;'><b>Erro ao editar.<b></p>";
	header("Location: listarDia.php");
}

?>