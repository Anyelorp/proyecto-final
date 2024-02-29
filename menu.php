<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú - El Tornillo Feliz</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            background-image: url('images.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        nav {
            margin-top: 20px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            margin: 0 20px;
        }
    </style>
</head>

<body>
    <h1>Bienvenido a El Tornillo Feliz</h1>

    <nav>
        <a href="http://localhost/tornillo/tornillo.php">Registro</a>
        <a href="http://localhost/tornillo/procesar-compra.php">Compra</a>
        <a href="http://localhost/tornillo/anular.php">Anular Compra</a>
    </nav>
</body>

</html>
