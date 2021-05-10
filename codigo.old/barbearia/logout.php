<?php
	//Header
    include_once 'includes/header.php';
    //Mensagens
    include_once 'includes/message.php';

    //Encerrando a sessão
    session_unset();
    session_destroy();
    header("Location: index.php");
    
?>