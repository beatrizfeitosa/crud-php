<?php
//dados para conex�o
$servidor   =   "localhost";	//servidor
$bd         =   "bd_loja";	//banco de dados
$usuario    =   "root";		//usuario
$senha      =   "1234";		//senha

$conexao    =   mysqli_connect($servidor, $usuario, $senha)		//conectando
               or die("ERRO NA CONEX�O");


$db= mysqli_select_db($conexao,$bd)		//a fun��o connect() - mysqli - abre uma nova conex�o com o servidor mysqli
or die("ERRO NA SELE��O DO DATABASE");



?>