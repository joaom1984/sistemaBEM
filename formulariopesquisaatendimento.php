<html lang = "pt-br">
<head>
	<meta charset="utf-8">
	<title>Pesquisa Usuário</title>
	<meta name="author" content="Ana Leonel">
	<link rel="stylesheet" href="CSS/estiloformuláriocadastro.css">
</head>
<img src="css/logobem.png" id="logobem">
<img src="css/familiabem.png" id="familia">

<body>
	<div class="container">
			<nav>
				<ul class="menu">
					<a href="formulariopesquisa.php"><li>Pesquisa Usuário</li></a>
					<a href="formulariopesquisaatendimento.php"><li>Pesquisa Atendimento</li></a>
					<a href="formulariopesquisaend.php"><li>Pesquisa Endereço</li></a>
					<a href="telainicial.php"><li>Voltar a Página Inicial</li></a>
				</ul>
			</nav>
	
		<section>
		<h1>Pesquisa Atendimento</h1><hr><br>	
		<form method="post" action="processa.php">
			<fieldset>
			<legend>Preencha os campos abaixo</legend>	
			CUPOM
			<input class="campos" type="text" name="cupom" required autofocus>
			<input type="submit" value="Pesquisar" class="btn cadastrar">
			</fieldset>
			
			</form>
		
		
		</section>
	
	</div>




</body>

</html>