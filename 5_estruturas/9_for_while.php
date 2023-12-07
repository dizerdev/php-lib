<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//quero o 1º multiplo de 11,13,17 e 19
$achei = false;//controladora
$cont = 1;//contadora 
while($achei == false){
	if($cont % 11 == 0 && $cont % 13 == 0 && $cont % 17 == 0 && $cont % 19 == 0 ) {
		echo $cont;
		//break;
		$achei = true;
	}
	$cont++;
}
/**/
echo"<hr>";


//contadora e controladora
//os multiplos de 3 que estão entre 1 e 100
for($cont = 1; $cont <= 100; $cont++){
	if($cont % 3 == 0)
	echo "$cont, ";
}
echo"<hr>";

?>
</body>
</html>