
<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/addApartment.css">
<script src="<?php echo base_url();?>/public/assets/js/FunctionsApartmentAmphitryion.js"></script>

<body>
  <form method="POST" action="<?php echo base_url();?>/public/amphitryon/change-Apartment?id=<?php echo $upApartment->id_apartment;?>" enctype="multipart/form-data">
    <div class="body container white-text">
      <h2 class="center">Actualizar Apartamento</h2>
      <!-- <input id="id_user" type="hidden" name="id_user" value=""> -->

      <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">room</i>
            <input id="city" type="text" class="validate" name="city" value="<?php echo $upApartment->city;?>">
            <label for="city">Ciudad</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">public</i>
            <input id="country" type="text" class="validate" name="country" value="<?php echo $upApartment->country;?>">
            <label for="country">Pais</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">location_city</i>
            <input id="address" type="text" class="validate" name="address" value="<?php echo $upApartment->address;?>">
            <label for="address">Direccion</label>
          </div>
          <div class="file-field input-field col s6">
            <i class="material-icons prefix">publish</i>
            <input id="google-maps" type="text" class="validate" name="googleMaps" value="<?php echo $upApartment->googleMaps;?>">
            <label for="google-maps">Link Google Maps</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <div class="file-field input-field">
                  <div class="btn btn-img">
                    <span><i class="material-icons">photo_size_select_actual</i></span>
                    <input type="file" name="picture" value="<?php echo $upApartment->picture;?>">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" placeholder="Imagen Destacada" type="text" value="<?php echo $upApartment->picture;?>">
                  </div>
            </div>
          </div>
          <div class="file-field input-field col s6">
            <div class="file-field input-field">
                  <div class="btn btn-img">
                    <span><i class="material-icons">photo_album</i></span>
                    <input type="file" name="collage" value="<?php echo $upApartment->collage;?>">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" placeholder="Imagen Adicional" type="text" value="<?php echo $upApartment->collage;?>">
                  </div>
            </div>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">attach_money</i>
            <input id="price" type="text" class="validate" name="price" value="<?php echo $upApartment->price;?>">
            <label for="price">Precio por noche</label>
          </div>
          <div class="file-field input-field col s6">
            <i class="material-icons prefix">rate_review</i>
            <input id="review-apartment" type="text" class="validate" name="reviewApartment" value="<?php echo $upApartment->review_apartment;?>">
            <label for="review-apartment">Reseña del apartamento</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">airline_seat_individual_suite</i>
            <input id="bedrooms" type="text" class="validate" name="bedrooms" value="<?php echo $upApartment->bedrooms;?>">
            <label for="bedrooms">Habitaciones</label>
          </div>
          <div class="file-field input-field col s6">

          </div>
      </div>
      <div class="center">
        <a id="btn-cancel" class="btn waves-effect waves-light red" onclick="cancelCreateApartment();">cancelar
          <i class="material-icons right">sentiment_dissatisfied</i>
        </a>
        <button id="btn-login" class="btn waves-effect waves-light white" type="submit">Guardar
          <i class="material-icons right">sentiment_very_satisfied</i>
        </button>
        <!-- <button class="btn waves-effect waves-light" type="submit">post</button> -->
      </div><br>
    </div>
  </form>
</body>