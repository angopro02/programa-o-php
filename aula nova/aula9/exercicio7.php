<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!--6.	Ler um valor inteiro (aceitar somente valores entre 1 e 10) e escrever a tabuada de 1 a 10 do valor lido.-->
<body>
     <form action="exercicio7.php"   method="get">
         Digite um número para tabuada: <br/>
        <input type="number"   name="num" />
        <br/>
        <input type="submit"   name="enviar">       
     </form>
    <?php
    if(isset($_GET["num"])){    
        $num = $_GET["num"];
         if(($num <1)) || ( $num >10)){
           echo"aceitar somente numeros  entre 1 e 10";
        }else{
            for ($i=0; $i <=10; $i++){
             echo $num." x " .$i. " = " .($num * $i)."<br/>"; 
                
            }
        }
   
    }          
    
    ?>
</body>
</html>