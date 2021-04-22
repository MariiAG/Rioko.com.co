// let close = document.querySelectorAll("#session-cancel")[0];
// let open = document.querySelectorAll(".open")[0];
// let session = document.querySelectorAll(".session")[0];


// open.addEventListener("click", function(e){
//     e.preventDefault();
//     sessionContainer.style.opacity = "1";
//     sessionContainer.style.visibility = "visible";
//     session.classList.toggle("session-close");
// });

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

function datapicker(){
    let picker = document.querySelectorAll('.datepicker')[0];
    picker.style.visibility = "visible"
}

