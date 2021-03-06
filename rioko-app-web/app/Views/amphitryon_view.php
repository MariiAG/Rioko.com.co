<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/amphitryon.css">
<script src="<?php echo base_url();?>/public/assets/js/SessionAmphitryon.js"></script>

<div class="options">
    <ul id="menu-option-amphitryon">
        <li id="mini-perfil" class="container">
            <ul>
                <li class="center"><img id="img-perfil" src="<?php echo base_url();?>/public/assets/img/mujer.jpg"></li>
                <li><i class="tiny material-icons">location_city</i> Anfitrión</li>
                <li><i class="tiny material-icons">person_pin</i> <?php echo $name." ".$lastname;?></li>
                <li><i class="tiny material-icons">location_on</i> Pais: <?php echo $country;?></li>
                <li>
                    <i class="tiny material-icons">loyalty</i> 
                    <?php foreach($quantityReviews as $quantityReview){echo $quantityReview->total;} ?> 
                    reseñas
                </li>
            </ul><br>
            <div class="center">
                <a id="btn-logout" class="btn waves-effect waves-light" type="submit" href="<?php echo base_url();?>/public/amphitryon/close" onclick="closeSession();">
                    <i class="tiny material-icons right">highlight_off</i>Cerrar Sesión
                </a>
            </div>
        </li><br>
        <li class="item-menu-amphitryon white-text" onclick="reviews();">Reseñas</li><br>
        <li class="item-menu-amphitryon white-text" onclick="information();">Datos Personales</li><br>
        <li class="item-menu-amphitryon white-text" onclick="apartments();">Apartamentos</li>
    </ul>

    <div id="personal-information" class="white-text container">

        <div id="div-apartment-data" style="display: none">
            <a id="btn-add" class="btn waves-effect waves-light green center" type="submit" href="<?php echo base_url();?>/public/amphitryon/create-apartment">Agregar apartamento<i class="material-icons right">add</i></a><br><br>
                <div class="row">
                    <?php 
                        foreach($apartments as $apartmentUser)
                        {
                            $routeDelete = base_url()."/public/amphitryon/delete-Apartment?id={$apartmentUser->id_apartment}";
                            $routeUpdate = base_url()."/public/amphitryon/update-Apartment?id={$apartmentUser->id_apartment}";

                            // print_r($apartments);

                            echo "<div class='col s6'>
                                    <div class='card'>
                                        <div class='card-image'>
                                            <div id='div-state' class='card-panel center'>                      
                                                <img id='picture' src='{$apartmentUser->picture}'>
                                            </div>
                                        </div>
                                        <div class='card-content'>
                                            <ul>
                                            <br
                                                <li><span class='span-info-cards'>CIUDAD: </span>{$apartmentUser->city}</li>
                                                <li><span class='span-info-cards'>PAÍS: </span>{$apartmentUser->country}</li>
                                                <li><span class='span-info-cards'>DIRECCIÓN: </span><a class='orange-text' href='{$apartmentUser->googleMaps}' target='_blank'>{$apartmentUser->address}</a></li>                          
                                                <li><span class='span-info-cards'>HABITACIONES: </span>{$apartmentUser->bedrooms}</li>
                                                <li><span class='span-info-cards'>PRECIO: </span>{$apartmentUser->price}</li>
                                                <li><span class='span-info-cards'>RESEÑA: </span>{$apartmentUser->review_apartment}</li>
                                                <div class=' white-text center'>                                     
                                                    <a id='btn-edit' class='btn waves-effect waves-light blue center' href='{$routeUpdate}'>
                                                    <i class='material-icons left'>border_color</i>
                                                    </a>
                                                    <a id='btn-delete' class='btn waves-effect waves-light red center' href='{$routeDelete}'>
                                                    <i class='material-icons left'>delete</i>
                                                    </a>                                       
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                  </div>";
                        }
                    ?>
                </div>
        </div>

        <div id="div-personal-data" style="display: none">
            <div id="bg-info">
            <form method="POST" action="<?php echo base_url();?>/public/amphitryon/data-personal?id=<?php echo $id_user;?>">
                <div class="center">
                    <button id="btn-save" class="btn waves-effect waves-light green left" disabled type="submit" onclick="validateUpdateUser();">Guardar Los Cambios<i class="material-icons right">offline_pin</i></button>
                    <a id="btn-modify" class="btn waves-effect waves-light blue right" onclick="ValidateModifyUser();">Modificar Mis Datos
                    <i class="material-icons right">border_color</i>
                    </a>
                </div><br><br><br><br><br><br>
                <div class="row">
                    <div class="input-field col s6">
                        <input readonly id="first_name" type="text" class="validate" name="name" value="<?php echo $name;?>">
                        <label for="first_name">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <input readonly id="last_name" type="text" class="validate" name="lastname" value="<?php echo $lastname;?>">
                        <label for="last_name">Apellido</label>
                    </div>
                </div><br><br><br>
                <div class="row">
                    <div class="input-field col s6">
                        <input readonly id="email" type="email" class="validate" name="email" value="<?php echo $email;?>">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-field col s6">
                        <input readonly id="country" type="text" class="validate" name="country" value="<?php echo $country;?>">
                        <label for="country">Pais</label>
                    </div>
                </div><br><br><br>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="********" readonly id="password" type="password" name="password" class="validate">
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="********" readonly id="passwordConfirm" type="password" name="passwordConfirm" class="validate">
                        <label for="passwordConfirm">Confirmar Contraseña</label>
                    </div>
                </div>
            </form>
            </div>
        </div>

        <div id="div-reviews-data"  style="">
            <div class="center"><h4>¿Que opinan los invitados a cerca de tus servicios?</h4><br></div>
            <div id="title-reviews" class="card-panel"> 
                    <?php 
                            foreach($invited as $review)
                            {
                                echo "<div class='reviews card-panel'>
                                        <h5>{$review->name} {$review->lastname}</h5>
                                        <h6 id='qualification'>{$review->qualification}</h6>
                                        <p>{$review->commentary}</p>
                                        <p id='date'>FECHA: {$review->date}</p>
                                        </div>";
                                        // print_r($reviews);
                            }
                    ?>                    
            </div>
        </div>
    </div>
</div>