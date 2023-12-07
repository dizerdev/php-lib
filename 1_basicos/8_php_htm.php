<?php
$nome = "Impacta";
$saida = "<p class=\"formata\">$nome</p>";
?>
<!doctype html>

<html>
<head>
<title>Untitled</title>
<style type="text/css">
	.formata{
		color:#F00;
		font-family:Arial;
		font-size:36px
	}
</style>
<meta charset="utf-8">
</head>
<body>
<p class="formata">Edu Pretel</p>
<hr>
<p class="formata"><?= $nome ?></p>
<hr>
<?php
	echo "<p class=\"formata\">$nome</p>";
?>
<hr>
<?php
	echo "<p class=\"formata\">$nome</p>";
?>
<hr>
<?=$saida ?>
</body>
</html>