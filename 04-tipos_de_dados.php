<?php
// Escalares

//String
$nome = "Olá Mundo";
var_dump($nome);
echo "<br>";

if (is_string($nome)){
    echo "É uma string";
} else {
    echo "Não é uma string";
}

echo "<hr>";

//Int
$idade = 23;
var_dump($idade);
echo "<br>";

if (is_int($idade)){
    echo "É um inteiro";
} else{
    echo "Não é um inteiro";
}

echo "<hr>";

//Float
$altura = 1.77;
var_dump($altura);

if (is_float($altura)){
    echo "É um float";
} else{
    echo "Não é um float";
}

echo "<hr>";

//Boolean
$admin = false;
var_dump($admin);
if (is_bool($admin)){
    echo "é um booleano";
} else{
    echo "Não é um booleano";
}


echo "<hr>";

// Compostos

//Array
$carros = array("Gol","Uno","Camaro", 12, 20.4, true);
var_dump($carros);

echo "<hr>";

//Object

class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Pedro");
var_dump($cliente);

if (is_object($cliente)){
    echo "É um objeto";
} else{
    echo "Não é um objeto";
}

echo "<hr>";

//Especiais

//Null
$cliente = Null;
var_dump($cliente);


