<?php
session_start();
session_destroy(); // Destruye la sesión
header("Location: ../screens/login.php"); // Redirige al login
exit();
?>
