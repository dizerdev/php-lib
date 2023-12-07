<?php 
/* 
em 26/07/2017
http://php.net/manual/pt_BR/features.file-upload.php


##########################################################################
Breve descri�ao das diretivas de configura�ao.


file_uploads boolean
Se deve ou nao permitir envio de arquivos via HTTP. Veja tamb�m as diretivas upload_max_filesize, upload_tmp_dir, e post_max_size. 
Quando um integer � utilizado, o valor � medido em bytes. Voce tamb�m pode utilizar a nota�ao resumida como descrito neste FAQ. 



upload_max_filesize integer 
O tamanho m�ximo de um arquivo enviado. 
Quando um integer � utilizado, o valor � medido em bytes. Voce tamb�m pode utilizar a nota�ao resumida como descrito neste FAQ. 

#########################################################################
post_max_size integer 
Configura o tamanho m�ximo dos dados enviados via POST. Essa configura�ao tamb�m afeta o envio (upload) de arquivos. Para enviar arquivos grandes, esse valor deve ser maior que upload_max_filesize. 

Se um limite de mem�ria for imposto pelo seu script configure, memory_limit tamb�m afeta envio de arquivos. De maneira geral, memory_limit deve ser maior que post_max_size . 
Quando um integer � utilizado, o valor � medido em bytes.  

##########################################################################
No formul�rio:
M�todo: Post
Na tag form : enctype="multipart/form-data"

Campo de fromul�rio para escolher o arquivo:
  <input type="file">
  
Num campo hidden:
<input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="xxxxx">
 */
?>
<html>
<head>
<title>Untitled</title>
</head>
<body>
<form action="upload2.php" method="post" enctype="multipart/form-data">
  <p>

  <br>
  <select name="tipo">
                  <option value="escolha" selected>Escolha</option>
                  <option value="avioes">Avioes</option>
                  <option value="inglaterra">Inglaterra</option>
                  <option value="dicionario">Dicionario</option>
                  <option value="bueiros">Bueiros</option>

    </select>
  </p>
  <p>
    <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="100000000">
      <input type="file" name="arq" id="arq">
    <br>
    <input type="submit" name="entrar">	
</p>
</form>						
</body>
</html>