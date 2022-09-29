<?php 

include 'inc/config.php';
include 'inc/session.php';

if(!isset($_SESSION['logado'])){ header("Location:$link/login"); exit(); }
if(isset($_GET['deslogar'])){ session_destroy(); header("Location:$link/login"); exit(); }

include 'inc/header.php';
include 'inc/main.php';
include 'inc/footer.php';

?>


