<?php
session_start();
 
// Remova todas as variáveis de sessão
$_SESSION = array();
 
session_destroy();
 
// Redirecionar para a página de login
header("location: Index.php");
exit;
?>