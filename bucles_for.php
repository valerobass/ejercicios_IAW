<?php
echo "<br>";
for ($x=0; $x <= 10; $x++) {
echo $x, " ";
}
?>


<?php
echo "<br>";
for ($c=50; $c <= 80; $c = $c+2) {
echo $c, " ";
}
?>

<?php
echo "<br>";
for ($c=17; $c >= -17; $c--) {
echo $c, " ";
}
?>

<?php
echo "<h3>TABLA DEL 6: </h3>";
for ($c=1; $c <=10 ; $c++) {
echo "6 x ", $c, "=",  (6*($c)),"<br>";
}
?>

//bucles while//


<?php

//bucles while//
    echo "<br>";
    $x= 0;
    while  ($x <= 10) {
    echo $x, " "; 
    $x++; 
}
?>

<?php
    echo "<br>";
    $x = 50;
    while ($x <= 80){
        echo " ", $x;
        $x= $x +2;

    }
?>


<?php
    echo "<br>";
    $c = 17;
        while ($c >= -17) {
        echo $c, " ";
        $c--;
}
?>


<?php
    echo "<h3>TABLA DEL 6: </h3>";
    $c=1;
    while ($c <=10 ) {
        echo "6 x ", $c, "=",  
        (6*($c)), "<br>";
        $c++;
}
?>


<?php

//bucles foreach//
    echo "<br>";
    $resultado = 0;
    $ventas = array(10, 11.5, 2.5, 14.5, 16, 34.6, 12, 14, 23.4, 3, 54, 23);
    foreach ($ventas as $dia){
        $resultado += $dia;
    }

    echo "el total de ventas es: ", $resultado;

?>

