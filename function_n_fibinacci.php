<?php
// Función que imprime los N primeros números de Fibonacci
function Fibonacci($N) {
    // Verificar que el número N sea mayor a 0
    if ($N <= 0) {
        echo "Por favor, introduce un número mayor que 0.\n";
        return;
    }

    // Definir los dos primeros números de la serie
    $fib1 = 0;
    $fib2 = 1;

    // Imprimir los primeros números
    if ($N >= 1) echo $fib1 . "\n";
    if ($N >= 2) echo $fib2 . "\n";

    // Bucle para calcular el resto de los números de la serie
    for ($i = 3; $i <= $N; $i++) {
        $fib_next = $fib1 + $fib2; // El siguiente número es la suma de los dos anteriores
        echo $fib_next . "\n";     // Mostrar el número

        // Actualizar las variables para la siguiente iteración
        $fib1 = $fib2;
        $fib2 = $fib_next;
    }
}
?>
