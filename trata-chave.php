<?php 

	//(string) = (string)23  15 01 00777858000833 57 012 000020920 100142289 6;

						// 23150100777858000833570120000209201001422896  -  44 caracteres

	$chave 

	$codest = substr($chave,0,2);
	$ano = substr($chave, 2,2);
	$mes = substr($chave, 4,2);
	$cnpj = substr($chave, 6,14);
	$tipodcto = substr($chave,20,2);
	$serie = substr($chave,22,3);
	$numcte = substr($chave,25,9);
	$codcte = substr($chave,34,9);
	$digverifica = substr($chave,43,1);
	




 ?>
 