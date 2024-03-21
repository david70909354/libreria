<?php
session_start();

require 'database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        try {
            $email = $_POST['email'];
            $password = $_POST['password'];



            // Check if the user already exists in the database
            $existingUser = $conn->prepare('SELECT id, email, password FROM usuarios2 WHERE email = :email');
            $existingUser->bindParam(':email', $email);
            $existingUser->execute();
            $results = $existingUser->fetch(PDO::FETCH_ASSOC);

            if ($results) {
                // User exists, verify the password
                if (password_verify($password, $results['password'])) {
                    $_SESSION['usuarios2_id'] = $results['id'];
                    header("Location: inicio.php");
                    exit;
                } else {
                    $message = 'Lo siento, las credenciales no coinciden';
                }
            } else {
                // User does not exist, proceed to create one
                $sql = "INSERT INTO usuarios2 (email, password) VALUES (:email, :password)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':email', $email);
                $passwordHash = password_hash($password, PASSWORD_BCRYPT);
                $stmt->bindParam(':password', $passwordHash);

                if ($stmt->execute()) {
                    $message = 'Usuario creado exitosamente';
                } else {
                    $message = 'Lo sentimos, hubo un problema al crear tu cuenta';
                }
            }
        } catch (PDOException $e) {
            $message = 'Error: ' . $e->getMessage();
        }
    } else {
        $message = 'Por favor, completa todos los campos.';
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilos3.css">
  </head>
  <body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Ingresar</h1>
    <span><a href="signup.php">Usuarios</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Ingresa tu email">
      <input name="password" type="password" placeholder="Ingresa tu contraseña">
      <input type="submit" value="Iniciar sesión">
      <a href="index.php">Inicio</a>
    </form>
  </body>
</html>

