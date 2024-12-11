<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8
        <title>Lujos La La Pava</title>
        <meta content=" width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="../js/script.js" defer></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a182b98771.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/styleAgendar.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="../public/screens/contacto.php">Contacto</a>
                    <a class="text-body mr-3" href="../public/screens/ayuda.php">Ayuda</a>
                    <a class="text-body mr-3" href="../public/screens/Preguntas.php">Preguntas Frecuentes</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Mi cuenta</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><a class="text-body mr-3" href="login.php">Iniciar sesión</a></button>
                            <button class="dropdown-item" type="button"><a class="text-body mr-3" href="Inscribirse.php">Inscribirse</a></button>
                            <button class="dropdown-item" type="button">
                                <a class="text-body mr-3" href="../php/perfil_usuario.php">Cuenta</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Lujos</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">LaPava</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Servicio al Cliente</p>
                <h5 class="m-0">+57 320 598 8335</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categorias</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Información de servicios <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="../public/screens/servicosMacanicos.php" class="dropdown-item">Servicios mecanicos</a>
                                <a href="../public/screens/ProductosyRepuestos.php" class="dropdown-item">Venta de productos y repuestos</a>
                            </div>
                        </div>
                        <a href="../public/screens/Informaciónmecanicos.php" class="nav-item nav-link">Información de mecanicos</a>
                        <a href="../public/screens/Consejos.php" class="nav-item nav-link">Consejos</a>
                        <a href="../public/screens/trabajosRealizados.php" class="nav-item nav-link">trabajos realizados</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Lujos</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">LaPava</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="../index.php" class="nav-item nav-link active">Inicio</a>
                            <a href="../public/screens/ProductosyRepuestos.php" class="nav-item nav-link">Productos y repuestos</a>
                            <a href="../public/screens/AgendarCitas.php" class="nav-item nav-link">Agenda tu cita</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Paginas <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="../public/screens/Carrito.php" class="dropdown-item">Carrito de compra</a>

                                </div>
                            </div>
                            <a href="../public/screens/contacto.php" class="nav-item nav-link">Contactos</a>
                        </div>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="../public/screens/Carrito.php" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>

                        </a>
                    </div>
            </div>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar End -->

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Inicio</a>
                    <span class="breadcrumb-item active">Agenda tu cita</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Agendar inicio -->
    <?php
    require_once '../php/appointments.php';

    $message = "";
    $messageClass = "";
    $editing = false;
    $currentCita = null;

    // Manejar solicitudes POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['action'])) {
            if ($_POST['action'] == 'create') {
                $result = $appointmentsHandler->createAppointment($_POST);
                $message = $result ? "Cita agendada exitosamente" : "Error al agendar cita.";
                $messageClass = $result ? "success" : "danger";
            } elseif ($_POST['action'] == 'update' && isset($_POST['id'])) {
                $result = $appointmentsHandler->updateAppointment($_POST['id'], $_POST);
                $message = $result ? "Cita actualizada exitosamente" : "Error al actualizar cita.";
                $messageClass = $result ? "success" : "danger";
            } elseif ($_POST['action'] == 'delete') {
                $result = $appointmentsHandler->deleteAppointment($_POST['id']);
                $message = $result ? "Cita   eliminada exitosamente" : "Error al eliminar cita.";
                $messageClass = $result ? "success" : "danger";
            }
        }
    }

    // Manejar edición de citas
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])) {
        $editing = true;
        $stmt = $pdo->prepare("SELECT * FROM citas WHERE id = :id");
        $stmt->execute([':id' => $_GET['id']]);
        $currentCita = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Obtener todas las citas
    $citas = $appointmentsHandler->getAllAppointments();
    ?>

    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3"><?php echo $editing ? "Editar cita" : "Agendar cita"; ?></span>
        </h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <?php if (!empty($message)): ?>
                        <div class="alert alert-<?php echo $messageClass; ?>">
                            <?php echo $message; ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST" novalidate="novalidate">
                        <input type="hidden" name="action" value="<?php echo $editing ? 'update' : 'create'; ?>">
                        <?php if ($editing): ?>
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($currentCita['id']); ?>">
                        <?php endif; ?>
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
                                required="required" value="<?php echo $editing ? htmlspecialchars($currentCita['nombre']) : ''; ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico"
                                required="required" value="<?php echo $editing ? htmlspecialchars($currentCita['correo']) : ''; ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Teléfono o número celular"
                                required="required" value="<?php echo $editing ? htmlspecialchars($currentCita['telefono']) : ''; ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <select class="custom-select" name="mechanic">
                                <option value="Mecanico 1" <?php echo $editing && $currentCita['mecanico'] == 'Mecanico 1' ? 'selected' : ''; ?>>Mecánico 1</option>
                                <option value="Mecanico 2" <?php echo $editing && $currentCita['mecanico'] == 'Mecanico 2' ? 'selected' : ''; ?>>Mecánico 2</option>
                                <option value="Mecanico 3" <?php echo $editing && $currentCita['mecanico'] == 'Mecanico 3' ? 'selected' : ''; ?>>Mecánico 3</option>
                                <option value="Mecanico 4" <?php echo $editing && $currentCita['mecanico'] == 'Mecanico 4' ? 'selected' : ''; ?>>Mecánico 4</option>
                            </select>
                        </div>
                        <br>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" name="message" placeholder="Observaciones y problema a resolver"
                                required="required"><?php echo $editing ? htmlspecialchars($currentCita['observaciones']) : ''; ?></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">
                                <?php echo $editing ? "Actualizar cita" : "Agendar cita"; ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">Información de citas</span>
        </h2>
        <div class="bg-light">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Mecánico</th>
                            <th>Fecha</th>
                            <th>Observaciones o problemas</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($citas as $cita): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($cita['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($cita['correo']); ?></td>
                                <td><?php echo htmlspecialchars($cita['telefono']); ?></td>
                                <td><?php echo htmlspecialchars($cita['mecanico']); ?></td>
                                <td><?php echo htmlspecialchars($cita['tiempo']); ?></td>
                                <td><?php echo htmlspecialchars($cita['observaciones']); ?></td>
                                <td>
                                    <a href="?action=edit&id=<?php echo $cita['id']; ?>" class="btn btn-warning">
                                        Editar <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $cita['id']; ?>" />
                                        <input type="hidden" name="action" value="delete" />
                                        <button type="submit" class="btn btn-danger">
                                            Eliminar <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Agendar End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Lujos La Pava</h5>
                <p class="text-secondary mb-2">
                    <i class="fa fa-map-marker-alt text-primary mr-3"></i>carrera 11
                    #748, Zarzal, Valle del Cauca, Colombia
                </p>
                <p class="text-secondary mb-2">
                    <i class="fa fa-envelope text-primary mr-3"></i>info@example.com
                </p>
                <p class="text-secondary mb-2">
                    <i class="fa fa-phone-alt text-primary mr-3"></i>++57 320 598 8335
                </p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Atajos</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="../index.php"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-secondary mb-2" href="../public/screens/ProductosyRepuestos.php"><i class="fa fa-angle-right mr-2"></i>Productos y
                                Repuestos</a>
                            <a class="text-secondary mb-2" href="../public/screens/Carrito.php"><i class="fa fa-angle-right mr-2"></i>Carrito de compra</a>

                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Agenda tu cita</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contactos</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Mi cuenta</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="../index.php"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-secondary mb-2" href="../public/screens/login.php"><i class="fa fa-angle-right mr-2"></i>Iniciar sesión</a>
                            <a class="text-secondary mb-2" href="../screens/Inscribirse.php"><i class="fa fa-angle-right mr-2"></i>Inscribirse</a>
                            <a class="text-secondary mb-2" href="../screens/servicosMacanicos.php"><i class="fa fa-angle-right mr-2"></i>Información de
                                servicios</a>
                            <a class="text-secondary mb-2" href="../screens/Informaciónmecanicos.php"><i class="fa fa-angle-right mr-2"></i>Información de
                                mecanicos</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">SÍGANOS</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="row border-top mx-xl-5 py-4"
            style="border-color: rgba(256, 256, 256, 0.1) !important">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Univalle</a>. Desarrollado
                    con fines educativos por estudiantes de
                    <a class="text-primary" href="#">Tecnologia en desarrollo de software</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid-univalle" src="img/uni.jpg" alt="" />
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
</body>

</html>