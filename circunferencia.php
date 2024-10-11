<html>
    <head></head>
    <body>

<?php 

#CIRCUNFERENCIA

    const PI = 3.14;
    $radio = 12;
    $a = PI*$radio**2;
    echo "<h2>Para un círculo de radio= ", $radio, '</h2>';
    echo "<h2>El area de la circunferencia es: ", $a, '</h2>';
    echo "<h2>La longuitud del circulo es:  ", 2*PI*$radio, '</h2>';
?>

<?php 

#CALCULADORA

    $num1 = 4;
    $num2 = 3;

    echo "<h2>SUMA: ", $num1 + $num2, '</h2>';
    echo "<h2>RESTA: ", $num1 - $num2, '</h2>';
    echo "<h2>MULTIPLICACION: ", $num1 * $num2, '</h2>';
    echo "<h2>DIVISION: ", $num1 / $num2, '</h2>';
    echo "<h2>MODULO: ", $num1 % $num2, '</h2>';
    echo "<h2>POTENCIA: ", $num1 ** $num2, '</h2>';


?>

<?php 

#SALUDO

    $saludo1 = "Buenos ";
    $saludo2 = "días";

    echo "<h1>SALUDO: ",  $saludo1,  $saludo2, '</h2>';
?>
    </body>
</html>