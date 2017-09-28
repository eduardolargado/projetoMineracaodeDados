<?php
// MONTAR A PÁGINA COM O CONTEÚDO DO ARQUIVO TXT
	$arq = fopen("teste.txt", "r");
	$cont = fread($arq, 10000);
	echo $cont;
?>