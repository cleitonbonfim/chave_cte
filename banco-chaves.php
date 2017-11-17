<?php 
	function insereProduto($conexao, $codest,$ano,$mes,$cnpj,$tipodcto,$serie,$numcte,$codcte,$digverifica,$chave){
		$query = "insert into num_chaves (codest, ano, mes, cnpj, tipodcto, serie, numcte, codcte,digverifica,chave) values ('{$codest}', '{$ano}', '{$mes}', '{$cnpj}', '{$tipodcto}', '{$serie}', '{$numcte}', '{$codcte}', '{$digverifica}', '{$chave}')";
		return mysqli_query($conexao, $query);
	}

	function listaChaves($conexao) {
		$allchaves = array();
		$resultado = mysqli_query($conexao, "select * from num_chaves");
		while($chaves = mysqli_fetch_assoc($resultado)) {
			array_push($allchaves, $chaves);			
		}
		return $allchaves;		
	}

	function removeChave($conexao, $id) {
		$query = "delete from num_chaves where id = {$id}";
		return mysqli_query($conexao,$query);
	}

