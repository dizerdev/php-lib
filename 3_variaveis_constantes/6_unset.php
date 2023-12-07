<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>

<?php 


$a = 12;
echo "Essa variável existe:";
echo isset($a);
echo "<hr>";
unset($a);
echo "Essa variável existe:";
echo isset($a);

?>
</body>
</html>
