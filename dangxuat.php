<?php
if (!isset($_SESSION)) session_start();
unset($_SESSION['admin1']);
header('location:index.php');
?>