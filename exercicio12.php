<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>12.Tendo como dado de entrada a altura (h) de uma pessoa, construa um 
 script que calcule seu peso ideal, utilizando as seguintes fórmulas: •Para 
 homens: (72.7*h) - 58 •Para mulheres: (62.1*h) – 44.7</h1>

    <form action="exercicio12.php"   method="get">
        Digite sua altura:
        <input type="text"    name="altura">
        <br></br>
        <input type="submit"   value= "calcular"/>
        <br></br>
        
    </form>

    <?php
     $altura = $_GET["altura"];
     
     $peso1 =  ((72.7 * $altura) - 58);

     $peso2 =  ((62.1 * $altura) - 44.7);
     

     echo" O Peso ideal para Mulheres é:" .$peso1. "kg";
     
     echo" <br></br> O Peso ideal para Homens é: " .$peso2.  "kg";
     
     ?>
    
</body>
</html>