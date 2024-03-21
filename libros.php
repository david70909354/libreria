
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Agrega la referencia a Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <a href="index.php">Inicio</a>

    <?php
    session_start();
    include 'conexion.php'; // Asegúrate de que este archivo esté en la ubicación correcta

    $enlace = mysqli_connect("localhost", $username, $password, "usuarios");

    if (!$enlace) {
        die('Error en la conexión: ' . mysqli_connect_error());
    }

    $sql = "SELECT Titulo, Autor, Editorial, Precio FROM libros2";

    $resultado = mysqli_query($enlace, $sql);

    if (!$resultado) {
        die('Error en la consulta: ' . mysqli_error($enlace));
    }
    ?>

    <div>
        <form method="post" action="ver_carrito.php">
            <table>
                <thead>
                    <tr>
                        <td>Titulo</td>
                        <td>Autor</td>
                        <td>Editorial</td>
                        <td>Precio</td>
                        <td>Elegir libro</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <td><?php echo $fila['Titulo']; ?></td>
                            <td><?php echo $fila['Autor']; ?></td>
                            <td><?php echo $fila['Editorial']; ?></td>
                            <td><?php echo $fila['Precio']; ?></td>
                            <td>
                                <input type="checkbox" name="libros[]" value="<?php echo $fila['Titulo']; ?>">
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <button type="submit" name="buy_books" title="Comprar">
                Carro de compras libros 
                <i class="fas fa-shopping-cart"></i> <!-- Utiliza la clase "fas" para Font Awesome 6.x -->
            </button>
        </form>
    </div>
</body>
</html>



