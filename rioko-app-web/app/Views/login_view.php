
<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/login.css">
<script src="<?php echo base_url();?>/public/assets/js/ValidateCreateUser.js"></script>

<body>
  <form method="POST" action="<?php echo base_url();?>/public/add-user">
    <div class="body container white-text">
      <h2 class="center">Únete a nosotros</h2>
      <h6 class="center">Y comienza a recorrer el mundo a tu manera...</h6><br>
      <h3 class="center">Ryoko.com.co</h3>
      <div class="row container center transparent">
        <div id="rol-invited" class="rol col center" onclick="rolSelected('invited')">
          <i id="invited-icon" class="large material-icons">person_outline</i><br>
          <a id="invited">Invitado</a>
          <input id="typeInvited" type="hidden" name="type">
        </div>
        <div id="rol-amphitryon" class="rol col center right" onclick="rolSelected('amphitryon')">
          <i id="amphitryon-icon" class="large material-icons">person</i><br>
            <a id="amphitryon">Anfitrión</a>
            <input id="typeAmphitryon" type="hidden" name="type">
        </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate" name="name">
            <label for="first_name">Nombre</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" name="lastname">
            <label for="last_name">Apellido</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <input id="email" type="email" class="validate" name="email">
            <label for="email">E-mail</label>
          </div>
          <div class="input-field col s6">
            <input id="country" type="text" class="validate" name="country">
            <label for="country">Pais</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <input id="password" type="password" class="validate">
            <label for="password">Contraseña</label>
          </div>
          <div class="input-field col s6">
            <input id="passwordConfirm" type="password" class="validate" name="password">
            <label for="passwordConfirm">Confirmar Contraseña</label>
          </div>
      </div><br>
      <div class="center">
        <a id="btn-cancel" class="btn waves-effect waves-light red" type="submit" name="action" onclick="cancelCreateUser();">cancelar
          <i class="material-icons right">sentiment_dissatisfied</i>
        </a>
        <a id="btn-login" class="btn waves-effect waves-light white" type="submit" name="action" onclick="validateCreateUser();">Suscribirme ahora
          <i class="material-icons right">sentiment_very_satisfied</i>
        </a>
        <button class="btn waves-effect waves-light" type="submit" onclick="validateCreateUser();">post</button>
        <p>Pulsando el botón aceptas los términos de uso y <strong>política de privacidad.</strong></p>
      </div>
    </div>
  </form>
</body>

