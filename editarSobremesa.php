<?php
session_start();

include_once("conexao.php");

$id_sobremesa = filter_input(INPUT_GET, 'id_sobremesa', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM sobremesa WHERE id_sobremesa = $id_sobremesa";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while ($row_sobremesa = mysqli_fetch_assoc($resultado_usuario)){

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Sobremesa</title>
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
		<form action="proc_editarSobremesa.php" method="POST">
			<fieldset class="border p-2">
				<legend  class="w-auto">Sobremesa</legend>
				<div class="form-group">
					
					<input type="hidden" name="id_sobremesa" value="<?php echo $row_sobremesa['id_sobremesa'];?>">

					<label>Número da sobremesa:</label>
					<input type="number" class="form-control" id="nro_sobremesa" name="nro_sobremesa" value="<?php echo $row_sobremesa['nro_sobremesa']?>" style="width: 100px;">
					<label>Nome:</label>
					<input type="text" class="form-control" id="nome_sobremesa" name="nome_sobremesa" value="<?php echo $row_sobremesa['nome_sobremesa']?>">
					<label>Descrição:</label>
					<input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $row_sobremesa['descricao']?>">
					<label>Preço (R$):</label>
					<input type="number" min="1" step="0.01" class="form-control" id="preco_sobremesa" name="preco_sobremesa" value="<?php echo $row_sobremesa['preco_sobremesa']?>" style="width: 100px;">

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