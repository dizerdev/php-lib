<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//$login = false;
//$login = 0;
//$login = "0";
//$login = null;
//$login = '';
$login = -38;
if($login){
	echo "Autenticado<br>";
}else{
	echo "Não autorizado<br>";	
}
echo "<hr>";
if(!$login){
	echo "Não autorizado<br>";	
}else{
	echo "Autenticado<br>";
}


?>
</body>
</html>