<?php
session_start();
if($_SESSION['uid']==''){
@header('Location: index.php');
echo"please login";
}
?>