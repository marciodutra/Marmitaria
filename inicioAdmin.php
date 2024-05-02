<?php

session_start();
if(!isset($_SESSION['id_admin']))
{
	header("location: login.php");
	exit;
}

include_once ("conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tela do Administrador</title>
	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<!--fazer CSS próprio para o cadastros.php => <link rel= "stylesheet" href="css/style.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->
</head>
<body style="background-color: #d3222a; color: #ffc82d;">

	<?php

	$result_usuarios = "SELECT * FROM administrador";
    $resultado_usuarios = mysqli_query($conn, $result_usuarios);

    $row_administrador = mysqli_fetch_assoc($resultado_usuarios)
    ?>

	<div class="container" style="width: 500px; margin-top: 50px;">
		<h3>Bem vindo, <?php echo $row_administrador['nome_admin'];?>.</h3>
		
		<div class="menu-bar">
			<ul>Pratos
               	<li><a href="listarPratos.php">Editar Pratos</a></li>
               	<li><a href="cadastroPrato.php">Inserir Prato</a></li>
			</ul>
        </div>
        <div class="menu-bar">
			<ul>Bebidas
               	<li><a href="listarBebidas.php">Editar Bebidas</a></li>
               	<li><a href="cadastroBebida.php">Inserir Nova Bebida</a></li>
	        </ul>
        </div>
        <div class="menu-bar">
			<ul>Sobremesas
               	<li><a href="listarSobremesas.php">Editar Sobremesas</a></li>
               	<li><a href="cadastroSobremesa.php">Inserir Nova Sobremesa</a></li>
	        </ul>
        </div>
        <div class="menu-bar">
			<ul>Dias
               	<li><a href="listarDia.php">Editar Dias</a></li>
               	<li><a href="cadastroDia.php">Inserir Novo Dia</a></li>
	        </ul>
        </div>
        <div class=container>
        	<button type="submit" class="btn btn-dark"><a href="cadastroPratoDoDia.php">Atualizar Cardápio da Semana</button>
        </div><br>
        <div class=container>
        	<button type="submit" class="btn btn-dark"><a href="#">Relatórios</button>
        </div>

		<hr>
		<a href="index.php"><button type="submit" class="bt btn-primary">Voltar à tela principal</button></a>
		<hr>
	</div>
	
</body>
</html>