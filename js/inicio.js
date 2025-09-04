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
function sumar(num1, num2) {
    return num1 + num2;
}

console.log(sumar(2, 3));

function suma(num1, num2) {
    console.log(num1 + num2);
}

const sumarDos = function (num1, num2) {
    return num1 + num2;
}
console.log(sumarDos(6, 3));

const sumarTres = (num1, num2) => {
    return num1 + num2;
}
console.log(sumarTres(7, 8));

const sumarCuatro = (num1, num2) => num1 + num2;
console.log(sumarCuatro(9, 10));

console.log("Hola", 2, true, [], 6, "Juan");

const sumarCinco = (...args) => {
    console.log(args[1]);
    let resultado = 0;
    for (let num of args) {
        resultado += num;
        //resultado =resultado+ num;
    }
    return resultado;
}
console.log(sumarCinco(2, 5, 6));
console.log(sumarCinco(2, 5, 6, 5));
console.log(sumarCinco(2, 5, 6, 5, 10));
console.log(sumarCinco(2, 5, "a", 5, true));

const operaciones = (sumar) => {
    console.log('La suma es: ', sumar());
}

operaciones(function () {
    return 2 + 5;
});
operaciones(() => {
    return 5 + 6;
});
operaciones(() => 7 + 8);
operaciones(() => sumarCinco(2, 3, 4, 5));

class Persona {
    constructor(nombre, edad) {
        this.nombre = nombre;
        this.edad = edad;
    }

    mayorEdad() {
        return this.edad >= 18;
    }
}

const persona = new Persona('Juan', 15);
console.log(persona.nombre, persona.mayorEdad());
