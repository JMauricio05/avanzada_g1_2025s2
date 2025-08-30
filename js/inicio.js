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