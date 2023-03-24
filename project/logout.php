<?php

//print_r($_SERVER);
include($_SERVER['DOCUMENT_ROOT']."/../public/meta.php") ;
include($_SERVER['DOCUMENT_ROOT']."/../public/header.php");
session_unset();
session_destroy();
header('location:index.php');

?>

