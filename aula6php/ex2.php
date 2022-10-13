<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--Faça um programa que o usiário informe o saláriorecebido e o total gasto.
deverá exibido na tela "gastos dentro do orçamento" caso o valor gasto não ultrapasse o valor gasto e
"Orçamento" se o valor gasto estourou o valor do orçamento-->
<body>
    <form action="ex2.php">
       Digite o salário:
       <input type="text"  name="sal" >
       <br></br>
       Digite o total gasto:
       <input type="sumit"  value="calcule">     
    </form>
    <?php 
    $sal = $_GET["sal"];
    $totg = $_GET["totg"];
    if ($totg>$sal) {
        echo"Orçamento Estourado";
    }else{
        echo"Gasto dentro do orçamento";
    }    
    
    
    
    ?>
</body>
</html>