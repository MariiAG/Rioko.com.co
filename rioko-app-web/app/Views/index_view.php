
<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/index.css">
<script src="<?php echo base_url();?>/public/assets/js/ValidateSearchDestination.js"></script>
<br><br>
<!-- <div>
  <table class="menu-reserve-top striped">
    <tr>
        <td class="center orange darken-4">
          <i class="small icon-menu-reserve material-icons">hotel</i>
        </td>
        <td class="center">
          <i class="small icon-menu-reserve material-icons">location_on</i>
        </td>
        <td class="center">
          <i class="small icon-menu-reserve material-icons">location_off</i>
        </td>
        <td class="center">
          
        </td>
    </tr>
    <tr class="orange darken-2">
        <td class="center orange darken-4">
          <span id="lb-location" >D E S T I N O</span>
        </td>
        <td class="center">
          <span id="lb-arrival" >L L E G A D A</span>
        </td>
        <td class="center">
          <span id="lb-departure" >S A L I D A</span>
        </td>
        <td class="center">
          <span id="lb-guests" >V I A J E  R O S</span>
        </td>
    </tr>
<form action="POST" action="/public/search">
    <tr class="orange darken-3">
        <td class="td-in-menu-reserve orange darken-4">
          <input id="location" type="text" name="location">
        </td>
        <td class="td-in-menu-reserve">
          <input id="arrival" type="date" name="arrival">
        </td>
        <td class="td-in-menu-reserve">
          <input id="departure" type="date" name="departure">
        </td>
        <td class="td-in-menu-reserve">
        <input id="guests" type="number" name="guests">
        </td>
    </tr>
  </table>
  <br>
  <div class="center">
    <a id="search" class="waves-effect waves-orange btn-small orange darken-4" type="submit" onclick="validateSearchDestination();">
    <i class="tiny material-icons right">search</i>C o n s u l t a r
    </a>
  </div>
</form>
  <br>
</div> -->

<!-- <form action="POST" action="<?php echo base_url();?>/public/search">
  <div class="input-field col s6">
    <i class="material-icons prefix">room</i>
    <input id="location" type="text" class="validate" name="location">
    <label for="location">Ciudad</label>
  </div>
  <div class="center">
  <button class="btn waves-effect waves-light" type="submit">post</button>  
  </div>
</form> -->

<div class="row container">
    <div class="search-container input-field col s6">
        <form method="POST" action="<?php echo base_url();?>/public/search">
          <div class="container-search container center">
            <h5 id="title-search">¿Listo para viajar?</h5>
            <div class="input-container">
              <i class="icon-search small icon-menu-reserve material-icons">hotel</i>
              <input class="input-field" type="text" placeholder="Destino" name="location">
            </div>
            <div class="input-container">
              <i class="icon-search small icon-menu-reserve material-icons">location_on</i>
              <input class="input-field" type="date" placeholder="Llegada" name="arrival">
            </div>
            <div class="input-container">
              <i class="icon-search small icon-menu-reserve material-icons">location_off</i>
              <input class="input-field" type="date" placeholder="Salida" name="departure">
            </div>
            <div class="input-container">
              <i class="icon-search small icon-menu-reserve material-icons">people</i>
              <input class="input-field" type="number" placeholder="Viajeros" name="guests">
            </div><br>
            <button type="submit" class="btn-search"><i class="tiny material-icons right">search</i>Buscar</button>
          </div>
        </form>
    </div>
    <div class="input-field col s6">
      <div class="container-search container center">
        <div class="center"><i id="icon-sun" class="large icon-menu-reserve material-icons">wb_sunny</i>
        <h6>PERFECTO PARA IR DE VACACIONES</h6>
        <h4>¡Descuentos!</h4></div>
        <h5 style="text-align: justify;">¡Asi es! En esta temporada te damos descuento del 15% si arriendas más de 5 días cualquiera de nuestros apartamentos ubicados en zonas costeras.</h5><br>
        <a href="">Se aplican terminos y condiciones</a href="">
      </div>
    </div>
</div>



<div class="menu-reserve">
<div class="card-panel amber darken-2 white-text"><i class="tiny material-icons">grade</i> Destacados</div>
  <div class='row'>
      <?php 
        if ($ap == "" || $ap == null) {
          echo "<h1>No hay resultados</h1>";
        }else{
          foreach($ap as $apartment)
          {
            echo "<div class='col m4 s12'>
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
                          <a id='btn-reservation' class='btn waves-effect waves-light blue center'>Reservar x {$apartment->price}
                          <i class='material-icons left'>room_service</i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>";
          }
        }
      ?>
  </div>
</div>

