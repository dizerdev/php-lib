<!doctype html>
<html>
<head>
<title>Estudo de variável</title>
<meta charset="utf-8">
</head>
<body>
<?php
$animal = "cao";

$$animal = "Peter";//$cao = "Peter;"
var_dump($$animal);
echo "<br>";
var_dump($cao);
echo "<hr>";
echo "<pre>";
var_dump(get_defined_vars());
echo "</pre>";

?>
</body>
</html>