<?php
/*
    $GLOBALS -> Permiti acessar variáveis globais
    $_SERVER -> Informações sobre cabeçalhos e caminhos, array com diversas informações
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

// Globals

$x = 10;

function soma(){
   echo $GLOBALS['x'];
   echo "<hr>";
}

soma();



// Server

print_r($_SERVER);

