<?php

session_start();

include_once("conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Marmitaria OPSIW</title>
	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<link rel= "stylesheet" href="css/styleIndex.css"><!--para estilização específica para o index código (cores, espaço entre botões, etc.)-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->

	
</head>
<body id="page-top">

	<!---------------------------------Cabeçalho de menus e links----------------------------->
	<div class="top-nav-bar" id="mainNav">
		<div class="search-box">
            <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
            <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
            <a href="#page-top"><img src="img/refeicao.jpg" class="logo"></a>
            <input type="text" class="form-control">
            <span class="input-group-text"><i class="fa fa-search"></i></span>
        </div>
        <div class="menu-bar">
            <ul>
                <li><a href="loginCliente.php"><i class="fa fa-sign-in"></i>Log In</a></li>
                <li><a href="cadastrarCliente.php"><i class="fa fa-pencil-square-o"></i>Cadastrar</a></li>
                <li><a href="login.php"><i class="fa fa-user-circle"></i>Administrador</a></li>
            </ul>
        </div>
    </div>

    <!---------------------Side-menu------------------------------->
    
    <section class="header">
        <div class="side-menu" id="side-menu">
            <ul>
                <li><a href="#tamanho"><i class="fa fa-cutlery"></i>Tamanho</a></li>
                <li><a href="#bebida"><i class="fa fa-glass"></i>Bebida</a></li>
                <li><a href="#sobremesa"><i class="fa fa-spoon"></i>Sobremesa</a></li>
            </ul>
        </div>

<!------------------------Carousel---------------------------------------->


		<div class="row">
            <div class="col-md-10 mb-3">
            
            <div class="slider">
            <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
            	<div class="carousel-inner" style="width: 500px;">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/carousel_01.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/carousel_02.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/carousel_03.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/carousel_04.jpg" alt="Third slide">
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                    <li data-target="#slider" data-slide-to="3"></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-md-2 mb-3">
                    <img src="img/logoOpsiw.png" style="width: 300px; opacity: 0.7; border: 10px solid rgba(255,255,255,0.5); padding: 10px; float: right;border-top-right-radius: 10px;
    border-bottom-left-radius: 10px; border-color: #ffc82d;
">
                    <h3>Marmitaria <b>Márcio Dutra!</b><br>O melhor do seu dia!</h3>
        </div>
    </div>


    </section>


    <hr>



<!------------------------------Cardapios------------------------------>

    <section class="cardapio">
    	<div class="container">
            <div class="tittle-box">
                <h2>Cardápio da Semana<i class="fa fa-cutlery"></i></h2>
            </div>

            <?php 

            $result_usuarios = "SELECT * FROM pratododia, dia, prato WHERE pratododia.id_dia = dia.id_dia AND pratododia.id_prato = prato.id_prato ORDER BY dia.id_dia";
            $resultado_usuarios = mysqli_query($conn, $result_usuarios);

            while ($row_pratododia = mysqli_fetch_assoc($resultado_usuarios)){

                ?>


                <ul class="list-unstyled">
                    <li class="media">
                        <img src="img/segundaFeira.jpg" class="mr-3" alt="...">
                        <div class="media-body">
                            <b><?php echo $row_pratododia['nome_dia'];?></b>
                            <br>
                            <?php echo $row_pratododia['nome_prato'];?>
                            <br>
                            <?php echo $row_pratododia['descricao'];?> 
                        
    				    </div>
  				    </li>
                </ul>

            <?php } ?>

            
            
		</div>
	</section>

    <hr>

<!--------------------------------Seção para escolha de tamanho(s)--------------------------->


<!------IMPORTANTE---------------->
<!------Cada vez que clicar no ícone de adicionar ao pedido, aumenta no carrinho de compras-------------->
<!---------------------------Importar valores para cada tamanho------------------------------------------>


	<section class="on-sale" id="tamanho">
        <div class="container">
            <div class="tittle-box">
                <h2>Escolha o Tamanho. <i class="fa fa-cutlery"></i></h2>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/pedidoTamanhoGrandeEspecial.jpg" width="200" height="200" alt="Grande Especial">
                        <h3>Grande Especial (1200ml)</h3>
                        <h4>R$ 18,00</h4>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Adicionar ao Pedido"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/pedidoTamanho.jpg" width="200" height="200" alt="Média">
                        <h3>Média (1110ml)</h3>
                        <h4>R$ 15,00</h4>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Adicionar ao Pedido"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/pedidoTamanho.jpg" width="200" height="200" alt="Tamanho Pequeno">
                        <h3>Pequena (750ml)</h3>
                        <h4>R$ 10,00</h4>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Adicionar ao Pedido"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>


<!----------------------------------Seção Bebidas-------------------------------------------->
<!---------------------GRID responde conforme inserção de produtos------------------------>


    <section class="on-sale" id="bebida">
        <div class="container">
            <div class="tittle-box">
                <h2>Vai beber alguma coisa? <i class="fa fa-glass"></i></h2>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/bebidasDimensionada.jpg" width="200" height="auto" alt="Grande Especial">
                        <h3>Descrição da Bebida</h3>
                        <h4>Preço da Bebida</h4>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Adicionar ao Pedido"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/bebidasDimensionada.jpg" width="200" height="auto" alt="Média">
                        <h3>Descrição da Bebida</h3>
                        <h4>Preço da Bebida</h4>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Adicionar ao Pedido"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/bebidasDimensionada.jpg" width="200" height="auto" alt="Tamanho Pequeno">
                        <h3>Descrição da Bebida</h3>
                        <h4>Preço da Bebida</h4>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Adicionar ao Pedido"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>


<!----------------------------------Seção Sobremesa-------------------------------------------->


    <section class="on-sale" id="sobremesa">
        <div class="container">
            <div class="tittle-box">
                <h2>Sobremesa? <i class="fa fa-spoon"></i></h2>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/sobremesaDimensionada.jpg" width="200" height="auto" alt="Grande Especial">
                        <h3>Descrição da Sobremesa</h3>
                        <h4>Preço da Sobremesa</h4>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Adicionar ao Pedido"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/sobremesaDimensionada.jpg" width="200" height="auto" alt="Média">
                        <h3>Descrição da Sobremesa</h3>
                        <h4>Preço da Sobremesa</h4>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Adicionar ao Pedido"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/sobremesaDimensionada.jpg" width="200" height="auto" alt="Tamanho Pequeno">
                        <h3>Descrição da Sobremesa</h3>
                        <h4>Preço da Sobremesa</h4>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Adicionar ao Pedido"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <hr>


    <!-----------------------------feature-categories----------------------->

	<section class="featured-categories">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/refeicaoDimensionada.jpg">
                </div>
                <div class="col-md-4">
                    <img src="img/bebidasDimensionada.jpg">
                </div>
                <div class="col-md-4">
                    <img src="img/sobremesaDimensionada.jpg">
                </div>
            </div>
            <hr>
            <h4>Horário de funcionamento (pedidos e entregas):</h4>
            <h5>Segunda a sexta, das 11 às 15 horas.</h5>
        </div>

    </section>

<!-----------------------------------Footer------------------------>

    <footer class="footer" style="background-color: #ffc82d;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Márcio Dutra</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline endereco">
                        <li class="list-inline-item">
                            <a href="https://www.google.com.br/maps/place/Est%C3%A1tua+de+Iemanj%C3%A1/@-32.1835126,-52.1608167,15.25z/data=!4m5!3m4!1s0x951185ce45e1a95b:0x3d5392a6e6f6ba40!8m2!3d-32.1872968!4d-52.1560371" target="_blank" style="text-decoration: none; color: #d3222a;">
                                Rua da PUC, 555
                                <i class="fa fa-map-marker" style="color: white;"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://api.whatsapp.com/send?1=ptBR&phone=5514991220621" target="_blank" style="text-decoration: none; color: #d3222a;">(51) 99122 0621
                                <i class="fa fa-whatsapp" style="color: white;"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            Entre em contato conosco: <a href="#">
                                <i class="fab fa-linkedin-in"></i>51 994690210
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Política de privacidade</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Termos de uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<!-----------------------Script---------------------->    
        
        <script>
            function openmenu()
            {
                document.getElementById("side-menu").style.display="block";
                document.getElementById("menu-btn").style.display="none";
                document.getElementById("close-btn").style.display="block";
            }
            function closemenu()
            {
                document.getElementById("side-menu").style.display="none";
                document.getElementById("menu-btn").style.display="none";
                document.getElementById("close-btn").style.display="none";
            }
        </script>

</body>
</html>