<?php
// PARTE 2 - Menú principal con funciones, ciclos, switch y arreglos

// Problema 1: sumatoria de 1 a 10
function problema1() {
    $suma = 0;
    for ($i = 1; $i <= 10; $i++) {
        $suma += $i;
    }
    echo "La sumatoria de 1 a 10 es: $suma\n";
}

// Problema 2: impares y sumatoria de los primeros 300 enteros
function problema2() {
    $impares = 0;
    $suma = 0;
    for ($i = 1; $i <= 300; $i++) {
        if ($i % 2 != 0) {
            $impares++;
        }
        $suma += $i;
    }
    echo "Cantidad de impares entre 1 y 300: $impares\n";
    echo "Sumatoria de todos los números: $suma\n";
}

// Problema 3: promedio de 5 notas; termina si se ingresa 0
function problema3() {
    $suma = 0;
    $contador = 0;
    while ($contador < 5) {
        $nota = (float) readline("Ingrese la nota " . ($contador + 1) . " (0 para terminar): ");
        if ($nota == 0) {
            break;
        }
        $suma += $nota;
        $contador++;
    }
    if ($contador > 0) {
        echo "Promedio de $contador notas: " . round($suma / $contador, 2) . "\n";
    } else {
        echo "No se ingresaron notas\n";
    }
}

// Problema 4: media de 10 calificaciones guardadas en un vector
function problema4() {
    $notas = [];
    for ($i = 1; $i <= 10; $i++) {
        $notas[] = (float) readline("Ingrese la calificación de la asignatura $i: ");
    }
    $media = array_sum($notas) / count($notas);
    echo "Calificaciones: " . implode(", ", $notas) . "\n";
    echo "Media: " . round($media, 2) . "\n";
}

// Problema 5: vector de 5 enteros; a = ascendente, d = descendente, o = original
function problema5() {
    $original = [];
    for ($i = 1; $i <= 5; $i++) {
        $original[] = (int) readline("Ingrese el elemento $i: ");
    }
    do {
        $op = strtolower(readline("a = ascendente, d = descendente, o = original, x = volver: "));
        $v = $original;
        switch ($op) {
            case 'a':
                sort($v);
                echo "Ascendente: " . implode(", ", $v) . "\n";
                break;
            case 'd':
                rsort($v);
                echo "Descendente: " . implode(", ", $v) . "\n";
                break;
            case 'o':
                echo "Original: " . implode(", ", $original) . "\n";
                break;
            case 'x':
                break;
            default:
                echo "Opción inválida\n";
        }
    } while ($op != 'x');
}

// Menú principal; X para salir
do {
    echo "\n===== MENÚ PRINCIPAL =====\n";
    echo "1. Sumatoria de 1 a 10\n";
    echo "2. Impares y sumatoria de 1 a 300\n";
    echo "3. Promedio de 5 notas\n";
    echo "4. Media de 10 asignaturas\n";
    echo "5. Vector de 5 elementos\n";
    echo "X. Salir\n";
    $opcion = strtolower(readline("Escoja una opción: "));

    switch ($opcion) {
        case '1': problema1(); break;
        case '2': problema2(); break;
        case '3': problema3(); break;
        case '4': problema4(); break;
        case '5': problema5(); break;
        case 'x': echo "Hasta luego\n"; break;
        default: echo "Opción inválida\n";
    }
} while ($opcion != 'x');
