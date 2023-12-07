<?php 
session_start();
unset($_SESSION['salario']);
//($_SESSION);
session_destroy();
?>
<!doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<?php

print "<hr>";
#####################################33
print "Esta é a Sessão: <br>";
print "<pre>";
print_r($_SESSION);
print "</pre>";
print "<hr>";
?>
<p><a href="6_final.php">ir para a página 6</a></p>
</body>
</html>
