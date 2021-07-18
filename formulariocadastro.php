

<html lang = "pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro Novo Usuário</title>
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
		<h1>Cadastro Novo Usuário</h1><hr><br>	
		
		
		<form method="post" action="processa.php">
			<fieldset>
			<legend>Preencha os campos abaixo</legend>			
			CPF
			<input class="campos" type="text" name="cpf_usuario" required autofocus>
			<br><br>
			Nome Completo
			<input class="camponome" type="text" maxlength="50" size="50" name="nome_usuario" required>
			<br><br>
			Vínculo
			<select class="campo_vinculo" name="vinculo">
				<option>Escolha a opção</option>
				<option>RESPONSÁVEL FAMILIAR</option>
				<option>COMPANHEIRO(A)</option>
				<option>FILHO(A)</option>
				<option>PAI/MÃE</option>
				<option>AVÓ/AVÔ</option>
				<option>OUTROS</option>
			</select>	
			Telefone
			<input class="campos" type="text" name="telefone">
			<br><br>
			<legend>Endereço do Usuário</legend>			
			CEP
			<input class="campos" type="text" name="cep">
			Tipo Endereço
			<select class="campo_vinculo" name="tipo_end">
				<option>Escolha a opção</option>
				<option>AVENIDA</option>
				<option>RUA</option>
				<option>ESTRADA</option>
				<option>ESTRADA MUNICIAPAL</option>
				<option>SÍTIO</option>
				<option>CHACARÁ</option>
				<option>FAZENDA</option>
			</select>
			<br><br>
			Endereço
			<input class="campoend" type="text" name="nome_end">
			Número
			<input class="numend" type="text" name="num_end">
			<br><br>
			Bairro
			<input class="campos" type="text" name="bairro_end">
			Complemento
			<input class="campos" type="text" name="complemento_end">
			<br><br>
			Ponto de referência
			<input class="pontoref" type="text" name="ponto_end">
			<br><br>
			<br><br>
			<input type="submit" value="CADASTRAR" class="btn cadastrar">	
			<input type="reset" value="LIMPAR CAMPOS" class="btn limpar">
			<input type="button" value="EXCLUIR" class="btn excluir">
			</fieldset>
			
			</form>
		</section>
	
	</div>




</body>

</html>