<?php
/*
 *
 * Condicionais
 * if
 * else
 * elseif
 */

$numero = 10;

if ($numero == 10){
    echo "é igual a 10";
} elseif($numero <= 9){
    echo "é maior ou igual a 9";
} else {
    echo "é diferente de 10";
}

/*
 *
 * Switch
 *  case
 *
 */

$cor ="Azul";

switch ($cor){
    case "Vermelho":
        echo "Vermelho";
    break;
    case "Azul":
        echo "Azul";
        break;
}