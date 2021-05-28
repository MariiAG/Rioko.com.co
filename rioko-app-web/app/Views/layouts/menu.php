<body>
  <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="<?php echo base_url();?>/public/assets/js/LoginSession.js"></script>
  <script src="<?php echo base_url();?>/public/assets/js/menu.js"></script>

  <div class="nav-menu" id="menu">
    <a class="active"><img class="logo" src="<?php echo base_url();?>/public/assets/img/logo2.gif"> RyoKo.com.co</a>
    <a href="home">Principal</a>
    <a href="covid">Protocolos Covid-19</a>
    <a href="login">Unirme a Rioko</a>
    <a href="contact">Contacto</a>
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
    <a href="javascript:void(0);" class="icon" onclick="responsiveMenu()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
        
  <div class="session-container">
    <div class="session session-close">
        <div class="right"><button id="session-cancel" class="session-btn btn waves-effect waves-light btn-block" type="submit" name="action" onclick="closeModal();">X</button></div>
      <div>
        <h4 id="session-title">¡ BIENVENIDO !</h4>
        <p id="session-p">Inicia sesión y no te pierdas ninguna de nuestras novedades, ofertas...</p>
        <form method="POST" action="<?php echo base_url();?>/public/sign-in">
          <div class="row container">
              <div class="input-field col s12">
                <input id="session-user" type="email" class="validate" name="emailUser">
                <label id="lb" class="session-label white-text" for="session-user">Usuario</label>
              </div>
              <div class="input-field col s12">
                <input id="session-password" type="password" class="validate" name="passwordUser">
                <label class="session-label white-text" for="session-password">Contraseña</label>
              </div>
          </div>
            <button class="session-btn btn waves-effect waves-light center" type="submit" id="session-login">Ingresar
              <i class="material-icons right">send</i>
            </button>
        </form>
      </div>
      <p id="session-p2">¡ Que comience el viaje! &reg; <strong>Rioko.com.co</strong></p>
    </div>
  </div>
