<html lang = "pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro Membro Familiar</title>
	<meta name="author" content="Ana Leonel">
	<link rel="stylesheet" href="CSS/estiloformuláriocadastro.css">
</head>
<img src="css/logobem.png" id="logobem">
<img src="css/familiabem.png" id="familia">
<body>
	<div class="container">
			<nav>
				<ul class="menu">
					<a href="formulariocadastro.php"><li>Novo Usuário</li></a>
					<a href="formulariomembro.php"><li>Membro da família</li></a>
					<a href="formularioatendimento.php"><li>Novo atendimento</li></a>
					<a href="telainicial.php"><li>Voltar a Página Inicial</li></a>
				</ul>
			</nav>
	
		<section>
		<h1>Novo Membro Familiar</h1><hr><br>	
		
		
		<form method="post" action="processa.php">
			<fieldset>
			<legend>Preencha os campos abaixo</legend>	
			CPF
			<input class="campos" type="text" name="cpf_usuario" required autofocus>
			<input type="submit" value="Pesquisar" class="btn cadastrar">
			Vínculo
			<input class="campos" type="text" name="vinculo" required>	
			<br><br>
			Nome Completo
			<input class="camponome" type="text" maxlength="50" size="50" name="nome_usuario" required>
			<br><br>
			
			<legend>Novo Membro Familiar</legend><hr><br>
			CPF
			<input class="campos" type="text" name="cpf_usuario" required autofocus>
			Vínculo
			<input class="campos" type="text" name="vinculo" required>	
			<br><br>
			Nome Completo
			<input class="camponome" type="text" maxlength="50" size="50" name="nome_usuario" required>
			<br><br>
			<br><br>
			<input type="submit" value="ADICIONAR" class="btn cadastrar">	
			<input type="reset" value="LIMPAR CAMPOS" class="btn limpar">
			</fieldset>
			
			</form>
		</section>
	
	</div>




</body>

</html>