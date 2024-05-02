<?php

session_start();

include_once ("conexao.php");

$id_pratoDia = filter_input(INPUT_GET, 'id_pratoDia', FILTER_SANITIZE_NUMBER_INT);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuarios = "DELETE FROM pratododia WHERE id_pratoDia = '$id_pratoDia'";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style = 'color: green; background:white;'><b>Prato excluído com sucesso.</b></p>";
	header("Location: cadastroPratoDoDia.php");
}else{
	$_SESSION['msg'] = "<p style = 'color: red; background:white;'><b>Erro ao excluir.</b></p>";
	header("Location: cadastroPratoDoDia.php");
}

?>