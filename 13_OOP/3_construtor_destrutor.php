<?php
class Numeros
{
	public $num;
	public $par;
	public $impar;

	function __construct()
	{
		echo "Eu sou o Metodo construtor<br>";
	}
	// destrutor é executado quando a memoria é liberada da memoria.
	function __destruct()
	{
		echo "Eu sou o Metodo destrutor<br>";
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

############################################
echo "<hr>";
$numero2 = new Numeros;

echo "<pre>";
var_dump($numero2);
echo "</pre>";

unset($numero1);
echo "<hr><hr>";