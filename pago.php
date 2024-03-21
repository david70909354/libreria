<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Add the reference to Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <a href="index.php">Inicio</a>
    <?php
    session_start();

    if(isset($_POST['buy_books'])) {
        // Verificar si se han seleccionado libros
        if(isset($_POST['libros']) && !empty($_POST['libros'])) {
            // Aquí puedes procesar la compra de los libros seleccionados
            $libros_seleccionados = $_POST['libros'];
            foreach($libros_seleccionados as $libro) {
                echo 'Libro para comprar: ' . $libro . '<br>';
                // Aquí puedes realizar otras operaciones, como registrar la compra en la base de datos
            }
        } else {
            echo 'No se ha seleccionado ningún libro para comprar.';
        }
    } else {
        echo 'No se ha enviado ningún formulario de compra.';
    }
    ?>

    <form method="post" action="pago.php">
        <button type="submit" name="buy_books" title="Comprar">
            Comprar libros seleccionados
            <i class="fa fa-credit-card"></i>
        </button>
    </form>
</body>
</html>



