<?php 
define("HR","<hr>");

###############ARREDONDAMENTO##################
$num = 1236698754.987159;

print ceil($num);//teto - para cima
print HR;

print floor($num);//ch�o - para baixo
print HR;

print round($num);// pr�ximo
print HR;

####################sorteio##############

print rand(10,50);
print HR;
// buscar caracter na tabela ASCII
print chr(65);
print HR;
print chr(90);
print HR;
print chr(rand(65,90));
print HR;

############################################
#######potencia e raiz quadrada#########
print pow(2,3);
print HR;
print sqrt(49);
print HR;
print pow(8,1/3);
#############################################

print HR;
print min(9,5,8);
print HR;
print max(9,5,8);
print HR;
#############################################
print intdiv(3, 2);

//print pi();
#############################################
//number_format
print number_format($num);
print HR;
print number_format($num,2);
print HR;
print number_format($num,2,",",".");
print HR;

?>