<?php
/* funçoes para strings
strtoupper -> Passa a string para letras MAIÚSCULAS
strtolower -> Passa a string para letras MINÚSCULAS
substr -> Pode ser utilizado para delimitar partes de uma string e retornar o valor restante
str_pad -> Complementa um string
str_repeat  -> Repete a string
strlen --> Retorna a quantidade de caracteres
str_replace -> Substitui caracteres em um texto
strpos -> Retorna a posição de uma palavra
*/

$nome = "pedro ramos";

//Strtoupper
$novoNome = strtoupper($nome);

echo $novoNome . "<hr>";

//Strtolower
$novoNome = strtolower($nome);

echo $novoNome . "<hr>";

//Substr

$string = "Olá Mundo";
echo substr($string, 4, 4);

echo "<hr>";


//Str_pad

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "**", STR_PAD_LEFT);

echo $novoObjeto;
echo "<hr>";

//Str_repeat
$palavra = str_repeat("Sucesso!", 5);
echo $palavra;
echo "<hr>";

//Strlen

$mensagem = "Olá Mundo";
echo strlen($mensagem);
echo "<hr>";

//Str_replace

$texto = "Brasil dois três";

$novoTexto = str_replace(" ","" ,$texto);

echo $novoTexto;
echo "<hr>";

//Strpos

echo strpos($texto, "dois");
