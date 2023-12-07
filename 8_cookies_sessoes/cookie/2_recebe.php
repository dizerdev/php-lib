<?php 
/* 
=>setcookie(nome,valor,duração)
	nome e valor são necessários - nome será o índice do array $_COOKIE e valor será o comteúdo.
	ex:setcookie('idade',25) => $_COOKIE['idade']=25
=>duração - se for omitido, a cookie expirará quando o browser for fechado.
	duração da cookie é em segundos:
												1 minuto			60 segundos
						1 hora				60minutos		3600 segundos
	1dia				24 horas			1440 minutos	86400 segundos
	time()+86400;
=>tamanho - não pode exceder 64 kb;
=>mesma exigência da função header();
=>Recuperar valor de cookie   -   $_COOKIE['valor']
=>Apagar um cookie - configurar o cookie SEM PASSAR PARAMETROS - setcookie('nome')
=>O cookie não é recuperado na página onde foi setado.
 */
setcookie('nome',$_POST['nome'],time()+86400);
setcookie('escola',$_POST['escola'],time()+86400);
setcookie('idade',50,time()+86400);
?>
<!doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<p>
<?php 

print "Esta é a Post:  <br>";
print "<pre>";
print_r($_POST);
print "</pre>";
###########################################################3
print "<hr>";
#####################################33
print "Esta é a Cookie: <br>";
print "<pre>";
print_r($_COOKIE);
print "</pre>";
print "<hr>";
?>
</p>
<p>&nbsp;</p>
<p><a href="3_ver.php">ir para a página 3</a></p>
</body>
</html>
