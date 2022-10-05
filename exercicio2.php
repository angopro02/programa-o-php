<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
</head>
<body>
      <form action="exercicio2.php" method="get">
        Numero : <br><br/>
      <input type="text" name= "number"/>
      </form>
 <?php
 $n1=$_GET["number"];

 echo"<br/>O numero digitado é:".$n1;
 
 ?>    

</body>
</html>