<?php
include '../php/conexion_bd.php';

// Capturar datos del formulario
$nombre = $_POST["user"];
$correo = $_POST["email"];
$contrasena = $_POST["password"];

// Encriptar la contraseña con SHA-512
$contrasena = hash('sha512', $contrasena);

try {
    // Verificar si el usuario ya existe
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE Nombre = :nombre");
    $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo '
        <script>
            alert("Este usuario ya está registrado. Intenta con otro diferente.");
            window.location = "../screens/Inscribirse.php";
        </script>';
        exit();
    }

    // Insertar los datos del nuevo usuario
    $stmt = $conexion->prepare("INSERT INTO usuarios (Nombre, Correo, Contrasena) VALUES (:nombre, :correo, :contrasena)");
    $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
    $stmt->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../screens/login.php";
        </script>';
    } else {
        echo '
        <script>
            alert("Error al registrar el usuario. Intenta nuevamente.");
            window.location = "../screens/Inscribirse.php";
        </script>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
