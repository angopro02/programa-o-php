<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>6.Faça um script que calcule a área de um quadrado, 
        em seguida mostre o dobro desta área para o usuário.</h1>
    <form action="exercicio6.php" method="get">
        Digite o valor do lodo
        <input type="text" name="lado"/>
        <br></br>
        <input type="submit" value="enviar"/>

    </form>
     <?php
       $lado = $_GET["lado"];
       $area = $lado**2;
        
     echo" A área do quadrado é: " .$area;    
     ?>
</body>
</html>