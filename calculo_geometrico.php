<?php

//a) función cuadrado perímetro(lado)

function cuadrado_perimetro ($lado){
    $perimetro =  4 * $lado;

    return $perimetro;

}

cuadrado_perimetro(5);

echo $perimetro
?>

<?php

//b) función cuadrado area(lado)

function cuadrado_area ($lado1){
    $area =  $lado * $lado;

    return $area;

}

cuadrado_area(5);

echo $area
?>

<?php

//c) funcion perimetro rectangulo(lado1, lado2)

function perimetro_rectangulo ($lado1, l$ado2){
    $perimetro_rec =  (2 * $lado1)  + (2 * $lado2);

    return $perimetro_rec;

}

perimetro_rectangulo(5,10);


echo $perimetro_rec
?>


<?php

//d) funcion area rectangulo(lado1, lado2)

function area_rectangulo ($lado1, l$ado2){
    $area_rec =  $lado1 * $lado2;

    return $area_rec;

}

area_rec(5,10);


echo $area_rec
?>

<?php

//e) funcion triangulo rectangulo perimetro (base, altura)

function triangulo_rectangulo_perimetro ($base, l$altura){

    $hipotenusa = sqrt(($base * $base) + ($altura * $altura));
    $trian_rec_peri = $base + $altura + $hipotenusa;


    return $trian_rec_peri;

}

triangulo_rectangulo_perimetro(20,5)

?>

<?php

//f) funcion triangulo rectangulo area(base, altura)

function triangulo_rectangulo_area ($base, l$altura){

    $trian_rec_area = ($base + $altura) / 2;


    return $trian_rec_area;

}

triangulo_rectangulo_area(20,5)

?>


<?php

//h) funcion triangulo equilatero area(lado)

function triangulo_equilatero_area ($lado){

    $trian_equi_area = ($lado * $lado) / 2;


    return $trian_equi_area;

}

triangulo_equilatero_area(20)

?>


