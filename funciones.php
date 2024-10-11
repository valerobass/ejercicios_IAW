<?php 

    function datos ($nombre, $ciudad, $año){

     echo $nombre, "nació en ", $ciudad, "en el año ", $año;
    } 
    datos("Alejandro", "Madrid", 2004);
    datos("Patricia", "Valencia", 2006);

?>

<?php
    function saludo($nombre = "compañero") {
    echo    "<div>Encantado de conocerte, ", $nombre, ".</div>";
}
    saludo("Alejandro");
    saludo("Patricia");
    saludo();
?>

<?php
function triple($numero) {
$numero *= 3;
return $numero;
}
$num = 2;
echo triple($num);
echo triple(10);
?>


<?php
function tripl($numero) {
$numero *= 3;
return $numero;
}
$num = 2.75;
echo tripl($num);
echo "";
?>

<?php

/* Tarea
Escribe un programa que, dados los valores de la base y la altura de un rectángulo, utilice una
función para cada una de estas tareas:
● Devolver su área.
● Devolver su perímetro.
● Intercambiar los valores de su base y su altura.
*/


function area($c, $d){
    $r = $c * $d;
    return $r;
}

function perime($b, $a){

    $re = ($b + $a)*2;
    return $re;
}

function inter(&$b, &$a){
    $intermedia = $b;
    $b = $a;
    $a = $intermedia;
}

$b= 20;
$a= 10;

echo area($b, $a);
echo "<br>";
echo perime($b, $a);
echo "<br>";
echo "la base inicial es: ", $b;
inter($b, $a);
echo "la base inicial es: ", $b;

?>

<?php
//arrays



$bebidas = array("Café","Té","Agua","Cerveza","Vino","Refresco");
echo "<h1>BEBIDAS</h1>";

foreach ($bebidas as $b) {
echo "<li>", $b, "</li>";

}



?>

<?php
//arrays

$bebidas = array("Café","Té","Agua","Cerveza","Vino","Refresco");{

echo "Escoja entre estas ", count ($bebidas), " bebidas, donde ", count ($bebidas),  " es el número de elementos de array";
foreach ($bebidas as $b) 
echo "<li>", $b, "</li>";
}


?>

<?php
echo "<br>";
$asignaturas = array("IAW", "SAD", "EIE", "HLC", "SGBD", "ASO");{

    echo "ASIGNATURAS";
foreach ($asignaturas as $b) 
echo "<li>", $b, "</li>";
}

?>

<?php
echo "<br>";
$asignaturas = array("IAW", "SAD", "EIE", "HLC", "SGBD", "ASO");{

    echo "ASIGNATURAS";
for ($i=0; $i < count(value: $asignaturas); $i++) 
echo "<li>", $asignaturas[$i], "</li>";
}

?>

