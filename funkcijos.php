<?php

function skaiciavimas($x) {
    $d = $x; 
    $iteracijos = 0;
    while ($x != 1) {
        if ($x % 2 == 0) {
            $x = $x / 2;
        } else {
            $x = $x * 3 + 1;
        }
        echo "sus sk: $x <br>";
        $iteracijos++;
        if ($x > $d) {
            $d = $x;
        }
    }
    return array('iteracijos' => $iteracijos, 'didziausias' => $d); 
}

function intervalas($nuo, $iki) {
    $max = 0;
    $min = 100000000000;
    $maxs = 0;
    $mins = 0;

    for ($i = $nuo; $i <= $iki; $i++) {
        $x = $i;
        echo "skaičius: <b>$x</b> <br>";
        $rezultatas = skaiciavimas($i);
        $iteracijos = $rezultatas['iteracijos'];
        if ($iteracijos > $max) {
            $max = $iteracijos;
            $maxs = $i;
        }
        if ($iteracijos < $min) {
            $min = $iteracijos;
            $mins = $i;
        }
        $d = $rezultatas['didziausias'];
        echo "<b>Iteracijų:</b> $iteracijos<br>";
        echo "<b>Didžiausias skaičius:</b> $d <br><br>";
    }

    return array(
        'max' => $max,
        'maxs' => $maxs,
        'min' => $min,
        'mins' => $mins
    );
}

?>