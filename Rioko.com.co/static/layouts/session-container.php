<link rel="stylesheet" href="../static/css/index.css">
<div class="session-container">
  <div class="session session-close">
    <div class="right"><button id="session-cancel" class="session-btn btn waves-effect waves-light btn-block" type="submit" name="action" onclick="closeModal();">X</button></div>
    <div>
      <h4 id="session-title">¡ BIENVENIDO !</h4>
      <p id="session-p">Inicia sesión y no te pierdas ninguna de nuestras novedades, ofertas...</p>
      <div class="row">
          <div class="input-field col s12">
            <input id="session-user" type="email" class="validate">
            <label class="session-label white-text" for="session-user">Usuario</label>
          </div>
          <div class="input-field col s12">
            <input id="session-password" type="text" class="validate">
            <label class="session-label white-text" for="session-password">Contraseña</label>
          </div>
      </div>
    </div>
    <button class="session-btn btn waves-effect waves-light center" type="submit" name="action" id="session-login">Ingresar
      <i class="material-icons right">send</i>
    </button>
    <p id="session-p2">¡ Que comience el viaje! &reg; <strong>Rioko.com.co</strong></p>
  </div>
</div>