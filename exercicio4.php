<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Exercicio4" method="get">
        Nota 1:
        <input type="text" name="numero1">
        <br><br/>
        Nota 2:
        <input type="text" name="numero2">
        <br><br/>
        Nota 3:
        <input type="text" name="numero3"> 
        <br><br/> 
        <input type="submit"/>    
    </form>

    <?php
      $numero1 = $_GET["numero1"];
      $numero2 = $_GET["numero2"];
      $numero3 = $_GET["numero3"];
 
      $media = ($numero1 + $numero2 + $numero3)/3;
      echo"Média:  " .$media; 
    ?>
    
</body>
</html>