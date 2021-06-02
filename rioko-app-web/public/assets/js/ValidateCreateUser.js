function rolSelected(rol){
    if(rol == "invited"){
       document.getElementById('rol-invited').className = "rol-selected col center";
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Rol INVITADO Seleccionado...',
            text: '¡Excelente elección! ¡Recorramos el mundo entero!',
            confirmButtonColor: 'green',
            backdrop: `
            rgba(0, 0, 0, 0.596)
            `
        });
        alert(rol);
        l = document.getElementById('typeInvited').value="invitado";
        alert(l);
    }else{
        document.getElementById('rol-invited').className = "rol col center";
    }
    if(rol == "amphitryon"){
        document.getElementById('rol-amphitryon').className = "rol-selected col center right";
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Rol ANFITRION Seleccionado...',
            text: '¡Ya falta poco! ¡Creemos grandes experiencias!',
            confirmButtonColor: 'green',
            backdrop: `
            rgba(0, 0, 0, 0.596)
            `
        });
        document.getElementById('typeAmphitryon').value="anfitrion";
    }else{
        document.getElementById('rol-amphitryon').className = "rol col center right";
    }
}

function validateCreateUser(){
    let name = document.getElementById('first_name').value;
    let lastname = document.getElementById('last_name').value;
    let email = document.getElementById('email').value;
    let country = document.getElementById('country').value;
    let password = document.getElementById('password').value;
    let passwordConfirm = document.getElementById('passwordConfirm').value;
    let typeInvited = document.getElementById('typeInvited').value;
    let typeAmphitryon = document.getElementById('typeAmphitryon').value;
    
    if (name == "" || lastname == "" || email == "" || country == "" || password == "" || passwordConfirm == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            showConfirmButton: false,
            timer: 3000,
            backdrop: `
            rgba(0, 0, 0, 0.596)
            `
        });
    } else { 
        if(typeAmphitryon == "" && typeInvited == ""){
            Swal.fire({
                position: 'center',
                icon: 'error',
                text: 'No ha seleccionado ningun rol de usuario',
                showConfirmButton: false,
                timer: 3000,
                backdrop: `
                rgba(0, 0, 0, 0.596)
                `
            });
        }else{
            if(password == "" && passwordConfirm == ""){
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Oh, no...',
                    text: 'Las contraseña no puede estar vacia',
                    showConfirmButton: false,
                    timer: 3000,
                    backdrop: `
                    rgba(0, 0, 0, 0.596)
                    `
                  });
            }else{
                if (password === passwordConfirm) {
                    Swal.fire({
                        position: 'center',
                        title: 'Creando Usuario...',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000,
                        backdrop: `
                        rgba(0, 0, 0, 0.596)
                        `
                    });   
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Oh, no...',
                        text: 'Las contraseñas no coinciden',
                        iconColor: 'Red',
                        backdrop: `
                        rgba(0, 0, 0, 0.596)
                        `
                      });
                }
            }
        }
    }
}

function cancelCreateUser(){
    Swal.fire({
        title: 'Cuidado...',
        text: "¡ Si decide cancelar, no se guardara la información !",
        icon: 'warning',
        iconColor: 'orange',
        showCancelButton: true,
        confirmButtonColor: 'red',
        cancelButtonColor: 'blue',
        confirmButtonText: 'Si, Cancelar!',
        cancelButtonText: 'No',
        backdrop: `
        rgba(0, 0, 0, 0.596)
        `
      }).then((result) => {
        if (result.isConfirmed) {
            location.href ="index.php";
        }
      })
}

