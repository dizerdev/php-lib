<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$data = date('w');
switch($data){
	case 0:
		echo "Domingo";
		break;
	case 1:
		echo "Segunda-feira";
		break;
	case 2:
		echo "Terça-feira";
		break;
	case 3:
		echo "Quarta-feira";
		break;
	case 4:
		echo "Quinta-feira";
		break;
	case 5:
		echo "Sexta-feira";
		break;
	case 6:
		echo "Sábado";
		break;
	default :
		echo "Valor Inválido";						
}
?>
</body>
</html>