<?php
    session_start();
    if(isset($_SESSION['id'])==false){
        header("location: ../cadastro/login.php");
    }
    else{
        header("location: ../perfil/perfil.php");
    }
?>
