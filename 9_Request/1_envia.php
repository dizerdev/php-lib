<?php
setcookie('nome',"Fabiano",time()+86400);
setcookie('escola',"Impacta",time()+86400);
?>
<!doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<label></label>
<form id="form1" name="form1" method="post" action="2_recebe.php?nome=Alexandre&idade=30">
  <label>Nome
  <input type="text" name="nome" />
  </label>
 
  <p>
    <label>
    <input type="submit" name="enviar" value="Enviar Info" />
    </label>
  </p>
</form>
</body>
</html>
