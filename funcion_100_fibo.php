<?php
// Función para calcular los primeros N números de Fibonacci
function fibonacci($cantidad) {
    // Definir los dos primeros números de la serie
    $fib1 = 0;
    $fib2 = 1;

    // Crear un array para almacenar la serie
    $serie = [$fib1, $fib2];

    // Bucle para calcular el resto de los números
    for ($i = 3; $i <= $cantidad; $i++) {
        $fib_next = $fib1 + $fib2; // El siguiente número de la serie
        $serie[] = $fib_next;      // Añadir el número al array

        // Actualizar las variables para la siguiente iteración
        $fib1 = $fib2;
        $fib2 = $fib_next;
    }

    // Retornar el array completo con los números de Fibonacci
    return $serie;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie de Fibonacci</title>
</head>
<body>
    <h1>Los primeros 100 números de la serie de Fibonacci</h1>
    
    <?php
    // Incluir el archivo que contiene la función Fibonacci (si lo guardaste en otro archivo, usa 'include')
    // include 'fibonacci_funcion.php';

    // Llamar a la función y obtener los 100 primeros números
    $fibonacci_serie = fibonacci(100);

    // Imprimir los números en una lista simple
    echo "<ul>";
    foreach ($fibonacci_serie as $numero) {
        echo "<li>$numero</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
