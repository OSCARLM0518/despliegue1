<?php
session_start(); // Inicia la sesión
include 'conexion_bd.php'; // Conexión a la base de datos

// Verificar si se enviaron los datos
if (isset($_POST['user']) && isset($_POST['password'])) {
    $usuario = $_POST['user'];
    $contrasena = $_POST['password'];

    // Encriptar la contraseña ingresada
    $contrasena = hash('sha512', $contrasena);

    try {
        // Preparar y ejecutar la consulta para buscar al usuario
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE Nombre = :nombre AND Contrasena = :contrasena");
        $stmt->bindParam(':nombre', $usuario);
        $stmt->bindParam(':contrasena', $contrasena);
        $stmt->execute();

        // Validar si el usuario existe
        if ($stmt->rowCount() > 0) {
            $datos_usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['usuario'] = $datos_usuario['Nombre']; // Guardar nombre en la sesión
            header("Location: perfil_usuario.php"); // Redirigir automáticamente
            exit();
        } else {
            echo '
            <script>
                alert("Usuario o contraseña incorrectos. Inténtalo nuevamente.");
                window.location = "../screens/login.php";
            </script>';
            exit();
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
} else {
    echo '
    <script>
        alert("Por favor, completa todos los campos.");
        window.location = "../screens/login.php";
    </script>';
    exit();
}
?>
