<?php 
setcookie('nome', '', time()-86400);//manual
setcookie('escola');
setcookie('idade', null);
?>
<!doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<?php
//embora tenha sido feito o logout ainda traz a informação - logout somente estára disponivel a partir da próxima página

#####################################33
print "Esta é a Cookie: <br>";
print "<pre>";
print_r($_COOKIE);
print "</pre>";
print "<hr>";
?>
?>
<p><a href="6_final.php">ir para a página 6</a></p>
</body>
</html>
