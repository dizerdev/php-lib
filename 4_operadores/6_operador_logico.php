<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 



$a = 2;
$b = 3;
$c = 6;
$d = 1;

echo ($c > $a && $c > $b && $c > $d)."<hr>";//and
echo ($c > $a and $c > $b and $c > $d)."<hr>";//and

echo ($c > $a || $c < $b || $c < $d)."<hr>";//or
echo ($c > $a or $c < $b or $c < $d)."<hr>";//or

echo ($c > $a xor $c > $b xor $c < $d)."<hr>";//xor



?>
</body>
</html>
