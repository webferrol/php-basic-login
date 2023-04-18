<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceso</title>
  <link rel="stylesheet" href="assets/login.min.css">
  <style>
    .login {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #loginform {
      max-width: 340px;
    }
    #wp-submit {
      padding: .3rem .5rem;
    }
  </style>
</head>

<body class="login">

  <form name="loginform" id="loginform" method="post">
    <p>
      <label for="user_login">Nombre de usuario o correo electrónico</label>
      <input type="text" name="log" id="user_login" aria-describedby="login-message" class="input" value="" size="20" autocapitalize="off" autocomplete="username" />
    </p>

    <div class="user-pass-wrap">
      <label for="user_pass">Contraseña</label>
      <div class="wp-pwd">
        <input type="password" name="pwd" id="user_pass" aria-describedby="login-message" class="input password-input" value="" size="20" autocomplete="current-password" spellcheck="false" />
        <button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Mostrar la contraseña">
          <span class="dashicons dashicons-visibility" aria-hidden="true"></span>
        </button>
      </div>
    </div>
    <p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <label for="rememberme">Recuérdame</label></p>
    <p class="submit">
      <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Acceder" />      
     
    </p>
  </form>
</body>

</html>