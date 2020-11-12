<?php

// $_SESSION['login']=null;
session_start();
unset($_SESSION['login']);

header("location:index.php");

?>