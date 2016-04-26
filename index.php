<html>
<head>
	<link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="./bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="./bootstrap/signin.css" rel="stylesheet">
	<script src="./bootstrap/ie-emulation-modes-warning.js"></script>
	<title>Cadastro</title>


	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){


		$("#enviar").click(function(){
			//recebe valor dos campos de texto
			var nome = document.getElementsByName("Tnome")[0].value;
			var telefone = document.getElementsByName("Ttelefone")[0].value;
			//chama ajax
			ajax(nome,telefone);

		});

	});

	function ajax(nome,telefone){
		//previne contra reload
		event.preventDefault();
		//envia data pro cadastro que insere os dados no BD
		$.ajax({
			url:"cadastrar.php",
			type:"POST",
			data: {"nome":nome,"telefone":telefone},
		});

		alert("Cadastrao com sucesso!");
		//reload tabela
		setInterval(function(){
			$("#tabela").load("tabela.php");
		}, 1000);
		return false;
	}
	</script>	
</head>

<body>
	<center>
		<form class="form-signin">

			<input type="text" class="form-control"name="Tnome" placeholder="Nome"value=""><br/>
			<input type="text" class="form-control"name="Ttelefone" placeholder="Telefone"value=""><br/>
			
			<input type="submit" class='btn btn-lg btn-primary btn-block' id="enviar">
		</form>
	</center>

	<div class="container" id="tabela">
		<?php include "tabela.php" ?>
		
	</div>
</body>
</html>
