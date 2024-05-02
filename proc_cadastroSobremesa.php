<?php

session_start();

include_once ("conexao.php");

$nro_sobremesa = filter_input(INPUT_POST, 'nro_sobremesa', FILTER_SANITIZE_NUMBER_INT);
$nome_sobremesa = filter_input(INPUT_POST, 'nome_sobremesa', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$preco_sobremesa = filter_input(INPUT_POST, 'preco_sobremesa', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuarios = "INSERT INTO sobremesa (nro_sobremesa, nome_sobremesa, descricao, 'preco_sobremesa') VALUES ('$nro_sobremesa', '$nome_sobremesa', '$descricao', '$preco_sobremesa')";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style = 'color: green; background:white;'><b>sobremesa inserida com sucesso.<b></p>";
	header("Location: cadastroSobremesa.php");
}else{
	$_SESSION['msg'] = "<p style = 'color: red; background:white;'><b>Erro ao inserir.<b></p>";
	header("Location: cadastroSobremesa.php");
}

?>