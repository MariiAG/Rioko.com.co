<?php include_once("../static/layouts/header.php")?>
<link rel="stylesheet" href="../static/css/login.css">
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
        <a id="cancel" class="btn waves-effect waves-light red" type="submit" href="index.php" name="action">cancelar
          <i class="material-icons right">sentiment_dissatisfied</i>
        </a>
        <a id="login" class="btn waves-effect waves-light white" type="submit" href="index.php" name="action">Suscribirme ahora
          <i class="material-icons right">sentiment_very_satisfied</i>
        </a>
        <p>Pulsando el botón aceptas los términos de uso y <strong>política de privacidad.</strong> </p>
    </div>
    </div>
</body>
  <?php include_once("../static/layouts/footer-simple.php")?>
</html>