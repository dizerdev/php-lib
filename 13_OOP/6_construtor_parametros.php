<?php
class Numeros
{
	public $num;
	public $par;
	protected $impar;

	function __construct($valor)
	{	
		if($valor % 2 == 0){
		echo "O numero $valor é par";
		$this->par = $valor;
	}else{
		echo "O numero $valor é impar";
		$this->impar = $valor;
	}
	}
	
}

//new => construtor de objetos
$numero1 = new Numeros(26);



echo "<pre>";
var_dump($numero1);
echo "</pre>";

############################################
echo "<hr>";
