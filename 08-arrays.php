<?php

//Array
$carros = array('BMW','Veloster','Hilux');
$carros[] = "Amarok";

print_r($carros);
echo $carros[0];


echo "<hr>";

echo count($carros);

echo "<hr>";

foreach ($carros as $valor){
    echo $valor . "<br>";
}

echo "<hr>";

//Array Associativo

$pessoa = array(
    "nome"=> "Rodrigo",
    "idade"=> 23,
    "altura"=>1,83
);

echo $pessoa["altura"];

$pessoa["cidade"] = "Itabuna";

foreach ($pessoa as $indice =>$valor){
    echo $indice . $valor . "<br>";

}

echo "<hr>";

//Arrays Multidimensionais

$times = array(
    "cariocas"=>array("campeao"=>"vasco","vice"=>"flamengo","terceiro"=>"botafogo"),
    "paulista"=>array("campeao"=>"santos", "vice"=>"sao paulo","terceiro"=>"palmeiras")
);

foreach ($times["cariocas"] as $indice => $valor){
    echo $indice . ":" . $valor . "<br>";
}
foreach ($times["paulista"] as $indice => $valor){
    echo $indice . ":" . $valor . "<br>";
}




