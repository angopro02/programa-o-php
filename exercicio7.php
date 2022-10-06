<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>7.Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. 
        Calcule e mostre o total do seu salário no referido mês.</h1>
        <form action="exercicio7.php" method="get">
            Quanto você ganha por hora:
            <input type="text" name="valor"/>
            <br></br>
            Horas trabalhadas no mês:
            <input type="text" name="horas">
            <br></br>
            <input type="submit" value="calcular"/>

        </form>
        <?php
          $valor = $_GET["valor"];
          $horas = $_GET["horas"];

          $salario = $valor * $horas;
          echo"O salário a receber é: R$  ".$salario.",00";
        ?>
    
</body>
</html>