
<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/index.css">
<script src="<?php echo base_url();?>/public/assets/js/ValidateSearchDestination.js"></script>

<div><br><br>
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
          <i class="small icon-menu-reserve material-icons">people</i>
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
    <tr class="orange darken-3">
        <td class="td-in-menu-reserve orange darken-4">
          <input id="location" type="text" class="validate">
        </td>
        <td class="td-in-menu-reserve">
          <input id="arrival" type="date">
        </td>
        <td class="td-in-menu-reserve">
          <input id="departure" type="date">
        </td>
        <td class="td-in-menu-reserve">
        <input id="guests" type="number">
        </td>
    </tr>
  </table>
  <br>
  <div class="center">
    <a id="search" class="waves-effect waves-orange btn-small orange darken-4" onclick="validateSearchDestination();"><i class="tiny material-icons right">search</i>C o n s u l t a r</a>
  </div>
  <br>
</div>

<div class="menu-reserve">
<div class="card-panel blue darken-4 white-text"><i class="tiny material-icons">grade</i> Destacados</div>
  <div class='row'>
      <?php 
      foreach($ap as $apartment)
      {
        echo "<div class='col s4'>
                <div class='card'>
                  <div class='card-image'>
                  <img id='travel' src='WebAlquiler/rioko-app-web/public/assets/img/glampling-pareja.jpg' alt=''>
                  </div>
                  <div class='card-content'>
                    <ul>
                      <li><span class='span-info-cards'>CIUDAD: </span>{$apartment->city}</li>
                      <li><span class='span-info-cards'>PAÍS: </span>{$apartment->country}</li>
                      <li><span class='span-info-cards'>DIRECCIÓN: </span><a class='amber-text'' href='{$apartment->googleMaps}'>{$apartment->address}</a></li>                          
                      <li><span class='span-info-cards'>RESEÑA: </span>{$apartment->review_apartment}</li>
                      <li><span class='span-info-cards'>PRECIO X NOCHE:</span> $ {$apartment->price}</li>
                    </ul>
                    <div class='card-content white-text center'>
                      <a id='btn-reservation' class='btn waves-effect waves-light blue center' type='submit' name='action' onclick='cancelCreateUser();'>Reservar x {$apartment->price}
                      <i class='material-icons left'>border_color</i>
                      </a>
                  </div>
                  </div>
                </div>
              </div>";
      }
      ?>
  </div>
</div>
<br><br>
