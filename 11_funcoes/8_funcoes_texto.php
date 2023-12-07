<?php 
define("HR","<hr>");
#####################################
$palavra="EdUaRdO";
$frase="esta é uma frase em php, esta é uma frase em php, esta é uma frase em php";
$nome ="Eduardo Pretel Filho";
$branco="            Edu              ";

print $palavra;
print HR;

print strtoupper($palavra);// para maiusculas
print HR;

print strtolower($palavra);//para minusculas
print HR;

print strrev($palavra);//para reverso
print HR;

print strlen($palavra);//para tamanho
print HR;

print ucfirst($frase);//para primeira letra da frase para maiúscula
print HR;

print ucwords($frase);//para primeira letra de cada palavra para maiúscula
print HR;

print ucfirst(strtolower(strrev($palavra)));//para reverso
print HR;

print substr($nome,0,7);
print HR;
print substr($nome,8,6);
print HR;
print substr($nome,15);
print HR;

print HR;
print $branco;
print HR;
print ltrim($branco);
print HR;
print rtrim($branco);
print HR;
print trim($branco);
print HR;


?>