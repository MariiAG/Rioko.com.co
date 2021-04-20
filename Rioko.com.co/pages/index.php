<?php include_once("../static/layouts/header.php")?>
<?php include_once("../static/layouts/menu.php")?>

<div id="ventana-modal">
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
</div>

<div class="menu-reserve container black">
  <div class="row">
      <div class="input-field col s3">
        <input placeholder="¿Donde estas ubicado?" id="location" type="text" class="validate">
        <label for="location">Ubicación</label>
      </div>
      <div class="input-field col s3">
        <input id="arrival" type="text" class="datepicker">
        <label for="arrival">Llegada</label>
      </div>
      <div class="input-field col s3">
        <input id="departure" type="text" class="datepicker">
        <label for="departure">Salida</label>
      </div>
      <div class="input-field col s3">
        <input type="number" id="guests" value="0">
        <label for="guests">Huéspedes</label>
      </div>
  </div>
</div>
<?php include_once("../static/layouts/footer.php")?>
