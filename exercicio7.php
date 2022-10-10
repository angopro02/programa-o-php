<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>7. Faça um Programa que pergunte em que turno você estuda.
    Peça para digitar M-matutino ou V-Vespertino ou N-Noturno. 
    imprima a mensagem "Bom Dia!", "Boa Tarde!" ou "Boa Noite!" ou "Valor Inválido!", conforme o caso.</h1>
    
    <form action="exercicio7.php"  method="get">
        Qual o turno que você estuda:
        <input type="text" name="letra"><br/> 
        M - Matutino <br/>
        V - Vespertino <br/>        
        N - Noturno <br/>
        <br><br/>
        <input type="submit"  value="verificar"/>           
    </form>
    <?php
     
     $letra = $_GET["letra"];

     if ($letra == "M") {
        echo "Bom dia!";
        
     }else if ($letra =="V") {
        echo " Boa tarde!";

     }else if ($letra =="N") {
        echo"Boa noite"; 

    } else{ 
        echo"Letra inválida";
    }

        

     


 

     
    ?>

</body>
</html>