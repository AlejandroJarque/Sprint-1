<?php
session_start();

$username = $_POST['username'] ?? '';
$age = $_POST['age'] ?? '';
$email = $_POST['email'] ?? '';
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

    <p>Usuario: 
        <?php
            if(!ctype_alpha($username)) {
                echo "Este campo solo puede contener letras";
            }else if(empty($username)) {
                echo "Campo obligatorio";
            }else {
                echo $_SESSION['username'];
            }
        ?>
    </p>

    <p>Edad: 
        <?php 
            if(empty($age)) {
                echo "Campo obligatorio";
            }else {
                echo $_SESSION['age'];
            }
        ?>
    </p>

    <p>Email: 
        <?php
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email no valido";
            }else if(empty($email)) {
                echo "Campo obligatorio";
            }else {
                echo $_SESSION['email']; 
            }
        ?>
    </p>

    <?php
        $_SESSION['username'] = $username;
        $_SESSION['age'] = $age;
        $_SESSION['email'] = $email;
    ?>

    <form action="Formulario2.html" method="POST">
        <button type="submit" name="volver">Volver</button>
    </form>

    <?php
        if(isset($_POST['volver'])) {
            header("Location: Formulario2.html");
            exit;
        }
    ?>

</body>
</html>