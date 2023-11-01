<?php
$dbnome = "bd_loja";


#
# Table structure for table 'tb_usuarios'
#
$conexao= mysqli_connect('localhost','root','1234') or die("Erro de conexão");
$criadb= mysqli_query($conexao, "CREATE DATABASE if not exists $dbnome");
$abre=mysqli_query ($conexao,"USE $dbnome");  
 
$tbNome1 ="tbl_usuario";
$tbNome2 = "produto";
$tbNome3 = "categoria";

$elimina = "DROP TABLE  $tbNome2";

$criacao1 = "CREATE TABLE if not exists $tbNome1("
            ."id_usuario smallint NOT NULL AUTO_INCREMENT,"
	        ."nome_usuario varchar(80) NOT NULL,"
		    ."usuario varchar(30) NOT NULL,"
		    ."senha varchar(15) NOT NULL,"
            ."PRIMARY KEY (id_usuario))";

					 
$criacao2 = "CREATE TABLE if not exists $tbNome2 ( "
           ."codigo_produto smallint NOT NULL AUTO_INCREMENT,"
	        ."nome_produto varchar(80) NOT NULL,"
           ."descricao_produto text,"
           ."preco  float NOT NULL,"
           ."cod_categoria smallint NOT NULL,"
           ."PRIMARY KEY (codigo_produto))";
					 
$criacao3 = "CREATE TABLE if not exists $tbNome3 ( "
           ."codigo_categoria smallint NOT NULL AUTO_INCREMENT,"
	         ."nome_categoria varchar(60) NOT NULL,"
           ."PRIMARY KEY (codigo_categoria))";

$resDrop = mysqli_query($conexao,$elimina);

if ($resDrop > 0) {
  echo "Tabela $tbNome2 eliminada.<br>";
} else {
  echo "Tabela $tbNome2 não existe.<br>";
}
					 
$resCria1 = mysqli_query($conexao, $criacao1);
$resCria2 = mysqli_query($conexao, $criacao2);
$resCria3 = mysqli_query($conexao, $criacao3);

if ($resCria1 > 0) {
  echo "Tabela $tbNome1 criada.<br>";
} else {
  echo "Tabela $tbNome1 não pode ser criada.<br>";
}

if ($resCria2 > 0) {
  echo "Tabela $tbNome2 criada.<br>";
} else {
  echo "Tabela $tbNome2 não pode ser criada.<br>";
}

if ($resCria3 > 0) {
  echo "Tabela $tbNome3 criada.<br>";
} else {
  echo "Tabela $tbNome3 não pode ser criada.<br>";
}

$indice2  = "CREATE UNIQUE INDEX indProd ON $tbNome2(codigo_produto)";
$indice3  = "CREATE UNIQUE INDEX indCat ON $tbNome3(codigo_categoria)";

$resIndx2 = mysqli_query($conexao, $indice2);
$resIndx3 = mysqli_query($conexao, $indice3);

if ($resIndx2 > 0) {
  echo "Índice da Tabela $tbNome2 criado.<br>";
} else {
  echo "Índice da Tabela $tbNome2 não pode ser criado.<br>";
}


if ($resIndx3 > 0) {
  echo "Índice da Tabela $tbNome3 criado.<br>";
} else {
  echo "Índice da Tabela $tbNome3 não pode ser criado.<br>";
}

$insere1 = ("INSERT INTO $tbNome1 VALUES(1,'Fulano de Tal','fulano','123')");
$insere2 = ("INSERT INTO $tbNome1 VALUES(2,'Ciclano de Tal','ciclano','abc')");


$insere3 = ("INSERT INTO $tbNome3 VALUES (1,'Eletrodomésticos')");
$insere4= ("INSERT INTO $tbNome3 VALUES (2,'Cama, Mesa e Banho')");
$insere5= ("INSERT INTO $tbNome3 VALUES (3,'Áudio e Video')");

$res1 =mysqli_query ($conexao, $insere1);
$res2 =mysqli_query ($conexao, $insere2);	 

$res=mysqli_query($conexao, $insere3);
$res4=mysqli_query($conexao, $insere4);
$res5=mysqli_query($conexao, $insere5);

if ($res1>0 && $res2>0)
  { 
	 echo "Dados inseridos na tabela $tbNome1 <br>";
	}
else
  {
   echo "Dados não podem se inseridos na tabela $tbNome1 <br>";	
	} 
	
if ($res3> 0 && $res4>0 && $res5>0)
 {
  echo "dados inseridos na Tabela $tbNome3 .<br>";
 }
 else 
 {
  echo "não foram inseridos dados na Tabela $tbNome3 .<br>"; 
 }


mysqli_close($conexao);
?>