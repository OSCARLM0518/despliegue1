<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lujos LaPava - Registro</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      body {
        background: #000;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .container {
        background: #000;
        padding: 2rem;
        border-radius: 10px;
        width: 100%;
        max-width: 400px;
        color: white;
      }

      .form-content {
        text-align: center;
      }

      h1 {
        font-size: 28px;
        margin-bottom: 30px;
        font-weight: 500;
      }

      .input-field {
        background: rgba(255, 255, 255, 0.1);
        margin-bottom: 15px;
        border-radius: 10px;
        padding: 15px;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
      }

      .input-field:hover {
        background: rgba(255, 255, 255, 0.15);
      }

      .input-field i {
        color: #FFD700;
        margin-right: 10px;
        width: 20px;
      }

      .input-field input {
        background: transparent;
        border: none;
        outline: none;
        color: white;
        width: 100%;
        font-size: 16px;
      }

      .input-field input::placeholder {
        color: #aaa;
      }

      .btn-field {
        display: flex;
        gap: 15px;
        margin: 30px 0;
      }

      .btn-field button {
        flex: 1;
        padding: 12px 0;
        border: none;
        border-radius: 25px;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      #signUp {
        background: #FFD700;
        color: black;
        font-weight: 500;
      }

      #signIn {
        background: #e0e0e0;
        color: black;
      }

      #signUp:hover {
        background: #FFC000;
      }

      #signIn:hover {
        background: #d0d0d0;
      }

      .disable {
        opacity: 0.7;
      }

      p {
        color: #aaa;
        font-size: 14px;
      }

      a {
        color: #FFD700;
        text-decoration: none;
        font-weight: 500;
      }

      a:hover {
        text-decoration: underline;
      }

      .error-message {
        color: #ff4444;
        font-size: 12px;
        margin-top: -10px;
        margin-bottom: 10px;
        text-align: left;
        padding-left: 15px;
        display: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="form-content">
        <h1>Inscribirse</h1>
        <form id="register-form" method="POST" action="../php/registro_usuario.php">
          <div class="input-group">
            <div class="input-field">
              <i class="fa-solid fa-user"></i>
              <input 
                type="text" 
                placeholder="Nombre" 
                id="user" 
                name="user" 
                required 
              />
            </div>
            <div id="user-error" class="error-message">

            </div>

            <div class="input-field">
              <i class="fa-solid fa-envelope"></i>
              <input 
                type="email" 
                placeholder="Correo" 
                id="email" 
                name="email" 
                required 
              />
            </div>
            <div id="email-error" class="error-message">
              Por favor ingrese un correo válido
            </div>

            <div class="input-field">
              <i class="fa-solid fa-lock"></i>
              <input 
                type="password" 
                placeholder="Contraseña" 
                id="password" 
                name="password" 
                required 
              />
            </div>
            <div id="password-error" class="error-message">
              La contraseña debe tener al menos 6 caracteres
            </div>
          </div>

          <div class="btn-field">
            <button type="submit" id="signUp">Inscribirse</button>
            <button type="button" id="signIn" onclick="window.location.href='/'">
              Iniciar
            </button>
          </div>
        </form>
        <p>¿Ya estás registrado? - <a href="login.php">Iniciar sesión</a></p>
      </div>
    </div>
    </script>
  </body>
</html>