document.addEventListener("DOMContentLoaded", function () {
    /* console.log("DOM chargé !!"); */

    const menuBurger = document.getElementById("menu-burger");
    const navList = document.querySelector(".nav-list");
    const logo = document.querySelector(".logo");

    menuBurger.addEventListener("click", function () {
        if (navList.classList.contains("active")) {
            navList.classList.remove("active");
            logo.classList.remove("hide");
            /* console.log("bouton cliqué!") */
        } else {
            navList.classList.add("active");
            /* logo.classList.add("hide"); */
        }
    });
});