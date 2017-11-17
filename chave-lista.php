<?php include("cabecalho.php");
	  include("conecta.php"); 
	  include("banco-chaves.php"); ?>
<?php 
if (array_key_exists('removido',$_GET) && $_GET['removido']=="true") {
?>
		<p class="text-success">Chave removida!</p>
<?php
	}
?>


<table class= "table table-striped table-bordered">
	<?php	   
		$allchaves = listaChaves($conexao); 
		foreach ($allchaves as $chaves) :
	?>
		<tr>
			<td><?= $chaves['id'] ?></td>
			<td><?= $chaves['cnpj'] ?></td>
			<td><?= $chaves['numcte'] ?></td>
			<td><?= $chaves['chave'] ?></td>
			<td>
				<form action="remove-chave.php" method="post">
				<input type="hidden" name="id" value="<?=$chaves['id']?>">
					<button class="btn-danger">Remover</button>
				</form>
			</td>
		</tr>
	<?php
	 	endforeach 
	?>
</table>

<?php include("rodape.php");?>