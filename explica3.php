<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="explica3.php"  method="get">
        Digite o primeiro número: <br/>
        <input type="number" name="n1">
        <br><br/>
        Digite o segundo número: <br/>
        <input type="number" name="n2">
        <br><br/>
        Escreva a opção desejada: <br/>
        + somar, - subtrair, * multiplicar, / dividir.<br/>
        <input type="text" name="operacao">
        <br><br/>
        <input type="submit" value="verificar">
    </form>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $operacao = $_GET["operacao"];
        if($operacao == "+") {
         $aux = $n1 + $n2;
          echo" A soma de ".$n1." com" .$n2." é " .$aux;         
        } else if ( $operacao == "-") {
         $aux = $n1 - $n2;
          echo" A Diferença de ".$n1." com " .$n2." é " .$aux;   
        } else if ($operacao == "*") {
        $aux = $n1 * $n2;
          echo" A multiplicação de ".$n1." com" .$n2." é " .$aux;
        } else if ( $operacao == "/") {
          $aux = $n1 / $n2;
          echo" A divisão ".$n1." com" .$n2." é " .$aux;
        }else{
         echo"operação Inválida!";
        }        
     
    
    
    ?>
</body>
</html>