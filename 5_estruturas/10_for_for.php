<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// manipular valores em matrizes
echo "<table border='1'>\n";

for($linha = 1; $linha <= 4; $linha++){
	echo "\t<tr>\n";

		for($col=1;$col <=4;$col++){
			echo "\t\t<td>$linha,$col</td>\n";
		}
		
	echo "\t</tr>\n";
}

echo "</table>\n";

echo"<hr>";

?>
</body>
</html>