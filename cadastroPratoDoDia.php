<?php

session_start();

include_once ("conexao.php");

?>
<!DOCTYPE html>
<head>
	<title>Cadastro de Cardápio</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<link rel="stylesheet" href="css/styleIndex.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->
</head>

<body style="background-color: #d3222a; color: #ffc82d;">
	
	<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>

	<div class="container" style="width: 700px; margin-top: 50px;">

		<a href="inicioAdmin.php"><button type="submit" class="bt btn-primary">Voltar ao menu principal</button></a>

		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>

		<div class="row">

			<div class="col-sm">

				<form method="POST" action="proc_cadastroPratoDoDia.php">
					<fieldset class="border p-2">
						<legend class="w-auto"><h4>Cadastrar Prato do Dia</h4></legend>

						<label>Selecione o dia:</label><br>
						<select name="listDia">
							
							<?php
							$sql="SELECT * FROM dia ORDER BY 'id_dia'";
							$res=mysqli_query($conn, $sql);

							while($vreg = mysqli_fetch_row($res)){

								$vdia=$vreg[0];
								$vnomeDia=$vreg[1];

								echo "<option value=$vdia>$vdia</option>";
							}
							?>

						</select>

						<hr>

						<label>Selecione o Prato:</label><br>
						<select name=listPrato>
							<?php
							$sql="SELECT * FROM prato";
							$res=mysqli_query($conn, $sql);

							while($vreg = mysqli_fetch_row($res)){
								$vprato=$vreg[0];
								$vnomePrato=$vreg[1];
								$vdescricao=$vreg[2];

								echo "<option value=$vprato>$vprato</option>";
							}
							?>
						</select>

						<input type="submit" value="Inserir" style="float:right;">

					</fieldset>
				</form>
			</div>

			<div class="col-sm">
        		<legend>Dias</legend>

        		<?php

        		$result_usuarios = "SELECT * FROM dia";
        		$resultado_usuarios = mysqli_query($conn, $result_usuarios);

		        while ($row_dia = mysqli_fetch_assoc($resultado_usuarios)){

		        	?>
		        	<tr>
		        		<td><b><?php echo $row_dia['id_dia'];?>)</b></td>
		        		<td><?php echo $row_dia['nome_dia'];?></td>
		        		<hr>
		        	</tr>
		        <?php } ?>

		    </div>
			
			<div class="col-sm">
				<legend>Pratos</legend>

				<?php
				$result_usuarios = "SELECT * FROM prato";
        		$resultado_usuarios = mysqli_query($conn, $result_usuarios);

        		while ($row_prato = mysqli_fetch_assoc($resultado_usuarios)){

        			?>
        			<tr>
        				<td><b><?php echo $row_prato['id_prato'];?>)</b></td>
        				<td><?php echo $row_prato['nome_prato'];?>:</td>
        				<td><?php echo $row_prato['descricao'];?></td>
        				<hr>
        			</tr>
        		<?php } ?>

        	</div>

        	<div class="col-sm">
        		<legend>Cardápio prévio</legend>
        		<?php
        		$result_usuarios = "SELECT * FROM pratododia";
        		$resultado_usuarios = mysqli_query($conn, $result_usuarios);

		        while ($row_pratododia = mysqli_fetch_assoc($resultado_usuarios)){
		        	?>

		        	<tr>
		        		<td>Dia: <?php echo $row_pratododia['id_dia'];?> - </td>
            			<td>Prato: <?php echo $row_pratododia['id_prato'];?></td>
            			<td><a href="proc_excluirPratoDoDia.php?id_pratoDia=<?php echo $row_pratododia['id_pratoDia'];?>" class="btn btn-warning" role="button">Excluir</a></td>
            			<hr>
            		</tr>
            	<?php } ?>
        	</div>
        </div>
    </div>
</body>