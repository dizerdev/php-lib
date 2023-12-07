<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


$cont = 1;//contadora e controladora
while($cont <= 50){
	if($cont % 5 == 0) $cor="#0F0";
	elseif ($cont % 2 == 0) $cor = "#F00";
	else $cor = "#00F";

	echo "<span style=\"color:$cor\">$cont</span>, ";
	$cont++;
}
echo"<hr>";


?>
</body>
</html>