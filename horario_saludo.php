<?php
    $h = date("H");

    if ($h <= 12){

        echo "<p>BUENOS DÍAS</p>";
    }
    elseif ((12 < $h) >= 22){
        echo "<p>BUENAS TARDES</p>";

    }
    elseif($h > 22){
        echo "<p>BUENAS NOCHES</p>";

    }
?>
