<?php
//dados para conexão
$servidor   =   "localhost";	//servidor
$bd         =   "bd_loja";	//banco de dados
$usuario    =   "root";		//usuario
$senha      =   "1234";		//senha

$conexao    =   mysqli_connect($servidor, $usuario, $senha)		//conectando
               or die("ERRO NA CONEXÃO");


$db= mysqli_select_db($conexao,$bd)		//a função connect() - mysqli - abre uma nova conexão com o servidor mysqli
or die("ERRO NA SELEÇÃO DO DATABASE");



?>