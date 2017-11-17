<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-chaves.php");

 $id = $_POST['id'];
 removeChave($conexao, $id);
 header("Location: chave-lista.php?removido=true");
 die();
 ?>
