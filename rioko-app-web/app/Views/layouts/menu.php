<body>
  <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/index.css">
  <script src="<?php echo base_url();?>/public/assets/js/LoginSession.js"></script>
    <div id="body">
        <div id="menu">
            <div id="first" class="col s12 center"></div>
            <nav>
                <div class="nav-wrapper">
                    <img id="logo" src="<?php echo base_url();?>/public/assets/img/logo2.gif">
                    <a href="home" class="brand-logo">RyoKo.com.co</a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a id="home" class="li-menu" href="home">Principal</a></li>
                    <li><a class="li-menu" href="covid">Protocolos COVID-19</a></li>
                    <li><a class="li-menu" href="login">Unirme a Rioko</a></li>
                    <li><a class="li-menu" href="contact">Contacto</a></li>
                    <li>
                      <a id="menu-session" onclick="<?php 
                      if ($name == "") {
                        echo "openModal();";
                      }else{
                        if ($type == "invitado") {
                          echo "invited();";
                        }else{
                          echo "amphitryon();";
                        }
                      }
                        ?>">
                      <?php 
                        if($name != ""){
                          echo $name." ". $lastname;

                        }else{
                          echo 'Iniciar Sesión';
                        };
                      ?>
                      <i class="material-icons right">account_circle</i>
                      </a>
                    </li> 
                  </ul>
                </div>
            </nav>
        </div>
        
  <div class="session-container">
    <div class="session session-close">
      <div class="right"><button id="session-cancel" class="session-btn btn waves-effect waves-light btn-block" type="submit" name="action" onclick="closeModal();">X</button></div>
      <div>
        <h4 id="session-title">¡ BIENVENIDO !</h4>
        <p id="session-p">Inicia sesión y no te pierdas ninguna de nuestras novedades, ofertas...</p>
      <form method="POST" action="<?php echo base_url();?>/public/sign-in">
            <div class="row">
                <div class="input-field col s12">
                  <input id="session-user" type="email" class="validate" name="emailUser">
                  <label class="session-label white-text" for="session-user">Usuario</label>
                </div>
                <div class="input-field col s12">
                  <input id="session-password" type="password" class="validate" name="passwordUser">
                  <label class="session-label white-text" for="session-password">Contraseña</label>
                </div>
            </div>
          </div>
          <button class="session-btn btn waves-effect waves-light center" type="submit" id="session-login">Ingresar
            <i class="material-icons right">send</i>
          </button>
      </form>
      <p id="session-p2">¡ Que comience el viaje! &reg; <strong>Rioko.com.co</strong></p>
    </div>
  </div>
