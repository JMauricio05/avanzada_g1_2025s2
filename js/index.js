/**
 * Usar cuando <script src="js/index.js"></script> este en el head
 * document.addEventListener('DOMContentLoaded', () => {
    const titulo = document.getElementById('titulo-p');
    titulo.textContent = 'Hola desde javascript';
    });
 */

const titulo = document.getElementById('titulo-p');
titulo.textContent = 'Hola desde javascript';

const saludarBtn = document.getElementById('saludarBtn');
saludarBtn.addEventListener('click', () => {
    alert('hola');
});

const saludar = () => alert('Hola 3');

const saludoTxt = document.getElementById('saludoTxt');
const form = document.forms['saludarForm'];
form.addEventListener('submit', (ev) => {
    ev.preventDefault();

    const nombre = form['nombre'].value;
    //alert(`Hola ${nombre}`);
    saludoTxt.textContent = `Hola ${nombre}`;
});

const numForm = document.forms['numForm'];
numForm.addEventListener('submit', (ev) => {
    ev.preventDefault();
    const msg = document.getElementById('msg-numero');
    const numero = Number(numForm['numero'].value);
    if (numero > 0) {
        validarNumer(numero);
        numForm.reset();
        msg.classList.remove('show');
    } else {
        msg.classList.add('show');
    }
});

const validarNumer = (numero) => {
    const resultado = (numero % 2) === 0 ? 'par' : 'impar';
    const historial = document.getElementById('historial');

    const p = document.createElement('p');
    const strong = document.createElement('strong');
    strong.textContent = resultado;

    p.textContent = `${numero}: `;
    p.appendChild(strong);

    historial.appendChild(p);

}