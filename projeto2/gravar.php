<?php 



date_default_timezone_set("America/Sao_Paulo");
//resgate de dados da tela
$nome = $_POST["nome"];
$email = $_POST["email"]; 
$telefone = $_POST["telefone"];
$dtcadastro =date("y-m-d");  //padrão do banco

//abrir conexão com o banco de dados.

include_once'./conexao.php';

//montar sql de gravação
$sql ="insert into cliente values(null,'".$nome."','".$email."','".$telefone."','".$dtcadastro."')"; 

//gravar
if(mysqli_query($con,$sql)){
    $msg = "gravado com sucesso";    
}else{
    $msg = "Erro ao gravar";
}
//fechar conexão
mysqli_close($con);
echo"<script> alert('".$msg."'); location.href='index.php'; </script>";

?>