<?php
class Numeros
{
	var $num;
	var $par;
	var $impar;
	// depreciado
	function Numeros()
	{
		echo "Eu sou o Metodo construtor<br>";
	}
	function Teste()
	{
		echo "Eu sou o Metodo Teste<br>";
	}
}

//new => construtor de objetos
$numero1 = new Numeros;

//operador de objetos ->
$numero1->par = 24;
echo $numero1->par;

echo "<pre>";
var_dump($numero1);
echo "</pre>";
// acessar método da classe
$numero1->Teste();

############################################
echo "<hr>";
$numero2 = new Numeros;

echo "<pre>";
var_dump($numero2);
echo "</pre>";
$numero1->Numeros();