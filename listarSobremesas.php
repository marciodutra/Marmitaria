<?php

session_start();

include_once("conexao.php");

?>

<!DOCTYPE html>

<html>
<head>
	<title>Lista de Sobremesas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
  <link rel="stylesheet" href="css/styleIndex.css">


	
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->
</head>


<body style="background-color: #d3222a; color: #ffc82d;">
	<div class="container" style="width: 500px; margin-top: 50px;">
    <a href="inicioAdmin.php"><button type="submit" class="bt btn-primary"style="float:right;">Voltar</button></a>

		<h3>Lista de Sobremesas</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nro Sobremesa</th>
          <th scope="col">Nome da Sobremesa</th>
          <th scope="col">Descrição</th>
          <th scope="col">Preço</th>
        </tr>
      </thead>
      <tr>
        <?php

        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }

        $result_usuarios = "SELECT * FROM sobremesa";
        $resultado_usuarios = mysqli_query($conn, $result_usuarios);

        while ($row_sobremesa = mysqli_fetch_assoc($resultado_usuarios)){


        ?>

          <tr>
            <td><?php echo $row_sobremesa['nro_sobremesa'];?></td>
            <td><?php echo $row_sobremesa['nome_sobremesa'];?></td>
            <td><?php echo $row_sobremesa['descricao'];?></td>
            <td><?php echo $row_sobremesa['preco_sobremesa'];?></td>
            <td><a href="editarSobremesa.php?id_sobremesa=<?php echo $row_sobremesa['id_sobremesa'];?>" class="btn btn-warning" role="button">Editar</a></td>
            <td><a href="proc_excluirSobremesa.php?id_sobremesa=<?php echo $row_sobremesa['id_sobremesa'];?>" class="btn btn-warning" role="button">Excluir</a></td>
          </tr>
        </tr>

      <?php } ?>
      <hr>
    </table>
    <hr>
    
  </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>