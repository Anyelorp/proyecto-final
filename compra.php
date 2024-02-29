<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra - El Tornillo Feliz</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="procesar-compra.php" method="post" onsubmit="return validarFormulario()">
        <h1>Compra en El Tornillo Feliz</h1>

        <label for="producto">Producto:</label>
        <select id="producto" name="producto" required>
            <option value="tornillo">Tornillo</option>
            <option value="tuerca">Tuerca</option>
            <option value="clavo">Clavo</option>
            <!-- Agrega más opciones según tus productos -->

        </select>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>

        <label for="direccion">Dirección de envío:</label>
        <input type="text" id="direccion" name="direccion" required>

        <input type="submit" value="Realizar Compra">
    </form>

    <script>
        function validarFormulario() {
            // Puedes agregar validaciones adicionales según tus necesidades
            return true;
        }
    </script>
</body>

</html>

