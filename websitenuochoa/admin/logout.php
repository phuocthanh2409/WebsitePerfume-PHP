<?php 
if (!isset($_SESSION)) session_start();
unset($_SESSION['admin']);
header('location:login.html');