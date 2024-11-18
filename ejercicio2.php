<?php
$numbers = array(6.5,9,-8,-4.0,5,-6,-7.1,8,90);
$suma = 0;


 foreach($numbers as $number) {
    if ( is_int($number) && $number%2 == 0) {
        $suma+=$number;
    }
    echo "Numero:".$number."----  Acumulado:".$suma."<br>";
 }

 echo "LA SUMA DE ENTEROS ES:" . $suma;
 ?>