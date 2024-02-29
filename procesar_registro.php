<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tornillo";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener datos del formulario solo si están definidos
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_BCRYPT) : ''; // Hash de la contraseña

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, email, password_hash) VALUES ('$nombre', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>
