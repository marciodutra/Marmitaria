<?php

session_start();

include_once("conexao.php");

$dia = $_POST['listDia'];
$prato = $_POST['listPrato'];

$sql="INSERT INTO pratododia VALUES (NULL, '$dia', '$prato')" ;
$res = mysqli_query($conn, $sql);

if (mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style = 'color: green; background:white;'><b>Prato inserido com sucesso.</b></p>";
	header("Location: cadastroPratoDoDia.php");
}else{
	$_SESSION['msg'] = "<p style = 'color: red; background:white;'><b>Erro ao inserir.</b></p>";
	header("Location: cadastroPratoDoDia.php");
}

mysqli_close($conn);
?>
