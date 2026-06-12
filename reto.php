<?php

// RETO A - SISTEMA DE ACCESO

$edad = 20;
$tieneEntrada = true;

if ($edad < 18) {
    echo "Acceso denegado: Menor de edad<br>";
} else {
    if ($tieneEntrada) {
        echo "¡Bienvenido!<br>";
    } else {
        echo "Acceso denegado: Se requiere entrada<br>";
    }
}

echo "<br>";

// RETO B - CATEGORIZACIÓN DE JUGADORES

$puntaje = 2;

switch ($puntaje) {
    case 1:
        echo "Principiante";
        break;

    case 2:
        echo "Pro";
        break;

    case 3:
        echo "Maestro";
        break;

    default:
        echo "Puntaje no válido";
}

?>