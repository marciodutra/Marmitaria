<?php

session_start();

include_once ("conexao.php");

$nome_prato = filter_input(INPUT_POST, 'nome_prato', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuarios = "INSERT INTO prato (nome_prato, descricao) VALUES ('$nome_prato', '$descricao')";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style = 'color: green; background:white;'><b>Prato inserido com sucesso.<b></p>";
	header("Location: cadastroPrato.php");
}else{
	$_SESSION['msg'] = "<p style = 'color: red; background:white;'><b>Erro ao inserir.<b></p>";
	header("Location: cadastroPrato.php");
}

?>