// RETO A - SISTEMA DE ACCESO

let edad = 20;
let tieneEntrada = true;

if (edad < 18) {
    console.log("Acceso denegado: Menor de edad");
} else {
    if (tieneEntrada) {
        console.log("¡Bienvenido!");
    } else {
        console.log("Acceso denegado: Se requiere entrada");
    }
}

console.log("");

// RETO B - CATEGORIZACIÓN DE JUGADORES

let puntaje = 2;

switch (puntaje) {
    case 1:
        console.log("Principiante");
        break;

    case 2:
        console.log("Pro");
        break;

    case 3:
        console.log("Maestro");
        break;

    default:
        console.log("Puntaje no válido");
}