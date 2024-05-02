<!DOCTYPE html>
<html>
<head>
	<title>Atualizar Cardápio da Semana</title>
	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<link rel= "stylesheet" href="style.css"><!--para estilização específica para o código (cores, espaço entre botões, etc.)-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->
</head>
<body style="background-color: #d3222a; color: #ffc82d;">
	<!--Para as atualizações de prato para os dias da semana, necessário importar do cadastro de pratos-->
	<div class="container" id="semanaContainer" style="width: 500px; margin-top: 50px;">
		<h2>Atualizar o Cardápio da Semana</h2>
		<hr>
		<h3>Segunda-Feira</h3>
		<select class="mdb-select md-form" searchable="Search here..">
			<option value="" disabled selected>Segunda-Feira</option>
	  		<option value="1">1</option>
	  		<option value="2">2</option>
	  		<option value="3">3</option>
	  		<option value="3">4</option>
		</select>
		<hr>
		<h3>Terça-Feira</h3>
		<select class="mdb-select md-form" searchable="Search here..">
			<option value="" disabled selected>Terça-Feira</option>
	  		<option value="1">1</option>
	  		<option value="2">2</option>
	  		<option value="3">3</option>
	  		<option value="3">4</option>
		</select>
		<hr>
		<h3>Quarta-Feira</h3>
		<select class="mdb-select md-form" searchable="Search here..">
			<option value="" disabled selected>Quarta-Feira</option>
	  		<option value="1">1</option>
	  		<option value="2">2</option>
	  		<option value="3">3</option>
	  		<option value="3">4</option>
		</select>
		<hr>
		<h3>Quinta-Feira</h3>
		<select class="mdb-select md-form" searchable="Search here..">
			<option value="" disabled selected>Quinta-Feira</option>
	  		<option value="1">1</option>
	  		<option value="2">2</option>
	  		<option value="3">3</option>
	  		<option value="3">4</option>
		</select>
		<hr>
		<h3>Sexta-Feira</h3>
		<select class="mdb-select md-form" searchable="Search here..">
			<option value="" disabled selected>Sexta-Feira</option>
	  		<option value="1">1</option>
	  		<option value="2">2</option>
	  		<option value="3">3</option>
	  		<option value="3">4</option>
		</select>
		<hr>
		<a href="inicioAdmin.php"><button type="submit" class="bt btn-primary">Voltar ao menu principal</button></a>
		<hr>
	</div>
	
</body>
</html>