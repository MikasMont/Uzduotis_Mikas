<?php

function iteracijos($s){
    $i = 0;
    $d = 0;
    $y = $s;
    
    while ($y != 1){
        if($y % 2 == 0) 
            $y = $y / 2;
        else 
            $y = $y * 3 + 1;
		echo "sus sk: $y<br>";
        $i++;
        
        if ($y > $d) {
            $d = $y;
        }
    }
    
    return array($i, $d, $y);
}

function rezai($a, $i, $d){
    echo "skaičius: <b>$a</b> <br>";
    echo "Iteracijų: <b>$i</b> <br>";
    echo "Didžiausias skaičius: <b>$d</b> <br><br>";
}

function maxmin(){
    $max = 0;
    $min = 10000000000000;
    $maxs = 0;
    $mins = 0;
	 

    echo "Antra kodo dalis <br>";
    for($a = 10; $a <=100; $a++){
        $rez = iteracijos($a);
        $i = $rez[0];
        $d = $rez[1];
        rezai($a, $i, $d);
        
        if ($i > $max) {
            $max = $i;
            $maxs = $a;
        }

        if ($i < $min) {
            $min = $i;
            $mins = $a;
        }
    }

    echo "Didžiausias iteracijų skaičius: $max, kurį pasiekė skaičius $maxs<br>";
    echo "Mažiausias iteracijų skaičius: $min, kurį pasiekė skaičius $mins<br>";
}

maxmin();

?>


