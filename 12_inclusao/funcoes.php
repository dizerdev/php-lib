<?php 
function montaSelect(Array $conteudo, string $nome):string
{	
	$saida =  "\t<select name=\"$nome\" id=\"$nome\">\n";
	foreach($conteudo as $ind => $valor){
			$saida = $saida . "\t\t<option value=\"$ind\">$valor</option>\n";
	}; 
	$saida .= "\t</select>\n";
	return $saida;
}