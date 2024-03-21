<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        .producto {
            border: 1px solid #ddd;
            padding: 1em;
            margin: 1em;
            text-align: center;
        }

        .producto img {
            max-width: 100%;
            height: auto;
            margin-bottom: 1em;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Libros</h1>
    </header>

    <section>
        <div class="producto">
            <h2>Garcia Marquez </h2>
            <img src="secuestro.jpg" alt="cien">
            <button>Agregar al carrito</button>
            <img src="amor.jpg" alt="Imagen 2">
           <button>Agregar al carrito</button>
        </div>

        <div class="producto">
            
            <img src="doce.jpg" alt="Imagen 3">
            <button>Agregar al carrito</button>
            <img src="coronel.jpg" alt="Imagen 4">
            
            <button>Agregar al carrito</button>
        </div>

      
    </section>

    
</body>
</html>
