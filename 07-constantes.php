<?php

// Constantes
define("NOME", "José Carlos");

define("IDADE", 24);

define("ALTURA", 1.89);

define("CASADO", true);

define("TIMES", ['Vasco','Flamengo','Santos']);

echo 'Meu nome é '. NOME . ', minha idade é ' . IDADE . ' e minha altura é ' . ALTURA . '.';

function exibeNome(){
    echo NOME;
}

exibeNome();