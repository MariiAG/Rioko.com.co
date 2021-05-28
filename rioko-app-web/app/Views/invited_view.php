<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/invited.css">
<script src="<?php echo base_url();?>/public/assets/js/SessionInvited.js"></script>

<div id="div-option">
    <ul id="menu-option-invited">
        <li id="mini-perfil" class="container">
            <ul>
                <li class="center"><img id="img-perfil" src="<?php echo base_url();?>/public/assets/img/mujer.jpg"></li>
                <li><i class="tiny material-icons">favorite</i> Invitado</li>
                <li><i class="tiny material-icons">person_pin</i> <?php echo $name." ".$lastname;?></li>
                <li><i class="tiny material-icons">email</i> Correo: <?php echo $email;?></li>
                <li><i class="tiny material-icons">location_on</i> Pais: <?php echo $country;?></li><br>
            </ul>
            <div class="center">
                <a id="btn-logout" class="btn waves-effect waves-light" type="submit" href="<?php echo base_url();?>/public/amphitryon/close">
                    <i class="tiny material-icons right">highlight_off</i>Cerrar Sesión
                </a>
            </div>
        </li><br>
        <li class="item-menu-invited white-text" onclick="information();">Datos Personales</li><br>
        <li class="item-menu-invited white-text" onclick="reserve();">Mis reservas</li><br>
    </ul>

    <div id="personal-information" class="white-text container">
        
        <div id="div-personal-data" style="">
            <div id="bg-info">
            <form method="POST" action="<?php echo base_url();?>/public/invited/data-personal?id=<?php echo $id_user;?>">
                <div class="center">
                    <button id="btn-save" class="btn waves-effect waves-light green left" type="submit" onclick="validateUpdateUser();">Guardar Los Cambios<i class="material-icons right">offline_pin</i></button>
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

        <div id="div-apartment-data" style="display: none">
                <div class="row">
                    <?php 
                        foreach($apartments as $apartmentUser)
                        {
                            $routeDelete = base_url()."/public/invited/delete-booking?id={$apartmentUser->id_booking}";
                            echo "<div class='col s6'>
                                    <div class='card'>
                                        <div class='card-image'>
                                            <div id='div-state' class='card-panel center'>                      
                                                <img id='picture' src='{$apartmentUser->picture}'>
                                                <h6>{$apartmentUser->state}</h6>
                                            </div>
                                        </div>
                                        <div class='card-content'>
                                            <ul>
                                                <li><span class='span-info-cards'>ANFITRIÓN: </span>{$apartmentUser->name} {$apartmentUser->lastname}</li>
                                                <li><span class='span-info-cards'>CIUDAD: </span>{$apartmentUser->city}</li>
                                                <li><span class='span-info-cards'>PAÍS: </span>{$apartmentUser->country}</li>
                                                <li><span class='span-info-cards'>DIRECCIÓN: </span><a class='orange-text' href='{$apartmentUser->googleMaps}' target='_blank'>{$apartmentUser->address}</a></li>                          
                                                <li><span class='span-info-cards'>HABITACIONES: </span>{$apartmentUser->bedrooms}</li>
                                                <li><span class='span-info-cards'>PRECIO: </span>{$apartmentUser->price}</li>
                                                <li><span class='span-info-cards'>RESEÑA: </span>{$apartmentUser->review_apartment}</li>
                                                <div class='card-content white-text center'>
                                                    <a id='btn-cancel' class='btn waves-effect waves-light blue center' href='{$routeDelete}'>Cancelar reserva
                                                    <i class='tiny material-icons left'>room_service</i>
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
    </div>
</div>