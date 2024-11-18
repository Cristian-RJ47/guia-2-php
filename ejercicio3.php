<?php

$msj = "Bootcamp FSJ 24-B Kodigo";

$array= str_split($msj);

print_r($array);

echo "<br>";

foreach (count_chars($msj, 1) as $i => $val) {
    echo "El caracter:  \"" , chr($i) , "\" se repite: $val <br>";
 }

?>