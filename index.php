<html lang = "pt-br">
<head>
	<meta charset="utf-8">
	<title>Login BEM</title>
	<link rel="stylesheet" href="CSS/estilo.css">
</head>
	
	<body>
	<div id="corpo-form">
		 <h1>Entrar</h1>
		 <img src="css/logobem.png" id="logobem">
		 <img src="css/familiabem.png" id="familia">
		 <form method="POST" action="telainicial.php">
			<input type="text" placeholder="Usuário" maxlength="100" name="nome_login">
			<input type="password" placeholder="Senha" maxlength="32" name="senha">
			<input type="submit" value="ACESSAR">
			<a href="enviosenha.php">Esqueceu a senha?<strong>Clique aqui</strong>
		 </form>
	</div>

