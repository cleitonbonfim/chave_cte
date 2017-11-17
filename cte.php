<!DOCTYPE html>
<html>
<head>
	<title>teste de substring</title>
</head>
<body>
<?php 

	$chave (string) = (string)23150100777858000833570120000209201001422896;

	$codEst = substr($chave,0,3);
	$Ano = substr($chave, 3,2);
	$Mes = substr($chave, 5,2);
	$Cnpj = substr($chave, 7,14);
	$TipoDcto = substr($chave,22,3);


 ?>
 <p>Codigo estado: <?= $codEst ?></p>
 <p>Ano: <?= $Ano ?></p>
 <p>Mes: <?= $Mes ?></p>
 <p>CNPJ: <?= $Cnpj ?></p>
 <p>Tipo de Documento: <?= $TipoDcto ?></p>


</body>
</html>