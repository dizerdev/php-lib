<?php 
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['entrar'])){
		
	echo "<pre>";
	var_dump($_FILES);
	echo "</pre>";

	//nome do Arquivo
	echo $_FILES['arq']['name']."<br>";

	//nome Temporario
	echo $_FILES['arq']['tmp_name']."<br>";

	//Tamanho
	echo $_FILES['arq']['size']."<br>";

	//Erro
	echo $_FILES['arq']['error']."<br>";

	//tipo
	echo $_FILES['arq']['type']."<br>";

	echo "<hr>";
#############################################################
	$temp = $_FILES['arq']['tmp_name'];
	$nome = $_FILES['arq']['name'];


	if(!empty($nome) && $_FILES['arq']['error'] === 0){

			if(!is_dir('imagens')){
				mkdir('imagens',0777);
			}
			if(!file_exists('imagens/'.$_POST['tipo'])){
				mkdir('imagens/'.$_POST['tipo'],0777);
			}

			$ret = move_uploaded_file($temp, "imagens/{$_POST['tipo']}/$nome");
			echo $ret;	

	}
}	
?>