<?php

include_once("conexao.php");
?>
<?php

$CPF = $_POST['cpf_usuario'];
$nome = $_POST['nome_usuario'];
$telefone = $_POST['telefone'];
$vinculo = $_POST['vinculo'];
$CEP = $_POST['cep'];
$tipoend = $_POST['tipo_end'];
$end = $_POST['nome_end'];
$num = $_POST['num_end'];
$bairro = $_POST['bairro_end'];
$complemento = $_POST['complemento_end'];
$pontoref = $_POST['ponto_end']; 


mysqli_select_db($conexao, '$database');

$sql = "INSERT INTO usuario (nome_usuario,cpf_usuario,telefone,vinculo,cep,tipo_end,nome_end,num_end,bairro_end,complemento_end,ponto_end) VALUES ('$nome','$CPF','$telefone','$vinculo','$CEP','$tipoend','$end','$num','$bairro','$complemento','$pontoref')";

if(mysqli_query($conexao,$sql)) {

	echo "<script>alert('Cadastro efetuado com sucesso!'); window.location = 'formularioatendimento.php'; </script>";
}

else {
	echo "<script>alert('O cadastro NÃO foi efetuado, verificar se já existe cadastro para esse usuário'); window.location = 'formularioatendimento.php'; </script>";


}

mysqli_close($conexao);

?>