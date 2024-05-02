<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Bebida</title>
	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<!--fazer CSS próprio para o cadastros.php => <link rel= "stylesheet" href="css/style.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->

</head>
<body style="background-color: #d3222a; color: #ffc82d;">
	<div class="container" id="tamanhoContainer" style="width: 500px; margin-top: 50px;">
		<h4>Cadastrar</h4>

		<?php
		
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

		?>
		<form action="proc_cadastroBebida.php" method="POST">
			<fieldset class="border p-2">
				<legend  class="w-auto">Bebida</legend>
				<div class="form-group">
					<label>Número da bebida:</label>
					<input type="number" min="1" class="form-control" id="nro_bebida" name="nro_bebida" required autocomplete="off" style="width: 100px;">
					<label>Nome:</label>
					<input type="text" class="form-control" id="nome_bebida" name="nome_bebida" placeholder="Digite o nome da bebida" required autocomplete="off">
					<label>Descrição:</label>
					<textarea class="form-control" id="descricao" name="descricao" placeholder="Digite as informações da bebida" rows="3"></textarea>
					<label>Preço (R$):</label>
					<input type="number" min="1" step="0.01" class="form-control" id="preco_bebida" name="preco_bebida" required autocomplete="off" style="width: 100px;">
				</div>
				<button type="submit" class="btn btn-primary" style="float:right;">Inserir</button>
			</fieldset>
			
		</form>
		<hr>
		<a href="inicioAdmin.php"><button type="submit" class="bt btn-primary">Voltar ao menu principal</button></a>
		<hr>
	</div>

</body>
</html>