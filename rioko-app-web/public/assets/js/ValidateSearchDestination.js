function validateSearchDestination(){
    let location = document.getElementById('location').value;
    let arrival = document.getElementById('arrival').value;
    let departure = document.getElementById('departure').value;
    let guests = document.getElementById('guests').value;

    if (location == "" || arrival == "" || departure == "" || guests == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '¡Asegurate de llenar todos los campos del formulario!',
            iconColor: 'Red',
            backdrop: `
            rgba(0, 0, 0, 0.596)
            `
        });
    } else {
        Swal.fire({
            title: 'Cargando resultados...',
            icon: 'success',
            showConfirmButton: false,
            timer: 1700,
            backdrop: `
            rgba(0, 0, 0, 0.596)
            `
        }).then((result) => {
            if (result.isConfirmed) {
            location.href ="index.php";
            }
        }) 
    }

}