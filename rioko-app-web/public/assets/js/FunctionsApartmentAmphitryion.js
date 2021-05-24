function cancelCreateApartment(){
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
            window.history.back();
        }
      })
}

function validateCreateApartment(){
    let city = document.getElementById('city').value;
    let country = document.getElementById('country').value;
    let address = document.getElementById('address').value;
    let googleMaps = document.getElementById('google-maps').value;
    let picture = document.getElementById('picture').value;
    let collage = document.getElementById('collage').value;
    let price = document.getElementById('price').value;
    let reviewsApartment = document.getElementById('reviews-apartment').value;
    
    if (city == "" || country == "" || address == "" || googleMaps == "" || picture == "" || collage == "" || price == "" || reviewsApartment == "") {
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
        Swal.fire({
            position: 'center',
            title: '¡Fantastico!',
            text: 'nuevo apartamento agregado...',
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: 'green',
            confirmButtonText: `Genial`,
            backdrop: `
            rgba(0, 0, 0, 0.596)
            `
        }).then((result) => {
            if (result.isConfirmed) {
                // window.history.back();
                location.href ="home";
            }
        }) 
    }
}