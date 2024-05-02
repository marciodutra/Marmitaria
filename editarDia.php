<?php
session_start();

include_once("conexao.php");

$id_dia = filter_input(INPUT_GET, 'id_dia', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM dia WHERE id_dia = $id_dia";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while ($row_dia = mysqli_fetch_assoc($resultado_usuario)){

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Dia</title>
	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<!--fazer CSS próprio para o cadastros.php => <link rel= "stylesheet" href="css/style.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->


</head>

<body style="background-color: #d3222a; color: #ffc82d;">

	<div class="container" id="tamanhoContainer" style="width: 500px; margin-top: 50px;">
		<h4>Editar</h4>

		<?php
		
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

		?>
		<form action="proc_editarDia.php" method="POST">
			<fieldset class="border p-2">
				<legend  class="w-auto">Dia</legend>
				<div class="form-group">
					
					<input type="hidden" name="id_dia" value="<?php echo $row_dia['id_dia'];?>">

					<label>Nome:</label>
					<input type="text" class="form-control" id="nome_dia" name="nome_dia" value="<?php echo $row_dia['nome_dia']?>">
					
					<?php }?>	

					<hr>

					<input type="submit" value="Confirmar" style="float:right;">

				</div>
				
			</fieldset>
			
		</form>

		<hr>
		<a href="inicioAdmin.php"><button type="submit" class="bt btn-primary">Voltar ao menu principal</button></a>
		<hr>
		
	</div>
	

</body>
</html>