<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>5.Faça um script que converta metros para centímetros.</h1>
    <form action="exercicio5.php" method="get">
        Valor do Metro:
        <input type= "number" name="metro"><br><br/>
        <input type= "submit" name="valor"><br><br/>
    </form>
    <?php
        $metro= $_GET["metro"];
        $centimetros= $metro *100;

        echo"O valor em centímetros é:  " .$centimetros. "cm";

    ?>
</body>
</html>