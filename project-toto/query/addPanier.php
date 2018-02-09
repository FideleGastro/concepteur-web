<?php
    session_start();
    $_SESSION['panier'][$_GET['id']]['date']=$_GET['date'];
?>