/*Menú responsive*/
"use strict";
document.querySelector(".btn-menu").addEventListener("click",alternarMenu);
function alternarMenu() {
    document.querySelector(".navbar").classList.toggle("show");
}/*El fragmento de código que proporcionó está escrito en JavaScript y agrega un detector de eventos a un elemento de botón con la clase "btn-menu". Cuando se hace clic en el botón, alternarMenu()se llama a la función.

Dentro de la alternarMenu()función, selecciona un elemento con la clase "navbar" usando document.querySelector(".navbar"). Luego llama al classList.toggle()método en el elemento seleccionado, alternando la presencia de la clase "mostrar". Si la clase "show" ya está presente, la elimina; de lo contrario, lo agrega*/
