<?php
class Numeros
{
	//public - objetos conseguem ter acesso à propriedade
	public $num;

	//objetos nao terão acesso à propriedade
	//somente elementos da propria classe é que terão
	//não publicas
	//a diferença se fará em herança
	protected $par;
	private $impar;

	
	function setPar($valor)
	{
		echo "Eu sou o Metodo construtor<br>";
	}
	function getPar()
	{
		echo "Eu sou o Metodo destrutor<br>";
	}
}


$numero1 = new Numeros;


$numero1->num = 24;
echo $numero1->num;

/*
//$numero1->par = 68;
echo $numero1->par ;
*/
echo "<pre>";
var_dump($numero1);
echo "</pre>";

############################################
echo "<hr>";