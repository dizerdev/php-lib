<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<?php 


print "Esta é a Escola:".$_SESSION['escola'];
print "<hr>";
print "Esta é o Nome:".$_SESSION['nome'];
?>
<p><a href="5_logout.php">ir para a página 5</a></p>
</body>
</html>
