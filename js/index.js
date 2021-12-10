// Variables
let email = document.querySelector('#email'),
    password = document.querySelector('#password');

const formulario = document.querySelector('#formulario');

// Eventlisteners
window.addEventListener("DOMContentLoaded", (e) => {
    
    validarCampos();

    console.log(formulario);

});

// Funciones
const validarCampos = () => {


    
    console.log('validando campos...');

    enviarDatos();


}


const enviarDatos = () => {
    console.log('enviando datos...');
}
