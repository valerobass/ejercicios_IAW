
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//1. Dado un número, devolver su valor absoluto como una salida.//

    $n = -13;
    if ($n<0){
        $n = $n*-1;
        echo $n;  
    }
    else{
        echo $n;
    }
?>

<?php

//2. Dados dos números, devolver un mensaje que indique el mayor de los dos.//
    echo "<br>";
    $n1 = 4;
    $n2 = 6;

    if ($n1 > $n2){
        echo $n1,  " es mayor que ", $n2; 
    }
    else{
        echo $n2,  " es mayor que ", $n1; 
    }

?>

<?php

//3. Mejora el código anterior para mostrar si ambos números son iguales.//
echo "<br>";
$n1 = 6;
$n2 = 6;
    if ($n1 = $n2){

        echo $n1, " es igual a ", $n2;
    }

        elseif ($n1 > $n2){
            echo $n1,  " es mayor que ", $n2; 
        }
        else{
             echo $n2,  " es mayor que ", $n1; 
}

?>

<?php

//4. Dados dos números, devolver un mensaje para mostrarlos ordenados del más pequeño al más grande.//
echo "<br>";
$n1 = 6;
$n2 = 3;

    if ($n1 > $n2){
        echo $n1, " ", $n2;
    }
    else{
        echo $n2, $n1;
    }

?>

<?php

/*5. Dado un año, devolver un mensaje para indicar si es bisiesto o no. Los años bisiestos son
aquellos que son divisibles por 4, excepto aquellos que son divisibles por 100 sin ser por
400.*/
echo "<br>";
$year = 2006;

if ($year %100 == 0 && $year %400 != 0 ){
    echo $year, " el año no es bisiesto ";
}
elseif ($year%4 == 0) {
    echo  "el año es bisiesto";
}
else{
    echo  "el año no es bisiesto";
}

?>

<?php

/* 
6. Devolver la suma de los números de 1 al 100.
*/

echo "<br>";
$n1=0; 
for ($c=1; $c <=100 ; $c++){
    $n1= $n1 + $c;
} 
echo $n1;

?>

<?php

//7.Devuelve el factorial de 10.

echo "<br>";
$total=1;
for ($factorial=1; $factorial<=10; $factorial++){

    $total = $total*$factorial;
}

echo $total;

?>

<?php

//8. Dado un entero, devolver todos sus divisores.

echo "<br>";
$entero = 20;
for ($i=1; $i<=$entero; $i++){
    if($entero % $i == 0){
        echo $i, ",";
    }
}

?>

<?php

//9. Dado un entero, devolver un mensaje para señalar si es primo o no.
echo "<br>";

$num = 10;
for ($v=2; $v<=$num -1; $v++){
    if ($num %$v ==0){
    echo $num , "es primo";
    }
}



?>

<?php

//9. Fibonaci.
echo "<br>";

$num = 10;
for ($v=2; $v<=$num -1; $v++){
    if ($num %$v ==0){
    
    }
}



?>
    
</body>
</html>


