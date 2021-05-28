/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function responsiveMenu() {
    var nav = document.getElementById("menu");
    if (nav.className === "nav-menu") {
      nav.className += " responsive";
    } else {
      nav.className = "nav-menu";
    }
}