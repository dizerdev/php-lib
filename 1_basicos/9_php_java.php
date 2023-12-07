<?php
$escola = "Impacta";

$saida =  <<<JAVA
<script type="text/javascript">
<!--
alert("\\tOlá $escola! \\n\\nQuinto aviso");
//-->
</script>
JAVA;

?>
<!doctype html>
<html>
<head>
<title>Escape</title>
<meta charset="utf-8">
</head>
<body>


<hr>

<script type="text/javascript">
<!--
alert("\tOlá Eduardo! \n\nPrimeiro aviso");
//-->
</script>

<hr>

<script type="text/javascript">
<!--
alert("\tOlá !<?= $escola ?> \n\nSegundo aviso");
//-->
</script>

<hr>
<?php

echo "<script type=\"text/javascript\">
<!--
alert(\"\\tOlá $escola! \\n\\nTerceiro aviso\");
//-->
</script>";
?>
<hr>
<?php
echo <<<JAVA
<script type="text/javascript">
<!--
alert("\\tOlá $escola! \\n\\nQuarto aviso");
//-->
</script>
JAVA;
?>
<hr>

<?= $saida ?>

<hr>


</body>
</html>
