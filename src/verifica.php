<?php
//INICIALIZA A SESS�O
session_start();
//SE N�O TIVER VARI�VEIS REGISTRADAS
//RETORNA PARA A TELA DE LOGIN
if( (!isset($_SESSION["id"])) AND (!isset($_SESSION[nome])) )
   Header("Location: index.php");
?>
