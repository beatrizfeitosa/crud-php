<?php
//INICIALIZA A SESS�O
session_start();

//DESTR�I AS VARI�VEIS
unset($_SESSION[id]);
unset($_SESSION[nome]);

//REDIRECIONA PARA A TELA DE LOGIN
Header("Location: index.php");
?>
