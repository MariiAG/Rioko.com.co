<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/available.css">
<script src="<?php echo base_url();?>/public/assets/js/LoginSession.js"></script>

<body>
    <div class="body container white-text">
      <div class="left">
        <a id="btn-cancel" class="btn waves-effect waves-light red" onclick="returnLogin();">Regresar al menu principal
          <i class="material-icons left">arrow_back</i>
        </a>
      </div><br><br><br>
    <div class='row'>
      <?php 
        if ($av == "" || $av == null) {
          echo "<h1>No hay resultados</h1>";
        }else{
          foreach($av as $apartment)
          {
            $routeBooking = base_url()."/public/invited/booking?idApartment={$apartment->id_apartment}&idAmphitryon={$apartment->id_amphitryon}&arrival={$arrival}&departure={$departure}";
            echo "<div class='col m5 s12'>
                    <div class='card'>
                      <div class='card-image'>
                        <img id='picture' src='{$apartment->picture}'>
                      </div>
                      <div class='card-content'>
                        <ul id='list'>
                          <li><span class='span-info-cards'>CIUDAD: </span>{$apartment->city}</li>
                          <li><span class='span-info-cards'>PAÍS: </span>{$apartment->country}</li>
                          <li><span class='span-info-cards'>DIRECCIÓN: </span><a class='amber-text'' href='{$apartment->googleMaps}' target='_blank'>{$apartment->address}</a></li>                          
                          <li><span class='span-info-cards'>RESEÑA: </span>{$apartment->review_apartment}</li>
                          <li><span class='span-info-cards'>HABITACIONES: </span>{$apartment->bedrooms}</li>
                          <li><span class='span-info-cards'>PRECIO X NOCHE:</span> $ {$apartment->price}</li>
                        </ul>
                      </div>
                      <div class='card-action'>
                        <div class='card-content white-text center'>
                          <a id='btn-reservation' class='btn waves-effect waves-light blue center' href='{$routeBooking}' onclick='booking();'>Reservar x {$apartment->price}
                          <i class='material-icons left'>room_service</i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>";
              }
            }
          ?>
      </div><br><br><br>
    </div>
</body>