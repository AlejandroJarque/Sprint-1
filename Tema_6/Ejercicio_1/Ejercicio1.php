<?php
session_start();

$username = $_POST['username'] ?? '';
$age = $_POST['age'] ?? '';

$_SESSION['username'] = $username;
$_SESSION['age'] = $age;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de datos</title>
</head>
<body>

    <h3>Regitro de datos</h3>
    <p>Usuario: <?php echo $_SESSION['username']; ?></p>
    <p>Edad: <?php echo $_SESSION['age']; ?></p>

</body>
</html>