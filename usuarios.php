<?php

Class Usuario 
{
	private $pdo;
	public $msgErro = "";

	public function conectar ($nome, $host, $usuario, $senha) 
	{
		global $pdo;
		try {
				$pdo = new PDO ("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

			}
		catch (PDOException $e)
		{
			$msgErro = $e->getMessage();


		}


	}

	public function enviosenha ($nome_envio, $email_envio) 
	{
		global $pdo;
		$sql = $pdo->prepare("INSERT INTO envio_senha (nome_envio, email_envio) VALUES (:ne, :ee)");
		$sql->bindValue(":ne",$nome_envio);
		$sql->bindValue(":ee",$email_envio);
		$sql->execute();
		return true;
	}

	public function logar ($nome_login, $senha) 
	{
		global $pdo;	
		//verificar se o email e senha estão cadastrados, se sim
			$sql = $pdo->prepare("SELECT id_login FROM login WHERE nome_login = :e AND senha = :s");
			$sql->bindValue(":e",$nome_login);
			$sql->bindValue(":s",md5($senha));
			$sql->execute();
			if($sql->rowCount() > 0)
			{
				//entrar no sistema
				$dado = $sql->fetch(); //transforma em um array
				session_start(); //inicia a sessão
				$_SESSION['id_login'] = $dado['id_login'];
				return true; //logado com sucesso
			}

			else
			{
				return false; //erro de login
			}

	}


}










?>