<?php
//INICIALIZA A SESSÃO
session_start();
//SE NÃO TIVER VARIÁVEIS REGISTRADAS
//RETORNA PARA A TELA DE LOGIN
if( (!isset($_SESSION["id"])) AND (!isset($_SESSION[nome])) )
   Header("Location: index.php");
?>
