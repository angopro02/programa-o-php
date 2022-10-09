<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>9.Faça um script que peça a temperatura em graus Celsius, transforme e 
mostre em graus Farenheit.</h1>
<form action="exercicio9.php" method="get">
    Digite a temperatura em graus Celsius:
    <br><br/>
    <input type="text" name="temperatura">
    <br></br>
    <input type="submit" value="calcular"/>
    <br><br/>

</form>
     <?php

     $temperatura = $_GET["temperatura"];

     $C = ( ($temperatura * 9/5)+32);

      echo"A temperatura é: " .$C. "°F"
      
       ?>
</body>
</html>