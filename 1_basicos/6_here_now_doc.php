<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php
$nome="Fabiano";

//heredoc
echo <<<"LISTA"
<p>Olá "$nome" !!!!!!</p>
<p>Seus cursos :  </p>
<ul>
  <li>'Php'  </li>
  <li>'JS'  </li>
  <li>'MySql' </li>
</ul>
LISTA;

echo "<hr>";
//nowdoc
echo <<<'LISTAS'
<p>Olá "$nome" !!!!!!</p>
<p>Seus cursos :  </p>
<ul>
  <li>'Php'  </li>
  <li>'JS'  </li>
  <li>'MySql' </li>
</ul>
LISTAS;
?>
</body>
</html>