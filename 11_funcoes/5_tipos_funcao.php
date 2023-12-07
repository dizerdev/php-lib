<?php 
###################################################
#########passar ARGUMENTOS por referência##############
//Um argumento passado por referência faz com que a variável que está no argumento
//seja modificada fora da função
$nome="Edu";
function formata(&$a)
{
	$a = "<span style=\"color:red;font-size:35px\">$a</span>";
	echo $a;
}
formata($nome);
echo "<br>";
echo $nome;
echo "<hr>";



##############################################
### VALOR PADRÃO ##################
//Não colocar padrão à esquerda, sempre à direita
//Posso ter quantos eu quiser
function aula(string $aluno,string $prof="Edu")
{
	echo "$aluno - $prof <br>";
}

aula('Fabiano');
aula('Henrique');
aula('Marcia');
aula('Alexandre','Sandra');
echo "<hr>";


#############################################################
/* Variáveis funçoes - sempre que o PHP encontra uma variável seguida de parenteses, procura uma funçao cujo nome é dado pelo valor da variável e executa essa funçao.
 */
function ola(){
	echo "esta funçao é a funçao:". __FUNCTION__;
}

$a = "ola";

$a();
echo "<br>";

#######################################################################################
echo "<hr>";
$quad = function(float $num):float
{
	return $num * $num;
};
echo $quad(2);

/////////////////////////////////////////////////////////////////////////////////////////
?>