
<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/addApartment.css">
<script src="<?php echo base_url();?>/public/assets/js/FunctionsApartmentAmphitryion.js"></script>

<body>
  <form method="POST" action="<?php echo base_url();?>/public/amphitryon/add-Apartment">
    <div class="body container white-text">
      <h2 class="center">Agregar Nuevo Apartamento</h2>
      <h6 class="center">Aqui comienza la magia...</h6><br>
      <input id="id_user" type="hidden" name="id_user" value="20">

      <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">room</i>
            <input id="city" type="text" class="validate" name="city">
            <label for="city">Ciudad</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">public</i>
            <input id="country" type="text" class="validate" name="country">
            <label for="country">Pais</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">location_city</i>
            <input id="address" type="text" class="validate" name="address">
            <label for="address">Direccion</label>
          </div>
          <div class="file-field input-field col s6">
            <i class="material-icons prefix">publish</i>
            <input id="google-maps" type="text" class="validate" name="googleMaps">
            <label for="google-maps">Link Google Maps</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">photo_size_select_actual</i>
            <input id="picture" type="text" class="validate" name="picture">
            <label for="picture">Imagen Destacada</label>
          </div>
          <div class="file-field input-field col s6">
            <i class="material-icons prefix">photo_album</i>
            <input id="collage" type="text" class="validate" name="collage">
            <label for="collage">Imagenes Adicionales</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">attach_money</i>
            <input id="price" type="text" class="validate" name="price">
            <label for="price">Precio por noche</label>
          </div>
          <div class="file-field input-field col s6">
            <i class="material-icons prefix">rate_review</i>
            <input id="review-apartment" type="text" class="validate" name="reviewApartment">
            <label for="review-apartment">Reseña del apartamento</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">airline_seat_individual_suite</i>
            <input id="bedrooms" type="text" class="validate" name="bedrooms">
            <label for="bedrooms">Habitaciones</label>
          </div>
          <div class="file-field input-field col s6">

          </div>
      </div>
      <div class="center">
        <a id="btn-cancel" class="btn waves-effect waves-light red" type="submit" name="action" onclick="cancelCreateApartment();">cancelar
          <i class="material-icons right">sentiment_dissatisfied</i>
        </a>
        <a id="btn-login" class="btn waves-effect waves-light white" type="submit" name="action" onclick="validateCreateApartment();">Guardar
          <i class="material-icons right">sentiment_very_satisfied</i>
        </a>
        <button class="btn waves-effect waves-light" type="submit" onclick="validateCreateApartment();">post</button>
        <p>Pulsando el botón aceptas los términos de uso y <strong>política de privacidad.</strong></p>
      </div>
    </div>
  </form>
</body>