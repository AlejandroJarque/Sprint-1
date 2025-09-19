<?php
session_start();

$username = $_POST['username'] ?? '';
$age = $_POST['age'] ?? '';

$_SESSION['username'] = $username;
$_SESSION['age'] = $age;
?>