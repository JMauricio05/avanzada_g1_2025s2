console.log('inicio.js');
/**
 * Bloque...
 */
// linea...

// variables: var let const
var nombre = "Pepe";
let apellido = 'Gomez';
//const nombreCompleto = nombre + ' ' + apellido;
const nombreCompleto = `${nombre} ${apellido}`;
let edad = 25;
let promedio = 12.5;
let mayorEdad = true; //false

let numeros = [];
numeros = new Array(12);
numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
let lista = [1, 'a', 1.2, true, [], null, undefined, ''];
console.log(numeros[2]);

let v = null;
v = undefined;
v = '';

let persona = {
    nombre: 'Juana',
    apellido: 'Gomez',
    edad: 40,
    jobs: []
};
console.log(persona.nombre, persona.edad, persona.apellido);
persona.nombre = 'Maria';
console.log(persona.nombre, persona.edad, persona.apellido);

console.log('Ciclos:');
console.log('For--------------------');
for (let index = 0; index < numeros.length; index++) {
    console.log(numeros[index]);
}

console.log('For in--------------------');
for (let index in numeros) {
    console.log(numeros[index]);
}

console.log('For of--------------------');
for (let numero of numeros) {
    console.log(numero);
}

console.log('while----------------------');
let index = 0;
while (index < numeros.length) {
    console.log(numeros[index]);
    index++;
    //break; 
    //continue;
}

console.log('do while----------------------');
index = 0;
do {
    console.log(numeros[index]);
    index++;
} while (index < numeros.length);

console.log('foreach ----------------------');

numeros.forEach((valor, pos) => {
    console.log(pos, ': ', valor);
});

console.log('if else');

if (numeros[0] < 1) {
    console.log(numeros[0], "menor que 1");
} else if (numeros[0] == 1) {
    console.log(numeros[0], "igual que 1");
} else {
    console.log(numeros[0], "mayor que 1");
}
/**
 * & and 
 * | or
 * ! negacion
 * > mayor
 * >= mayor o igual
 * < menor
 * <= menor o igual
 * == igual valores
 * === igual valores y tipos de datos
 */
console.log(1 == '1');
console.log(1 === '1');

let categoria = 'a';
switch (categoria) {
    case 'a':
        //bloque cod...
        break;
    case 'b':
        //bloque cod...
        break;
    default:
        //bloque cod...
        break;
}

function saludar(nombre) {
    console.log(`Hola ${nombre}`);
}
saludar('Juan');

function saludo(nombre) {
    return `Hola ${nombre}`;
}
console.log(saludo('Ana'));
