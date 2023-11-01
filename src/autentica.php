<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);

require_once("conecta.php");


$usuario=$_POST["txtUser"];
$senha=$_POST["txtSenha"];



$sql   =   mysqli_query($conexao, "
  SELECT A.id_usuario, A.nome_usuario FROM tbl_usuario A WHERE 
	A.usuario  =  '$usuario' AND A.senha   =  '$senha'") or die("ERRO NO COMANDO SQL");


$row   =  mysqli_num_rows($sql);


if($row == 0) 
    {
      echo "Usuário/Senha inválidos";
	}
else  
  { 
	  while($dados=mysqli_fetch_assoc($sql))
			{
				session_start();
				$_SESSION[id]    =  $dados['id_usuario'];
				$_SESSION[nome]  =  $dados['nome_usuario'];
				header("Location: menu.php");
			}
  }
	
?>
