<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido usuario</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilos3.css">
    
  </head>
  <body>
    <?php if (!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">Logout</a>
    <?php else: ?>
      <h1>Registro</h1>
      <div class="menu">
        <a href="login.php">Ingreso</a>
        <a href="signup.php">Registro</a>
        
      </div>
    <?php endif; ?>
  </body>
</html>

