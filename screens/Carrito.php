<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Lujos La Pava - Carrito</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet" />

  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/styleCarrito.css" rel="stylesheet" />
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
      <div class="col-lg-6 d-none d-lg-block">
        <div class="d-inline-flex align-items-center h-100">
          <a class="text-body mr-3" href="contacto.php">Contacto</a>
          <a class="text-body mr-3" href="ayuda.php">Ayuda</a>
          <a class="text-body mr-3" href="Preguntas.php">Preguntas Frecuentes</a>
        </div>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
              Mi cuenta
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <button class="dropdown-item" type="button">
                <a href="login.php">Iniciar sesión</a>
              </button>
              <button class="dropdown-item" type="button">
                <a href="Inscribirse.php">Inscribirse</a>
              </button>
              <button class="dropdown-item" type="button">
                <a class="text-body mr-3" href="../php/perfil_usuario.php">Cuenta</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
      <div class="col-lg-3 d-none d-lg-block">
        <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px">
          <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categorías</h6>
          <i class="fa fa-angle-down text-dark"></i>
        </a>
        <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999">
          <div class="navbar-nav w-100">
            <a href="servicosMacanicos.php" class="nav-item nav-link">Servicios mecánicos</a>
            <a href="ProductosyRepuestos.php" class="nav-item nav-link">Productos y repuestos</a>
            <a href="Informaciónmecanicos.php" class="nav-item nav-link">Información de mecánicos</a>
            <a href="Consejos.php" class="nav-item nav-link">Consejos</a>
            <a href="trabajosRealizados.php" class="nav-item nav-link">Trabajos realizados</a>
          </div>
        </nav>
      </div>
      <div class="col-lg-9">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
          <a href="../index.php" class="text-decoration-none d-block d-lg-none">
            <span class="h1 text-uppercase text-dark bg-light px-2">Lujos</span>
            <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">La Pava</span>
          </a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
              <a href="../index.php" class="nav-item nav-link">Inicio</a>
              <a href="ProductosyRepuestos.php" class="nav-item nav-link">Productos y repuestos</a>
              <a href="AgendarCitas.php" class="nav-item nav-link">Agenda tu cita</a>
              <a href="contacto.php" class="nav-item nav-link">Contactos</a>
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
          <a class="breadcrumb-item text-dark" href="../index.php">Inicio</a>
          <span class="breadcrumb-item active">Carrito de compra</span>
        </nav>
      </div>
    </div>
  </div>
  <!-- Breadcrumb End -->

  <!-- Cart Start -->
  <div class="container-fluid">
    <div class="row px-xl-5">
      <div class="col-lg-8 table-responsive mb-5">
        <table class="table table-light table-borderless table-hover text-center mb-0">
          <thead class="thead-dark">
            <tr>
              <th>Productos</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Total</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody class="align-middle">
            <!-- Producto 1 -->
            <tr>
              <td class="align-middle">
                <img src="img/product-1.jpg" alt="" style="width: 50px" />
                Filtro de Aceite
              </td>
              <td class="align-middle">$25000</td>
              <td class="align-middle">
                <div class="input-group quantity mx-auto" style="width: 100px">
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-primary btn-minus">
                      <i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1" />
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-primary btn-plus">
                      <i class="fa fa-plus"></i>
                    </button>
                  </div>
                </div>
              </td>
              <td class="align-middle">$25000</td>
              <td class="align-middle">
                <button class="btn btn-sm btn-danger">
                  <i class="fa fa-times"></i>
                </button>
              </td>
            </tr>
            <!-- Producto 2 -->
            <tr>
              <td class="align-middle">
                <img src="img/product-2.jpg" alt="" style="width: 50px" />
                Pastillas de Freno
              </td>
              <td class="align-middle">$45000</td>
              <td class="align-middle">
                <div class="input-group quantity mx-auto" style="width: 100px">
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-primary btn-minus">
                      <i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1" />
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-primary btn-plus">
                      <i class="fa fa-plus"></i>
                    </button>
                  </div>
                </div>
              </td>
              <td class="align-middle">$45000</td>
              <td class="align-middle">
                <button class="btn btn-sm btn-danger">
                  <i class="fa fa-times"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-4">
        <h5 class="section-title position-relative text-uppercase mb-3">
          <span class="bg-secondary pr-3">RESUMEN DE LA COMPRA</span>
        </h5>
        <div class="bg-light p-30 mb-5">
          <div class="border-bottom pb-2">
            <div class="d-flex justify-content-between mb-3">
              <h6>Total parcial</h6>
              <h6>$70000</h6>
            </div>
            <div class="d-flex justify-content-between">
              <h6 class="font-weight-medium">Envío</h6>
              <h6 class="font-weight-medium">$8000</h6>
            </div>
          </div>
          <div class="pt-2">
            <div class="d-flex justify-content-between mt-2">
              <h5>Total</h5>
              <h5>$78000</h5>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Cart End -->

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
              <a class="text-secondary mb-2" href="../screens/ProductosyRepuestos.php"><i class="fa fa-angle-right mr-2"></i>Productos y
                Repuestos</a>
              <a class="text-secondary mb-2" href="../screens/Carrito.php"><i class="fa fa-angle-right mr-2"></i>Carrito de compra</a>

              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Agenda tu cita</a>
              <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contactos</a>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <h5 class="text-secondary text-uppercase mb-4">Mi cuenta</h5>
            <div class="d-flex flex-column justify-content-start">
              <a class="text-secondary mb-2" href="../index.php"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
              <a class="text-secondary mb-2" href="../screens/login.php"><i class="fa fa-angle-right mr-2"></i>Iniciar sesión</a>
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