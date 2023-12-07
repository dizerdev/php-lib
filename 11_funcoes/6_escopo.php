<?php
$nome= "Edu";//escopo global

$idade = 25;
echo $idade;

function escopo()
{
	global $idade;
	global $cep;
	$cep = "04404-050";
	$idade = 52;
	
	$nome = "Renata ";
	echo $nome," - ",$idade, "<br>";
	echo $GLOBALS['nome'], "<br>";
	
}
escopo();
echo $cep;

echo "<pre>";
var_dump($GLOBALS);
echo "</pre>";
/*
echo "<br>";
echo $nome;
echo "<br>";
echo $GLOBALS['nome'];
echo "<br>";
*/
?>