<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>3.	Ler um valor N e imprimir todos os valores inteiros entre 1 (inclusive) e N (inclusive). Considere que o N será sempre maior que ZERO</h1>
<body>
    <form action="exercicio4.php"  method="get">
        Digite um número:<br/>
        <input type="number"  type="num">
        <br/>
        <input type="submit"  value="enviar" >    
    </form>
     <?php

      if (isset ($_GET["num"])) {
          $num = $_GET ["num"];
          if ($num >0) {

              
              for ($i=1; $i <= $num ; $i++) { 
                  echo $i. " , ";
              }else{
                  echo"considere entrar com um numero positivo"
              }      
                  
             }
                  
          }
      }
     
     
     
     ?>
</body>
</html>