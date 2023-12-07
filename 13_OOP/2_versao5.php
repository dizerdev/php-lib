<?php
class Numeros
{	
	// tipos public, private, protected
	public $num;
	public $par;
	public $impar;
	// Os seguintes nomes de métodos são considerados mágicos: __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone() e __debugInfo()
	function __construct()
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
$numero1->Teste();
############################################
echo "<hr>";
$numero2 = new Numeros;

echo "<pre>";
var_dump($numero2);
echo "</pre>";