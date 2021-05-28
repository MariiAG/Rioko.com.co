function openModal(){
    let sessionContainer = document.querySelectorAll(".session-container")[0];
    sessionContainer.style.opacity = "1";
    sessionContainer.style.visibility = "visible";
}

function closeModal(){
    let sessionContainer = document.querySelectorAll(".session-container")[0];
    sessionContainer.style.opacity = "0";
    sessionContainer.style.visibility = "hidden";
}

function invited(){
  location.href ="invited";
}

function amphitryon(){
  location.href ="amphitryon";
}

function returnLogin(){
  Swal.fire({
    title: 'Redirigiendo a...',
    text: 'Pagina principal',
    icon: 'success',
    showConfirmButton: false,
    timer: 3000,
    backdrop: `
    rgba(0, 0, 0, 0.596)
    `,
  }); 
  setTimeout(function(){location.href ="home";}, 1400);
}

function returnDataUser(){
  Swal.fire({
    title: 'Redirigiendo a...',
    text: 'Perfil de Usuario',
    icon: 'success',
    showConfirmButton: false,
    timer: 3000,
    backdrop: `
    rgba(0, 0, 0, 0.596)
    `,
  }); 
  setTimeout(function(){window.history.back();}, 1400);
}

// function startOptionSessionUser(){
//     let user = document.getElementById('session-user').value;
//     let password = document.getElementById('session-password').value;

//     if (user == "m@gmail.com" && password == 123) {
//         document.getElementById('menu-session').innerText = 'MI PERFIL';;

//         Swal.fire({
//             position: 'center',
//             icon: 'success',
//             title: '¡Bienvenid@!',
//             text: 'Cargando datos de tu perfil...',
//             showConfirmButton: false,
//             timer: 2000
//         });  
//     } else {
//         Swal.fire({
//             title: '¡Alto ahí!',
//             text: "¿Quien eres? No me acuerdo de ti...",
//             icon: 'error',
//             showCancelButton: false,
//             confirmButtonColor: 'red',
//             confirmButtonText: '¿Algun error?'
//           }).then((result) => {
//             if (result.isConfirmed) {
//               Swal.fire({
//                 title: '¡Es probable! Pero descuida...',
//                 text: 'Solo revisa de nuevo tu contraseña y usuario',
//                 icon: 'warning',
//                 confirmButtonColor:'orange'
//               })
//             }
//           })
//     }
// } 


// function datapicker(){
//     document.getElementById("arrival")[0].value = " ";
// }

// function hola(num){
//     switch(num){
//         case '1':
//             document.getElementById('wey').innerText = "imagen 1";
//             break;
//         case '2':
//             document.getElementById('wey').innerText = "imagen 2";
//             break;
//         case '3':
//             document.getElementById('wey').innerText = "imagen 3";
//             break;
//     }
// }

// function click(){
//     document.getElementById('wey').innerText;
// }

