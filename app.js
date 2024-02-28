console.log("first")

const casado=document.querySelector("input[value='casado']")

const visible=document.querySelector(".visible")

const visible2=document.querySelector(".visible-2")

const visible3=document.querySelector(".visible-3")

const visible4=document.querySelector(".visible-4")
const visible5=document.querySelector(".visible-5")
let botonesRadio = document.querySelectorAll('input[type="radio"][name="civil1"]');

// Iterar sobre cada botón de radio
botonesRadio.forEach(function(botonRadio) {
    // Agregar un listener para el evento change a cada botón de radio
    botonRadio.addEventListener('change', function(event) {
        // Verificar si el botón de radio está seleccionado
        if (event.target.checked  && event.target.hasAttribute("data-casado")) {
            console.log('El botón de radio se ha seleccionado.');
            visible.classList.toggle("oculto")
            
        } else {
            console.log('El botón de radio se ha deseleccionado.');
            visible.classList.remove("oculto")
        }
    });
});




let botonesRadio2 = document.querySelectorAll('input[type="radio"][name="civil2"]');

// Iterar sobre cada botón de radio
botonesRadio2.forEach(function(botonRadio) {
    // Agregar un listener para el evento change a cada botón de radio
    botonRadio.addEventListener('change', function(event) {
        // Verificar si el botón de radio está seleccionado
        if (event.target.checked  && event.target.hasAttribute("data-casado")) {
            console.log('El botón de radio se ha seleccionado.');
            visible2.classList.toggle("oculto")
        } else {
            console.log('El botón de radio se ha deseleccionado.');
            visible2.classList.remove("oculto")
        }
    });
});




let botonesRadio3 = document.querySelectorAll('input[type="radio"][name="civil3"]');

// Iterar sobre cada botón de radio
botonesRadio3.forEach(function(botonRadio) {
    // Agregar un listener para el evento change a cada botón de radio
    botonRadio.addEventListener('change', function(event) {
        // Verificar si el botón de radio está seleccionado
        if (event.target.checked  && event.target.hasAttribute("data-casado")) {
            console.log('El botón de radio se ha seleccionado.');
            visible3.classList.toggle("oculto")
        } else {
            console.log('El botón de radio se ha deseleccionado.');
            visible3.classList.remove("oculto")
        }
    });
});


let botonesRadio4 = document.querySelectorAll('input[type="radio"][name="civil4"]');

// Iterar sobre cada botón de radio
botonesRadio4.forEach(function(botonRadio) {
    // Agregar un listener para el evento change a cada botón de radio
    botonRadio.addEventListener('change', function(event) {
        // Verificar si el botón de radio está seleccionado
        if (event.target.checked  && event.target.hasAttribute("data-casado")) {
            console.log('El botón de radio se ha seleccionado.');
            visible4.classList.toggle("oculto")
        } else {
            console.log('El botón de radio se ha deseleccionado.');
            visible4.classList.remove("oculto")
        }
    });
});




let botonesRadio5 = document.querySelectorAll('input[type="radio"][name="civil5"]');

// Iterar sobre cada botón de radio
botonesRadio5.forEach(function(botonRadio) {
    // Agregar un listener para el evento change a cada botón de radio
    botonRadio.addEventListener('change', function(event) {
        // Verificar si el botón de radio está seleccionado
        if (event.target.checked  && event.target.hasAttribute("data-casado")) {
            console.log('El botón de radio se ha seleccionado.');
            visible5.classList.toggle("oculto")
        } else {
            console.log('El botón de radio se ha deseleccionado.');
            visible5.classList.remove("oculto")
        }
    });
});