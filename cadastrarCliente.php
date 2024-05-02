<?php

require_once "CLASSES/clientes.php";
$u = new Usuario;// instanciando classe Usuario de clientes.php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Cliente</title>
	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<!--fazer CSS próprio para o cadastros.php => <link rel= "stylesheet" href="css/style.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->
</head>

<body style="background-color: #d3222a; color: #ffc82d;">
    <div class="container" id="tamanhoContainer" style="width: 700px; margin-top: 50px;">
    	<fieldset>
    		<legend>Cadastrar Cliente</legend>

    		<form name="form" id="form" method="POST">
    			<div class="form-row">
    				<div class="col-md-6 mb-3">
    					<label for="nome_cliente">Nome</label>
    					<input type="text" name="nome_cliente" id="nome_cliente" class="form-control"placeholder="Nome Completo" maxlength="100">
    				</div>
    				<div class="col-md-6 mb-3">
    					<label for="email_cliente">E-mail</label>
    					<input type="email" name="email_cliente" id="email_cliente" class="form-control" placeholder="Usuário (e-mail)" maxlength="40">
    				</div>
    			</div>
    			<div class="form-row">
    				<div class="col-md-6 mb-3">
    					<label for="cpf_cliente">CPF</label>
    					<input type="text" name="cpf_cliente" id="cpf_cliente" class="form-control"placeholder="CPF" maxlength="11">
    				</div>
    				<div class="col-md-6 mb-3">
    					<label for="telefone_cliente">Telefone</label>
    					<input type="text" name="telefone_cliente" id="telefone_cliente" class="form-control" placeholder="Usuário (telefone)" maxlength="15">
    				</div>
    			</div>
    			<div class="form-row">
    				<div class="col-md-6 mb-3">
    					<label for="endereco">Endereço</label>
    					<input type="text" name="endereco" id="endereco" class="form-control"placeholder="Logradouro" maxlength="70">
    				</div>
    				<div class="col-md-2 mb-3">
    					<label for="numero">Nº</label>
    					<input type="text" name="numero" id="numero" class="form-control" maxlength="7">
    				</div>
    				<div class="col-md-4 mb-3">
    					<label for="complemento">Complemento</label>
    					<input type="text" name="complemento" id="complemento" class="form-control" maxlength="15">
    				</div>
    			</div>
    			<div class="form-row">
    				<div class="col-md-4 mb-3">
    					<label for="bairro">Bairro</label>
    					<input type="text" name="bairro" id="bairro" class="form-control"placeholder="Bairro" maxlength="50">
    				</div>
    				<div class="col-md-4 mb-3">
    					<label for="cep">CEP</label>
    					<input type="text" name="cep" id="cep" placeholder="CEP" class="form-control" maxlength="10">
    				</div>
    				<div class="col-md-3 mb-3">
    					<label for="cidade">Cidade</label>
    					<input type="text" name="cidade" id="cidade" placeholder="Cidade" class="form-control" maxlength="20">
    				</div>
    				<div class="col-md-1 mb-3">
    					<label for="uf">UF</label>
    					<input type="text" name="uf" id="uf" class="form-control" maxlength="2">
    				</div>
    			</div>

    			<hr>

    			<legend>Endereço de Entrega</legend>

    			<div class="form-row">
    				<div class="col-md-6 mb-3">
    					<label for="end_entrega">Endereço</label>
    					<input type="text" name="end_entrega" id="end_entrega" class="form-control"placeholder="Logradouro" maxlength="70">
    				</div>
    				<div class="col-md-2 mb-3">
    					<label for="num_entrega">Nº</label>
    					<input type="text" name="num_entrega" id="num_entrega" class="form-control" maxlength="7">
    				</div>
    				<div class="col-md-4 mb-3">
    					<label for="comp_entrega">Complemento</label>
    					<input type="text" name="comp_entrega" id="comp_entrega" class="form-control" maxlength="15">
    				</div>
    			</div>
    			<div class="form-row">
    				<div class="col-md-4 mb-3">
    					<label for="bairro_entrega">Bairro</label>
    					<input type="text" name="bairro_entrega" id="bairro_entrega" class="form-control"placeholder="Bairro" maxlength="50">
    				</div>
    				<div class="col-md-4 mb-3">
    					<label for="cep_entrega">CEP</label>
    					<input type="text" name="cep_entrega" id="cep_entrega" placeholder="CEP" class="form-control" maxlength="10">
    				</div>
    				<div class="col-md-3 mb-3">
    					<label for="cidade_entrega">Cidade</label>
    					<input type="text" name="cidade_entrega" id="cidade_entrega" placeholder="Cidade" class="form-control" maxlength="20">
    				</div>
    				<div class="col-md-1 mb-3">
    					<label for="uf_entrega">UF</label>
    					<input type="text" name="uf_entrega" id="uf_entrega" class="form-control" maxlength="2">
    				</div>
    			</div>

    			<div class="form-group">
            		<label>Senha</label>
            		<input type="password" name="senha_cliente" id="senha_cliente" class="form-control" placeholder="Senha" style="width: 100px;">        
              	
    				<label>Confirmar Senha</label>
    				<input type="password" name="confSenha" id="confSenha" class="form-control"placeholder="Confirmar Senha" style="width: 100px;">
    			</div>

    			<input type="submit" name="" value="Cadastrar" style="float: right;">
    		</form>
    	</fieldset>

    	<hr>
		<a href="index.php"><button type="submit" class="bt btn-primary">Voltar à tela principal</button></a>
		<hr>

	</div>

	<?php
	//verifica se a pessoa clicou em Cadastrar
	if(isset($_POST['nome_cliente']))
	{
		$nome_cliente = addslashes($_POST['nome_cliente']);
		$email_cliente = addslashes($_POST['email_cliente']);
		$endereco = addslashes($_POST['endereco']);
		$numero = addslashes($_POST['numero']);
		$complemento = addslashes($_POST['complemento']);
		$bairro = addslashes($_POST['bairro']);
		$cep = addslashes($_POST['cep']);
		$cidade = addslashes($_POST['cidade']);
		$uf = addslashes($_POST['uf']);

		$end_entrega = addslashes($_POST['end_entrega']);
		$num_entrega = addslashes($_POST['num_entrega']);
		$comp_entrega = addslashes($_POST['comp_entrega']);
		$bairro_entrega = addslashes($_POST['bairro_entrega']);
		$cidade_entrega = addslashes($_POST['cidade_entrega']);$
		$uf_entrega = addslashes($_POST['uf_entrega']);


		$senha_cliente = addslashes($_POST['senha_cliente']);
		$confSenha = addslashes($_POST['confSenha']);

		//verificar se está preenchido
		if(!empty($nome_cliente) && !empty($email_cliente) && !empty($endereco) && !empty($senha_cliente) && !empty($numero) && !empty($complemento) && !empty($bairro) && !empty($cep) && !empty($cidade) && !empty($uf) && !empty($end_entrega) && !empty($num_entrega) && !empty($comp_entrega) && !empty($bairro_entrega) && $cep_entrega && !empty($cidade_entrega) && !empty($uf_entrega) && !empty($senha_cliente) && !empty($confSenha))
		{
			$u -> conectar("marmitaria", "localhost", "root", "");
			if($u -> msgErro == "")
			{
				if($senha_cliente == $confSenha)
				{
					if($u -> cadastrar($nome_cliente, $email_cliente, $endereco,$senha_cliente))
						{
							echo "Cadastrado com sucesso.";

						}else{
							echo "Email já cadastrado";
						}
				}
				else
					echo "Senha e confirmar senha não correspondem.";
			}
			else{
				echo "Erro: ".$u -> msgErro;
			}

		} else {
			echo "Preencha todos os campos.";
		}
	}

	?>
	
</body>
</html>