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
    $idCompra = isset($_POST['id_compra']) ? $_POST['id_compra'] : '';
    $motivoAnulacion = isset($_POST['motivo']) ? $_POST['motivo'] : '';

    // Insertar datos en la base de datos
    $sql = "INSERT INTO anulaciones (id_compra, motivo) VALUES ($idCompra, '$motivoAnulacion')";

    if ($conn->query($sql) === TRUE) {
        echo "Compra anulada con éxito";
    } else {
        echo "Error al anular la compra: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>
