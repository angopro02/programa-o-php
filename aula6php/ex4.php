<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--Escreva um programa para ler 2 valores (considere que não serão informadosvalores iguais) 
e escrever o maior deles-->
<body>
    <form action="ex4.php"  method="get"><br/>
        Digite um número:<br/>
        <input type="text" name="n1">
        <br>
        Digite outro núnero:<br/>
        <input type="text" name="n2">
        <br><br/>
        <input type="submit" value="calcule">             
    </form>
    <?php 
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    if($n1 > $n2) {
        echo"O número 1 : " .$n1. " é maior que" .$n2;      
    }else{
        Echo"O número 2 : " .$n2. "é maior que " .$n1;
    }    
    ?>
</body>
</html>