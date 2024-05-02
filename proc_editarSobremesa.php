<?php

session_start();

include_once ("conexao.php");

$id_sobremesa = filter_input(INPUT_POST, 'id_sobremesa', FILTER_SANITIZE_NUMBER_INT);
$nro_sobremesa = filter_input(INPUT_POST, 'nro_sobremesa', FILTER_SANITIZE_NUMBER_INT);
$nome_sobremesa = filter_input(INPUT_POST, 'nome_sobremesa', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$preco_sobremesa = filter_input(INPUT_POST, 'preco_sobremesa', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuarios = "UPDATE sobremesa SET nro_sobremesa = '$nro_sobremesa', nome_sobremesa = '$nome_sobremesa', descricao = '$descricao', preco_sobremesa = '$preco_sobremesa' WHERE id_sobremesa = '$id_sobremesa'";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style = 'color: green; background:white;'><b>Sobremesa editada com sucesso.<b></p>";
	header("Location: listarSobremesas.php");
}else{
	$_SESSION['msg'] = "<p style = 'color: red; background:white;'><b>Erro ao editar.<b></p>";
	header("Location: listarSobremesas.php");
}

?>