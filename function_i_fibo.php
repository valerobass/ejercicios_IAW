<?php
// Función que devuelve el valor del N-ésimo elemento de la serie de Fibonacci
function iFibonacci($N) {
    // Verificar si el valor de N es válido
    if ($N <= 0) {
        return "Por favor, introduce un número mayor que 0.";
    }

    // Definir los dos primeros números de la serie
    $fib1 = 0;
    $fib2 = 1;

    // Caso especial para N = 1 (primer elemento de la serie)
    if ($N == 1) {
        return $fib1;
    }

    // Caso especial para N = 2 (segundo elemento de la serie)
    if ($N == 2) {
        return $fib2;
    }

    // Calcular el N-ésimo número de la serie de Fibonacci
    for ($i = 3; $i <= $N; $i++) {
        $fib_next = $fib1 + $fib2;  // El siguiente número es la suma de los dos anteriores
        $fib1 = $fib2;              // Actualizamos los valores para el siguiente ciclo
        $fib2 = $fib_next;
    }

    // Retornar el número en la posición N
    return $fib2;
}

// Ejemplo de uso
$N = 10; // Puedes cambiar este valor para obtener otro elemento de la serie
echo "El elemento en la posición $N de la serie de Fibonacci es: " . iFibonacci($N) . "\n";
?>
