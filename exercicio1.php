<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio1.php" method="get">
        Numero 1: <br/>
        <input type="text" name="numero">
        <br><br/>
        <input type="submit"/>        
    </form>
    <?php
    // Pegando o valor digitado
  // pelo usuário
  $raio = $_GET['num'];              
  
  // Imprime o raio
  echo "Raio:  $raio<br />";

  // Exibe perímetro
  echo "Perímetro: ", 2*M_PI*$raio, "<br />";
  
  // Exibe Área
  echo "Área:", M_PI*$raio*$raio,"<br/>";
?>
</body>
</html>