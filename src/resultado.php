<?
//VERIFICA SE A SESS�O EST� ATIVA
require_once("verifica.php");

echo "<h2>Autentica��o de Usu�rios</h2>";
echo "Usu�rio logado no sistema: ".$_SESSION["nome"];?>
  <h2 align="center">Menu de administra��o da Loja Tabajara</h2><hr>
  <p align="center"><a href="incluir.php"><b>Incluir Produto</b></a></p>
  <p align="center"><a href="alterar.php"><b>Alterar Produto</b></a></p>
  <p align="center"><a href="excluir.php"><b>Excluir Produto</b></a></p>
  <p align="center"><a href="listar.php"><b>Listar Produtos</b></a></p>
 <?php
  echo "<br><br><a href='logout.php'>Logout</a>";
?>