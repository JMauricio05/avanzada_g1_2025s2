// Variables----------------------
const form = document.forms['saludarForm'];
const saludoMsg = document.getElementById('saludo');
const limpiarBtn = document.getElementById('limpiarBtn');

//Metodos-------------------------
const log = (text) => {
    const num = localStorage.length;
    localStorage.setItem(`log-${num}`, text);
    sessionStorage.setItem(`log-${num}`, text);

    console.log(localStorage.getItem('log-1'));
    console.log(localStorage.key(2));
};

const mostrarSaludo = (nombre) => {
    saludoMsg.textContent = `Hola ${nombre}`;
    log(`El usuario ingreso: ${nombre}`);
};
const borrarSaludo = () => {
    setTimeout(() => {
        saludoMsg.textContent = '';
        log(`Se borro el saludo`);
    }, 3000);
};

//Eventos--------------------------
form.addEventListener('submit', (ev) => {
    ev.preventDefault();
    const nombre = form['nombre'].value;
    mostrarSaludo(nombre);
    borrarSaludo();
});

limpiarBtn.addEventListener('click', () => {
    localStorage.removeItem('log-1');
    localStorage.clear();

    sessionStorage.clear();
});
