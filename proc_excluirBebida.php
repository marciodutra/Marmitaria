<?php

session_start();

include_once ("conexao.php");

$id_bebida = filter_input(INPUT_GET, 'id_bebida', FILTER_SANITIZE_NUMBER_INT);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuarios = "DELETE FROM bebida WHERE id_bebida = '$id_bebida'";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style = 'color: green; background:white;'><b>Bebida excluída com sucesso.<b></p>";
	header("Location: listarBebidas.php");
}else{
	$_SESSION['msg'] = "<p style = 'color: red; background:white;'><b>Erro ao excluir.<b></p>";
	header("Location: listarBebidas.php");
}

?>