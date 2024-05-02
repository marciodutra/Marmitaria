<?php

session_start();

include_once ("conexao.php");

$id_sobremesa = filter_input(INPUT_GET, 'id_sobremesa', FILTER_SANITIZE_NUMBER_INT);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuarios = "DELETE FROM sobremesa WHERE id_sobremesa = '$id_sobremesa'";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style = 'color: green; background:white;'><b>Sobremesa excluída com sucesso.<b></p>";
	header("Location: listarSobremesas.php");
}else{
	$_SESSION['msg'] = "<p style = 'color: red; background:white;'><b>Erro ao excluir.<b></p>";
	header("Location: listarSobremesas.php");
}

?>