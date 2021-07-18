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
					<a href="formularioatendimento.php"><li>Novo Atendimento</li></a>
					<a href="formulariopesquisaatendimento.php"><li>Pesquisa Atendimento</li></a>
					<a href="telainicial.php"><li>Voltar a Página Inicial</li></a>
				</ul>
			</nav>
	
		<section>
		<h1>Novo Atendimento</h1><hr><br>	
		
		
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
			
			<legend>Atendimento</legend><hr><br>
			Data do Atendimento
			<input class="campos" type="date" placeholder="DD/MM/AAAA" name="data_atendimento" required>
			CUPOM
			<input class="campos" type="text" name="cupom">
			<br><br>
			Observações
			<input type="text" class="campobs" name="descricao_atendimento">
			<br><br>
			Funcionário
			<input class="campos" type="text" name="funcionario">
			Unidade
			<input class="campos" type="text" name="local" required>
			<br><br>
			<br><br>
			<input type="submit" value="SALVAR" class="btn cadastrar">	
			<input type="reset" value="LIMPAR CAMPOS" class="btn limpar">
			</fieldset>
			
			</form>
		
		</section>
	
	</div>




</body>

</html>