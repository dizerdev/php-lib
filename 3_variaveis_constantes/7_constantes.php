<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 
/*
LOCAIS NA MEM�RIA EM QUE PODEMOS ARMAZENAR INFORMA��ES
S�O IGUAIS A VARI�VEIS, MAS N�O PODEM TER O SEU CONTEUDO
ALTERADO DURANTE A EXECU��O DO C�DIGO
POR PADR�O USAR LETRAS MAIUSCULAS
N�O S�O PRECEDIDAS POR $
*/

define('CURSO','php');
define('B',"<br>");
define('R',"<hr>");//FALSE � o valor padrao - pode ser omitido
echo CURSO;
echo B;
echo curso;
echo R;

define('USUARIO','Marcia', true);
echo Usuario;
#########################################
echo R;
//php 7
define('ALUNOS',['edu','ana','Eva','Ivo']);
echo ALUNOS[2];


###########################
ECHO R;
define('CURSO','MySql');
?>
</body>
</html>