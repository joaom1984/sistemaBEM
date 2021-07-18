<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>
<html lang = "pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Login</title>
	<link rel="stylesheet" href="CSS/estilo.css">
</head> 
	
	<body>
	<div id="corpo-form">
		 <h1>Digite os dados abaixo</h1>
		 <form method="POST">
			<input type="text" placeholder="Nome" maxlength="50" name="nome_envio">
			<input type="email" placeholder="E-mail" maxlength="50" name="email_envio">
			<input type="submit" value="ENVIAR">
			<a>Aguarde um e-mail com orientações.<strong>Obrigado!</strong>
		 </form>
	</div>
<?php
//verificar se clicou no botão
if (isset($_POST['nome_envio']))
{

	$nome_envio = addslashes($_POST['nome_envio']);
	$email_envio = addslashes($_POST['email_envio']);
	//verificar se está preenchido
	if (!empty($nome_envio) && !empty($email_envio))
	{
		$u->conectar("bem_itapetininga", "localhost", "root", "");
		if($u->msgErro =="")
		{
			$u->enviosenha($nome_envio,$email_envio);
		}
		else
		{
			echo"Erro:".$u->msgErro;
		}
	}
	else
	{
		?>
		<div id="msg-preencher">
			Preencha todos os campos!
		</div>
		<?php
	}
}

?>

	</body>
</html>