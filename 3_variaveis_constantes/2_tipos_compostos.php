<!doctype html>
<html>
<head>
<title>Tpos de Dados</title>
<meta charset="utf-8">
</head>
<body>
<?php
//arrays
$cores[0] = 'azul';
$cores[1] = 'verde';
$cores[2] = 'vermelho';
$cores[3] = 'rosa';
$cores[4] = 'amarelo';

echo $cores;
echo "<pre>";
print_r($cores);
echo "</pre>";

echo count($cores);//5
echo "<pre>";
var_dump($cores);
echo "</pre>";
################################################
echo "<hr>";
//Object

class Teste
{
	public $nome;
	public $idade;
	public $fone;
}

$aluno1 = new Teste;
$aluno1->nome="Edu";
$aluno1->idade=40;
$aluno1->fone='9999-9999';
echo "<pre>";
var_dump($aluno1);
echo "</pre>";

$aluno2=new Teste;

echo "<pre>";
var_dump($aluno2);
echo "</pre>";
?>

</body>
</html>
