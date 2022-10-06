<?php

$peixe = $_GET["peixe"];
if($peixe <= 50){
    echo "Sem TAXA...";
}else{
    $extra = ($peixe - 50)* 4
    echo"o valor da multa é:" .$extra;
}


?>