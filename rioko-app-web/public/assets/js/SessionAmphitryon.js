function information(){
    document.getElementById("div-personal-data").style = "";
    document.getElementById("div-apartment-data").style = "display: none";
    document.getElementById("div-reviews-data").style = "display: none";
    document.getElementById('section').className = "options-pe";
}

function apartments(){
    document.getElementById("div-apartment-data").style = "";
    document.getElementById("div-personal-data").style = "display: none";
    document.getElementById("div-reviews-data").style = "display: none";
    document.getElementById('section').className = "options-ap";
}

function reviews(){
    location.href ="amphitryon";
}

function changeApartment(){
    location.href ="amphitryon/update-Apartment";
}

function validateUpdateUser(){
    let name = document.getElementById('first_name').value;
    let lastname = document.getElementById('last_name').value;
    let email = document.getElementById('email').value;
    let country = document.getElementById('country').value;
    let password = document.getElementById('password').value;
    let passwordConfirm = document.getElementById('passwordConfirm').value;

    if(name == "" || lastname == "" || email == "" || country == ""){
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Oops...',
            text: 'Asegurese de llenar todos los campos del formulario',
            iconColor: 'Red',
            backdrop: `
            rgba(0, 0, 0, 0.596)
            `
        });  
    }else{
        if (password === passwordConfirm) {
            Swal.fire({
                title: 'Actualizando los datos...',
                icon: 'success',
                showConfirmButton: false,
                timer: 1700,
                backdrop: `
                rgba(0, 0, 0, 0.596)
                `,
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

function ValidateModifyUser(){
    document.getElementById('first_name').removeAttribute("readonly");
    document.getElementById('last_name').removeAttribute("readonly");
    document.getElementById('email').removeAttribute("readonly");
    document.getElementById('country').removeAttribute("readonly");
    document.getElementById('password').removeAttribute("readonly");
    document.getElementById('passwordConfirm').removeAttribute("readonly");
    document.getElementById('btn-save').disabled=false;
}


function closeSession(){
    Swal.fire({
        title: 'Cerrando sesión...',
        icon: 'success',
        showConfirmButton: false,
        timer: 3000,
        backdrop: `
        rgba(0, 0, 0, 0.596)
        `
    })
}