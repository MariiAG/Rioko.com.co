
<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/addApartment.css">
<script src="<?php echo base_url();?>/public/assets/js/FunctionsApartmentAmphitryion.js"></script>

<body>
  <form method="POST" action="<?php echo base_url();?>/public/amphitryon/change-Apartment?id=<?php echo $upApartment->id_apartment;?>">
    <div class="body container white-text">
      <h2 class="center">Actualizar Apartamento</h2>
      <!-- <input id="id_user" type="hidden" name="id_user" value=""> -->

      <div class="row">
          <div class="input-field col s6">
            <input id="city" type="text" class="validate" name="city" value="<?php echo $upApartment->city;?>">
            <label for="city">Ciudad</label>
          </div>
          <div class="input-field col s6">
            <input id="country" type="text" class="validate" name="country" value="<?php echo $upApartment->country;?>">
            <label for="country">Pais</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
          <input id="address" type="text" class="validate" name="address" value="<?php echo $upApartment->address;?>">
            <label for="address">Direccion</label>
          </div>
          <div class="file-field input-field col s6">
            <input id="google-maps" type="text" class="validate" name="googleMaps" value="<?php echo $upApartment->googleMaps;?>">
            <label for="google-maps">Link Google Maps</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
          <input id="picture" type="text" class="validate" name="picture" value="<?php echo $upApartment->picture;?>">
            <label for="picture">Imagen Destacada</label>
          </div>
          <div class="file-field input-field col s6">
            <input id="collage" type="text" class="validate" name="collage" value="<?php echo $upApartment->collage;?>">
            <label for="collage">Imagenes Adicionales</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
          <input id="price" type="text" class="validate" name="price" value="<?php echo $upApartment->price;?>">
            <label for="price">Precio por noche</label>
          </div>
          <div class="file-field input-field col s6">
            <input id="review-apartment" type="text" class="validate" name="reviewApartment" value="<?php echo $upApartment->review_apartment;?>">
            <label for="review-apartment">Reseña del apartamento</label>
          </div>
      </div>
      <div class="center">
        <a id="btn-cancel" class="btn waves-effect waves-light red">cancelar
          <i class="material-icons right">sentiment_dissatisfied</i>
        </a>
        <a id="btn-login" class="btn waves-effect waves-light white">Guardar
          <i class="material-icons right">sentiment_very_satisfied</i>
        </a>
        <button class="btn waves-effect waves-light" type="submit">post</button>
      </div><br>
    </div>
  </form>
</body>