<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. 
    Calcule e mostre o total do seu salário no referido mês,
    sabendo-se que são descontados 11% para o Imposto de Renda,
    8% para o INSS e 5% para o sindicato, faça um script que nos dê:
   a- salário bruto.
   b- quanto pagou ao INSS.
   c- quanto pagou ao sindicato.
   d- o salário líquido.
   e- calcule os descontos e o salário líquido, conforme a tabela abaixo:
   + Salário Bruto : R$
   - IR (11%) : R$
   - INSS (8%) : R$
   - Sindicato ( 5%) : R$
   = Salário Liquido : R$
   Obs.: Salário Bruto - Descontos = Salário Líquido.</h1>
   <form action="exercicio14.php"   method="get">
       Digite o valor da hora trabalhada: <br/>
       <input type="text"  name="number1"> <br><br/>
       Digite o número de horas trabalhadas: <br/>
       <input type="text"  name="number2"> <br><br/>
       <input type="submit" value="calcular"/> 
       <br><br/>
   </form>
    <?php 

        $number1 = $_GET["number1"];
        $number2 = $_GET["number2"];

        $salario = ($number1 * $number2);
        echo "O salario bruto é igual a: "   .$salario. "R$";

        $descontoir = $salario * 0.11;
        echo "<br><br/>O desconto para o IR é: "  .$descontoir. "R$";

        $descontoinss = $salario * 0.08;
        echo"<br><br/>O desconto para o INSS é: "  .$descontoinss. "R$";

        $descontosind = $salario * 0.05;
        echo"<br><br/>O desconto para o Sindicato é: "  .$descontosind.  "R$";

        $salarioliquido = $salario - ($descontoir + $descontoinss + $descontosind);
        echo"<br><br/>O salario líquido é:  "  .$salarioliquido.  "R$";
        


        

        
   
    
    ?>
</body>
</html>




