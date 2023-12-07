<!doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<?php 
print "Esta é a Post:  <br>";
print "<pre>";
print_r($_POST);
print "</pre>";
###########################################################3
print "<hr>";
#####################################33
print "Esta é a Escola:".$_COOKIE['escola'];
print "<hr>";
print "Esta é o Nome:".$_COOKIE['nome'];
print "<hr>";
?>
<p><a href="5_logout.php">ir para a página 5</a></p>
</body>
</html>
