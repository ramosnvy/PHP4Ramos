<?php

for($contador = 0; $contador <= 10 ; $contador++){
    echo $contador;

}

//Foreach

$cores = array("primeira"=>'vermelho', "segunda"=> 'azul');

foreach ($cores as $valor){
    echo $valor;
}

echo "<hr>";

foreach ($cores as $index=>$valor){
    echo "$index : $valor";
}