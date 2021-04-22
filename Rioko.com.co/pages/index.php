<?php include_once("../static/layouts/header.php")?>
<?php include_once("../static/layouts/menu.php")?>

<br><br>
<div class="menu-reserve container">
  <h4 class="center white-text">¿A donde viajaremos?</h4>
  <div class="row">
      <div class="input-field col s3">
        <input id="location" type="text" class="validate">
        <label for="location" class="white-text">Ubicación</label>
      </div>
      <div class="input-field col s3">
        <input type="text" class="datepicker">
        <label for="arrival" class="white-text" onclick="datapicker();">Llegada</label>
      </div>
      <div class="input-field col s3">
        <input id="departure" type="text" class="datepicker">
        <label for="departure" class="white-text">Salida</label>
      </div>
      <div class="input-field col s3">
        <input type="number" id="guests" value="0">
        <label for="guests" class="white-text">Huéspedes</label>
      </div>
  </div>
  <h5 class="white-text">Destacados</h5>
  <table>
    <tr>
        <td>
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                <img id="travel" src="../static/img/glampling-pareja.jpg" alt="">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
          </div>
        </td>
        <td>
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                <img id="travel" src="../static/img/glampling-pareja.jpg" alt="">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
          </div>
        </td>
        <td>
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                <img id="travel" src="../static/img/glampling-pareja.jpg" alt="">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
          </div>
        </td>
    </tr>
    <tr>
        <td>
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                <img id="travel" src="../static/img/glampling-pareja.jpg" alt="">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
          </div>
        </td>
        <td>
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                <img id="travel" src="../static/img/glampling-pareja.jpg" alt="">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
          </div>
        </td>
        <td>
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                <img id="travel" src="../static/img/glampling-pareja.jpg" alt="">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="tiny material-icons">save</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
          </div>
        </td>
    </tr>
  </table>

</div>

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
<br><br>
<?php include_once("../static/layouts/footer.php")?>
