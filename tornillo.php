<!DOCTYPE html>

<html lang="es">

<head>

   <meta charset="UTF-8">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Registro - El Tornillo Feliz</title>

   <!-- Puedes incluir enlaces a tus estilos CSS aquí -->



   <!-- Ejemplo de enlace a un archivo de script externo -->

   <script src="tu_script.js" defer></script>



   <!-- O puedes incluir scripts directamente -->

   <script>

     // Aquí puedes escribir tu código JavaScript

     // Por ejemplo, puedes validar los campos del formulario antes de enviarlo

     function validarFormulario() {

       var nombre = document.getElementById('nombre').value;

       var email = document.getElementById('email').value;

       var password = document.getElementById('password').value;

       var confirmarPassword = document.getElementById('confirmar_password').value;



       // Aquí puedes agregar tus propias validaciones



       // Ejemplo de validación básica de contraseña

       if (password !== confirmarPassword) {

         alert('Las contraseñas no coinciden');

         return false; // Evita que el formulario se envíe

      }



       // Más validaciones...



       return true; // Permite que el formulario se envíe

    }

   </script>

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

   <form action="procesar_registro.php" method="post" onsubmit="return validarFormulario()">

     <h1>Registro en El Tornillo Feliz</h1>

     

     <label for="nombre">Nombre completo:</label>

     <input type="text" id="nombre" name="nombre" required>



     <label for="email">Correo electrónico:</label>

     <input type="email" id="email" name="email" required>



     <label for="password">Contraseña:</label>

     <input type="password" id="password" name="password" required>



     <label for="confirmar_password">Confirmar contraseña:</label>

     <input type="password" id="confirmar_password" name="confirmar_password" required>



     <input type="submit" value="Registrarse">

   </form>

</body>

</html>


