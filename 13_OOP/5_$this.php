<?php
class Numeros
{

	public $num;

	protected $par;
	private $impar;

	function setPar($valor)
	{
		//$this -> aponta para o objeto
		if($valor % 2 == 0)
			$this->par = $valor;
	}
	function getPar()
	{
		return $this->par;
	}
}


$numero1 = new Numeros;


$numero1->num = 24;
echo $numero1->num;
echo "<hr>";
$numero1->setPar(68);
echo $numero1->getPar();
/*
//$numero1->par = 68;
echo $numero1->par ;
*/
echo "<pre>";
var_dump($numero1);
echo "</pre>";

############################################
echo "<hr>";
$numero2 = new Numeros;
$numero2->setPar(158);
echo $numero2->getPar();

echo "<pre>";
var_dump($numero2);
echo "</pre>";