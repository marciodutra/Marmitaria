<?php
session_start();
include_once("conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Dia</title>
	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<!--fazer CSS próprio para o cadastros.php => <link rel= "stylesheet" href="css/style.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->

</head>
<body style="background-color: #d3222a; color: #ffc82d;">
	<div class="container" id="tamanhoContainer" style="width: 500px; margin-top: 50px;">
		<div class="row">
			<div class="col-sm">
				<h4>Cadastrar um Novo Dia</h4>
				<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>

				<form action="proc_cadastroDia.php" method="POST">
					<fieldset class="border p-2">
						<legend  class="w-auto">Dia</legend>
						<div class="form-group">
							<label>Nome:</label>
							<input type="text" class="form-control" id="nome_dia" name="nome_dia" placeholder="Digite o nome do dia" required autocomplete="off">
						</div>

						<button type="submit" class="btn btn-primary" style="float:right;">Inserir</button>
					</fieldset>
			
				</form>
				<hr>
			</div>
			<div class="col-sm">
				<?php
				$result_usuarios = "SELECT * FROM dia";
        		$resultado_usuarios = mysqli_query($conn, $result_usuarios);

		        while ($row_dia = mysqli_fetch_assoc($resultado_usuarios)){

		        	?>
		        	<tr>

		        		<td><?php echo $row_dia['id_dia'];?></td>
            			<td><?php echo $row_dia['nome_dia'];?></td>
            			<td><a href="proc_excluirDia.php?id_dia=<?php echo $row_dia['id_dia'];?>" class="btn btn-warning" role="button">Excluir</a></td><hr>
            		</tr>

            		<?php } ?>

				<a href="inicioAdmin.php"><button type="submit" class="bt btn-primary">Voltar ao menu principal</button></a>
		<hr>
	</div>

</body>
</html>