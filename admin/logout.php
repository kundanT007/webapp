<?php
session_start();
//$q=$_GET['q'];
 $_SESSION['login']= FALSE;
 session_destroy();
 header("Location: ../index.php");
 ?>
