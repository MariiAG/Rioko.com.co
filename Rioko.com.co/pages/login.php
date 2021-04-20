<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Css/login.css">
    <title> &reg; Ryoko.com.co</title>
</head>
<body>
    <div class="body container white-text">
      <h2 class="center">Únete a nosotros</h2>
      <h6 class="center">Y comienza a recorrer el mundo a tu manera...</h6><br>
      <h3 class="center">Ryoko.com.co</h3>
      <div class="row container center transparent">
        <div id="rol-invited" class="rol col center">
          <i id="invited-icon" class="large material-icons">person_outline</i><br>
            <a id="invited" type="submit" href="" name="action">Invitado</a>
        </div>
        <div id="rol-amphitryon" class="rol col center right">
          <i id="amphitryon-icon" class="large material-icons">person</i><br>
            <a id="amphitryon" type="submit" href="" name="action">Anfitrión</a>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Nombre</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Apellido</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <input id="email" type="email" class="validate">
            <label for="email">E-mail</label>
          </div>
          <div class="input-field col s6">
            <input id="country" type="text" class="validate">
            <label for="country">Pais</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <input id="password" type="password" class="validate">
            <label for="password">Contraseña</label>
          </div>
          <div class="input-field col s6">
            <input id="passwordConfirm" type="text" class="validate">
            <label for="passwordConfirm">Confirmar Contraseña</label>
          </div>
      </div>
      <div class="center">
        <a id="login" class="btn waves-effect waves-light white" type="submit" href="index.html" name="action">Suscribirme ahora
          <i class="material-icons right">send</i>
        </a>
        <p>Pulsando el botón aceptas los términos de uso y <strong>política de privacidad.</strong> </p>
    </div>
    </div>
</body>
<div class="footer-copyright">
  <div class="foot left white-text">
  © 2021 RyoKo.com.co -  ¡ Viaja, sueña y diviertete !
  </div>
  <a class="foot right orange-text" class="grey-text text-lighten-4 right" href=""><i class="tiny material-icons">call</i> - - - Contactate con nosotros </a>
</div>
</html>