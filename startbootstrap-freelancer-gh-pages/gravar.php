<?php
//1 resgate de dados da tela
$nome = $_GET["nome"];
$email = $_GET["email"];
$telefone = $_GET["telefone"];
$mensagem = $_GET["mensagem"];
//2 conectar basa de dados
//        (servidor,usuário,senha,banco);
$con = mysqli_connect("localhost","root","","projeto1");
// 3 montar a instrução para gravar

$sql="insert into contato values(null,'".$nome."','".$email."','".$telefone."','".$mensagem."')";

// 4 gravar no banco
if(mysqli_query($con,$sql)){
    $msg ="gravado com sucesso";
}else{
    $msg ="erro ao gravar";
}
// 5 fechar conexão com o banco
mysqli_close($con);
echo"<script> alert('".$msg."');
         location.href='index.html';
</script>";
?>