<?php
// PARTE 1 - Variables, operadores, estructuras de control

// ---------- Problema 1: ordenar dos números de menor a mayor ----------
echo "\n=== Problema 1: Ordenar dos números ===\n";
$a = (float) readline("Ingrese el primer número: ");
$b = (float) readline("Ingrese el segundo número: ");
if ($a > $b) {            // si están al revés, se intercambian
    $temp = $a;
    $a = $b;
    $b = $temp;
}
echo "Ordenados de menor a mayor: $a, $b\n";

// ---------- Problema 2: par o impar ----------
echo "\n=== Problema 2: Par o impar ===\n";
$n = (int) readline("Ingrese un número N: ");
if ($n % 2 == 0) {        // residuo 0 => par
    echo "$n es par\n";
} else {
    echo "$n es impar\n";
}

// ---------- Problema 3: millas marinas a metros ----------
echo "\n=== Problema 3: Millas marinas a metros ===\n";
$millas = (float) readline("Ingrese la distancia en millas marinas: ");
$metros = $millas * 1852; // 1 milla marina = 1852 m
echo "$millas millas marinas = $metros metros\n";

// ---------- Problema 4: operaciones aritméticas ----------
echo "\n=== Problema 4: Operaciones aritméticas ===\n";
$x = (int) readline("Ingrese el primer entero: ");
$y = (int) readline("Ingrese el segundo entero: ");
echo "Suma: " . ($x + $y) . "\n";
echo "Resta: " . ($x - $y) . "\n";
echo "Multiplicación: " . ($x * $y) . "\n";
if ($y != 0) {            // evita división entre cero
    echo "División: " . ($x / $y) . "\n";
    echo "Resto (módulo): " . ($x % $y) . "\n";
} else {
    echo "No se puede dividir entre cero\n";
}

// ---------- Problema 5: mayor y menor de tres valores distintos ----------
echo "\n=== Problema 5: Mayor y menor de tres valores ===\n";
$A = (float) readline("Ingrese A: ");
$B = (float) readline("Ingrese B: ");
$C = (float) readline("Ingrese C: ");
if ($A == $B || $A == $C || $B == $C) {
    echo "ALERTA: los valores deben ser distintos\n";
} else {
    $mayor = $A;
    $menor = $A;
    if ($B > $mayor) $mayor = $B;
    if ($C > $mayor) $mayor = $C;
    if ($B < $menor) $menor = $B;
    if ($C < $menor) $menor = $C;
    echo "Mayor: $mayor\n";
    echo "Menor: $menor\n";
}

// ---------- Problema 6: mayor y menor de cuatro números diferentes ----------
echo "\n=== Problema 6: Mayor y menor de cuatro números ===\n";
$nums = [];
for ($i = 1; $i <= 4; $i++) {
    $nums[] = (float) readline("Ingrese el número $i: ");
}
if (count(array_unique($nums)) < 4) {   // hay repetidos
    echo "ALERTA: los cuatro números deben ser diferentes\n";
} else {
    echo "Mayor: " . max($nums) . "\n";
    echo "Menor: " . min($nums) . "\n";
}

// ---------- Problema 7: cilindro ----------
echo "\n=== Problema 7: Cilindro ===\n";
$r = (float) readline("Ingrese el radio (R): ");
$h = (float) readline("Ingrese la altura (H): ");
$areaLateral = 2 * M_PI * $r * $h;
$areaTotal = 2 * M_PI * $r * ($h + $r);
$volumen = M_PI * pow($r, 2) * $h;
echo "Área lateral: " . round($areaLateral, 2) . "\n";
echo "Área total: " . round($areaTotal, 2) . "\n";
echo "Volumen: " . round($volumen, 2) . "\n";
