<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>10.Faça um script que peça 2 números inteiros e um número real. Calcule e 
   mostre: •o produto do dobro do primeiro com metade do segundo . •a soma do 
   triplo do primeiro com o terceiro. •o terceiro elevado ao cubo.</h1>
    <form action="exercicio10.php" method="get">
       Número 1:
       <input type="text"  name="numero1">
       <br><br/>
       Número 2:
       <input type="text"  name="numero2">
       <br><br/>
       Número 3:
       <input type="text"   name="numero3">
       <br><br/>
       <input type="submit"  value="calcular"/>

    </form>

    <?php
    $n1 = $_GET["numero1"];
    $n2 = $_GET["numero2"];
    $n3 = $_GET["numero3"];

    $primeiro  =  $n1 * 2 +  $n2 / 2;
    $segundo  =  3 * $n1 + $n3;    
    $terceiro  =  $n3 **3;

        
    echo "<br/>O resultado 1 é : "  .$primeiro;
    echo "<br/>O resultado 2 é : "  .$segundo;
    echo "<br/>O resultado 3 é : "  .$terceiro;
    
    ?>

</body>
</html>