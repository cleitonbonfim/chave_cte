<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-chaves.php");
 


 	$chave = $_POST["chave"];

	 	if (strlen($chave) < 44) { ?>
	 		<p class="text-danger"><b>Chave CTE não está Completa!!!!  Verifique a Chave</b></p>
	 	<?php
	 	}else{
			$codest = substr($chave,0,2);
			$ano = substr($chave, 2,2);
			$mes = substr($chave, 4,2);
			$cnpj = substr($chave, 6,14);
			$tipodcto = substr($chave,20,2);
			$serie = substr($chave,22,3);
			$numcte = substr($chave,25,9);
			$codcte = substr($chave,34,9);
			$digverifica = substr($chave,43,1);
		
	
	$conexao = mysqli_connect('localhost', 'root', '', 'xml_chaves');

		if(insereProduto($conexao, $codest,$ano,$mes,$cnpj,$tipodcto,$serie,$numcte,$codcte,$digverifica,$chave)) {?>
			<p class="text-success">Chave CTE adicionada com sucesso</p>
		<?php } else{ ?>
			<p class="text-danger"><strong>Chave CTE não foi adicionada!!!!</strong></p> 
				<?php
			}

	mysqli_close($conexao);
		}

?>

	
<?php include("rodape.php");?>