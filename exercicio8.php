<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>8.Faça um script que peça a temperatura em graus Farenheit,
    transforme e mostre a temperatura em graus Celsius. •C = (5 * (F-32) / 9).</h1>
    <form action="exercicio8.php" method="get">
        Temperatura :
        <input type="text" name="temperatura">
        <br><br/>
        <input type="submit" value="calcular"/>
                       
    </form>
    <?php
     
     $temperatura = $_GET["temperatura"];

     $c = (5 * ($temperatura-32)/9  );

     echo" A temperatura em graus Celcius é  :" .$c. "°"

    
    ?>
    
    
    
</body>
</html>