<html lang = "pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro Funcionário</title>
	<meta name="author" content="Ana Leonel">
	<link rel="stylesheet" href="CSS/estiloformuláriocadastro.css">
</head>
<img src="css/logobem.png" id="logobem">
<img src="css/familiabem.png" id="familia">
<body>
	<div class="container">
			<nav>
				<ul class="menu">
					<a href="formulariocadastro.php"><li>Novo Funcionário</li></a>
					<a href="editarfuncionario.php"><li>Editar dados</li></a>
					<a href="telainicial.php"><li>Voltar a Página Inicial</li></a>
				</ul>
			</nav>
	
		<section>
		<h1>Alterar dados - Funcionário</h1><hr><br>	
		
		
		<form method="post">
			<fieldset>
			<legend>Alterar Senha</legend>			
			Nova senha
			<input class="campos" type="password" name="senha">
			<br><br>
			Confirme a nova senha
			<input class="campos" type="password" name="senha" required>
			<br><br>
			<input type="submit" value="ALTERAR" class="btn cadastrar">	
			<input type="reset" value="LIMPAR CAMPOS" class="btn limpar">
			<br><br>
			<legend>Alterar local de trabalho</legend>
			Local de Trabalho	
			<select class="campo_local" name="local" required>
				<option>Escolha a opção</option>
				<option>DAS - Secretaria de Promoção Social</option>
				<option>CRAS Itinerante</option>
				<option>CRAS Lívia Fidelis</option>
				<option>CRAS Marina Caron</option>
				<option>CRAS Padre José</option>
				<option>CRAS Regiane Felix</option>
				<option>CRAM</option>
				<option>CREAS</option>
				<option>Fundo Social de Solidariedade</option>
			</select>	
			<br><br>
			<br><br>
			<input type="submit" value="ALTERAR" class="btn cadastrar">	
			</fieldset>
			
			</form>
		</section>
	
	</div>




</body>

</html>