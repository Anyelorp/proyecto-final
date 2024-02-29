<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anular Compra - El Tornillo Feliz</title>

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

        input[type="submit"] {
            background-color: #e74c3c;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<body>
    <form action="procesar_anulacion.php" method="post" onsubmit="return validarFormulario()">
        <h1>Anular Compra en El Tornillo Feliz</h1>

        <label for="id_compra">ID de Compra a Anular:</label>
        <input type="number" id="id_compra" name="id_compra" required>

        <input type="submit" value="Anular Compra">
    </form>

    <script>
        function validarFormulario() {
            // Puedes agregar validaciones adicionales según tus necesidades
            return true;
        }
    </script>
</body>

</html>
