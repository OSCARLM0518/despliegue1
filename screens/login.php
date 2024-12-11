<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de sesión</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      body {
        margin: 0;
        padding: 0;
        background-color: #000;
        font-family: sans-serif;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .login-box {
        width: 300px;
        padding: 20px;
        background: #000;
        color: #fff;
      }

      .login-box h1 {
        margin: 0 0 30px 0;
        padding: 0;
        text-align: left;
        font-size: 24px;
        color: #fff;
      }

      .form-group {
        margin-bottom: 25px;
      }

      .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #fff;
      }

      .form-group input {
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        color: #fff;
        font-size: 16px;
        padding: 5px 0;
        outline: none;
      }

      .form-group input::placeholder {
        color: rgba(255, 255, 255, 0.5);
      }

      .submit-btn {
        width: 100%;
        padding: 12px;
        background: #ffb800;
        border: none;
        border-radius: 25px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 20px;
      }

      .links {
        margin-top: 15px;
      }

      .links a {
        display: block;
        color: #ffb800;
        text-decoration: none;
        font-size: 14px;
        margin-top: 8px;
      }

      .links a:hover {
        text-decoration: underline;
      }

      .error-message {
        color: #ff4d4d;
        font-size: 14px;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <div class="login-box">
      <h1>Inicio de sesión</h1>
      <form id="login-form" method="POST" action="../php/login_usuario.php">
        <div class="form-group">
          <label>Nombre de usuario</label>
          <input
            type="text"
            id="username"
            name="user"
            placeholder="Ingrese nombre de usuario"
            required
          />
        </div>

        <div class="form-group">
          <label>Contraseña</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Ingrese contraseña"
            required
          />
        </div>

        <button type="submit" class="submit-btn">Iniciar sesión</button>

        <div class="links">
          <a href="Inscribirse.php">¿No tienes una cuenta? Regístrate</a>
          <a href='../index.php'> Entrar como invitado</a></p>
        </div>

        <div id="error-message" class="error-message"></div>
      </form>
    </div>
    </script>
  </body>
</html>
