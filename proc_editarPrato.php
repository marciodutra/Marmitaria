<?php

session_start();

include_once ("conexao.php");


$id_prato = filter_input(INPUT_POST, 'id_prato', FILTER_SANITIZE_NUMBER_INT);
$nome_prato = filter_input(INPUT_POST, 'nome_prato', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuarios = "UPDATE prato SET nome_prato = '$nome_prato', descricao = '$descricao' WHERE id_prato = '$id_prato'";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style = 'color: green; background:white;'><b>Prato editado com sucesso.<b></p>";
	header("Location: listarPratos.php");
}else{
	$_SESSION['msg'] = "<p style = 'color: red; background:white;'><b>Erro ao editar.<b></p>";
	header("Location: listarPratos.php");
}

?>