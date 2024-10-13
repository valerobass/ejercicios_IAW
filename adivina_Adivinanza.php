<?php

    function adivina($numero_introducido){
        $numero_generado = rand(0, 1000);
        $numeros_intentados[] = $numero_introducido;

            if ($numero_generado = $numero_introducido){

                echo "El número", $numero_introducido, "es el que  buscábamos. Enhorabuena";
            }
            elseif ($numero_generado > $numero_introducido){

                echo "El número", $numero_introducido, "es menor que el número que buscamos";

            }
            else {

                echo "El número", $numero_introducido, "es mayor que el número que buscamos";

            }
            echo "Estos son los intentos realizados ", count($numeros_intentados);
            echo "Estos son los números que he intentado ",$numeros_intentados, ",";
           
            return $numero_introducido;


    }

?>