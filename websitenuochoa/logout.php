<?php
include('connect.php');
$session_userId = '';
$_SESSION['userId'] = '';
if (empty($session_userId) && empty($_SESSION['userId'])) {
    $url = BASE_URL . 'formGui.php';
    header("Location: $url");
}