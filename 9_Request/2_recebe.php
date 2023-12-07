<!doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<p>
  <?php 
 
print "Esta é a Post:  <br>";
print "<pre>";
print_r($_POST);
print "</pre>";
##########################################################
print "<hr>";
#####################################
print "Esta é a GET:  <br>";
print "<pre>";
print_r($_GET);
print "</pre>";
##########################################################
print "<hr>";
#####################################
print "<hr>";
#####################################
print "Esta é a Cookie: <br>";
print "<pre>";
print_r($_COOKIE);
print "</pre>";
##########################################################
print "<hr>";
#####################################
print "Esta é a Request: <br>";
print "<pre>";
// recebe tudo oque estiver em GPCS
print_r($_REQUEST);
print "</pre>";
##########################################################
print "<hr>";
#####################################
?>

</p>
<p>&nbsp;</p>

</body>
</html>
