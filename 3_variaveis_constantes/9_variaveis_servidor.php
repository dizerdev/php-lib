<!doctype html>
<html>
<head>
<title>Estudo de vari&aacute;vel</title>
<meta charset="utf-8">
</head>
<body>
<?php 
echo "<pre>";
var_dump(get_defined_vars());
echo "</pre>";
echo "<hr>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<hr>";
echo $_SERVER["HTTP_USER_AGENT"];
?>
</body>
</html>