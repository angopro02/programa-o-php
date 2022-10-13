<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--Fça um programa para ler um numero inteiro e informar se este é maior que 10-->
<body>
    <form action="ex1.php"  method= get>
        Digite um número:
        <input type="number" name="numero">
        <br></br>
        <input type="submit"  value="enviar"/>
    </form>
    <?php 
       $numero = $_GET["numero"];

       if ($numero>10) {
        echo"O número é maior que 10";
       }
    
    ?>
</body>
</html>