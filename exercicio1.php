<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>1.Escreva um programa que pede o raio de um círculo, e em seguida exiba o 
perímetro e área do círculo. Para saber o valor do pi, use: M_PI (ele armazena 
o valor de pi)</h1>
    <form action="exercicio1.php" method="get">
        Raio do círculo: <br/>
        <input type="text" name="numero">
        <br><br/>
        <input type="submit"/>        
    </form>
    <?php
    
  $raio = $_GET['numero'];              
    
  echo "Raio:  $raio <br />";
  
  echo "Perímetro: " , 2*M_PI*$raio, "<br />";
  
  echo "Área:", M_PI*$raio*$raio,"<br/>";
?>
</body>
</html>