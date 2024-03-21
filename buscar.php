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
    <div class="container">
        <div class="form-container">
            <?php
            session_start();
            include 'conexion.php';

            $enlace = mysqli_connect("localhost", $username, $password, "usuarios") or die("Connection failed: " . mysqli_connect_error());

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $searchTerm = mysqli_real_escape_string($enlace, $_POST['search']);
                $sql = "SELECT * FROM libros2 WHERE Titulo LIKE '%$searchTerm%' OR Autor LIKE '%$searchTerm%' OR Editorial LIKE '%$searchTerm%'";
                $resultado = mysqli_query($enlace, $sql) or die("Query failed: " . mysqli_error($enlace));

                if (mysqli_num_rows($resultado) > 0) {
                    while ($row = mysqli_fetch_assoc($resultado)) {
                        echo "Titulo: " . $row['Titulo'] . "<br>";
                        echo "Autor: " . $row['Autor'] . "<br>";
                        echo "Editorial: " . $row['Editorial'] . "<br>";
                        echo "Precio: " . $row['Precio'] . "<br>";
                        echo "<hr>";
                    }
                } else {
                    echo "No se encontraron resultados para la búsqueda: $searchTerm";
                }
            }

            mysqli_close($enlace);
            ?>

            <form method="post" action="">
                <label for="search">Buscar</label>
                <input type="text" name="search" id="search" required>
                <input type="submit" value="Buscar libro">
            </form>
        </div>
    </div>
</body>
</html>






