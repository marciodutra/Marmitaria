<?php

session_start();

include_once ("conexao.php");

$id_bebida = filter_input(INPUT_POST, 'id_bebida', FILTER_SANITIZE_NUMBER_INT);
$nro_bebida = filter_input(INPUT_POST, 'nro_bebida', FILTER_SANITIZE_NUMBER_INT);
$nome_bebida = filter_input(INPUT_POST, 'nome_bebida', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$preco_bebida = filter_input(INPUT_POST, 'preco_bebida', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuarios = "UPDATE bebida SET nro_bebida = '$nro_bebida', nome_bebida = '$nome_bebida', descricao = '$descricao', preco_bebida = '$preco_bebida' WHERE id_bebida = '$id_bebida'";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style = 'color: green; background:white;'><b>Bebida editada com sucesso.<b></p>";
	header("Location: listarBebidas.php");
}else{
	$_SESSION['msg'] = "<p style = 'color: red; background:white;'><b>Erro ao editar.<b></p>";
	header("Location: listarBebidas.php");
}

?>