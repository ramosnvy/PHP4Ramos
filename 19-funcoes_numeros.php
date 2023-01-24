<?php
// Funções de números
/*
 * number_format -> Formatos um número de acordo com as casas que queremos
 * round -> Arredonda o número.
 * ceil -> Arredonda pra cima.
 * floor -> Arredonda pra baixo.
 * rand -> Sorteia um número aleatório
 * */

$db = 11031.02;

$preco = number_format($db,2,',','.');

echo $preco;
echo "<hr>";

echo round(6.3) . "<br>";
echo round(6.7) . "<br>";

echo "<hr>";

echo ceil(5.1);
echo "<hr>";

echo floor(8.99);
echo "<hr>";

echo rand(1,20);



