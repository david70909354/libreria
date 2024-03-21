<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilos3.css">

    <style>
        /* Estilos para centrar el formulario */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Esto centra verticalmente */
        }

        .form-container {
            width: 300px; /* Ancho del formulario */
        }
    </style>
</head>
<body>
    <a href="index.php">Inicio</a>

    <div class="container">
        <div class="form-container">
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
            <button type="submit" name="buy_books" title="Comprar">
                Comprar libros seleccionados
                <i class="fa fa-credit-card"></i>
            </button>
        </div>
    </div>
</body>
</html>





    