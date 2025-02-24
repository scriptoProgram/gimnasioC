<?php 
    require_once './../src/controllers/authController.php'; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $error = AuthController::login($email, $password);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <title>Login -Gimnasio</title>
</head>
<body>
    <form method="POST">
        <input type="email" name="email" placeholder="Correo" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Iniciar sesión</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>