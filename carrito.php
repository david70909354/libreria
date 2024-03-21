<?php
session_start();

// Dar clic en el botón "Agregar al Carrito"
if (isset($_POST['add_to_cart'])) {
    $id_libro = $_POST['id'];

    // Inicialice la matriz de carro si no está configurado
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    //Agregue el  ID to del libro a la matriz del carrito
    $_SESSION['carrito'][] = $id_libro;
}

// Redirigir nuevamente a la página ver_carrito.php
header("Location:ver_carrito.php");
exit();
?>
