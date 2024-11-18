<?php
$filas = 5;

for ($i = 1; $i <= $filas; $i++) {
    
    for ($j = $i; $j < $filas; $j++) {
        echo "&nbsp;";
    }

    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }

    echo "<br>";
}
?>
