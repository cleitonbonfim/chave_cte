<?php include("cabecalho.php");?>
		<h1>Formulario de Chaves</h1>
	<form action="adiciona-chave.php" method="post">
		<table class="table">
			<tr>
				<td>Chave: </td>
				<td> 
					<input class="form-control" type="text" name="chave"><br/>
				</td>
			</tr>
				<tr>
					<td> <input class="btn btn-primary" type="submit" value="Salvar"></td>
				</tr>
		</table>
	</form>

<?php include("rodape.php");?>