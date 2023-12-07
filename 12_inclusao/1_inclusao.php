<?php 
include_once 'function.php';
include_once 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php @include 'listasss.php' ;
// Para inibir o erro, usar (@) mas so funciona por que a funcao é incluida no documento

echo teste();
echo teste();
?>

<hr>
<?php include 'lista.php' ?>
<hr>
<?php include 'lista.php' ?>
</body>
</html>