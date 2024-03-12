<?php

class Seka {
    private $nuo;
    private $iki;

    public function __construct($nuo, $iki) {
        $this->nuo = $nuo;
        $this->iki = $iki;
    }

    public function skaiciavimai() {
        $max = 0;
        $min = 10000000000000;
        $maxs = 0;
        $mins = 0;
        $d = 0;

        for ($a = $this->nuo; $a <= $this->iki; $a++) {
            $y = $a;
            echo "skaičius: <b>$y</b> <br>";

            $i = 0;
            while ($y != 1) {
                if ($y % 2 == 0) 
                    $y = $y / 2;
                else 
                    $y = $y * 3 + 1;
                
                echo "sus sk: $y <br>";
                $i++;

                if ($y > $d) {
                    $d = $y;
                }
            }
            echo "<b>Iteracijų:</b> $i<br>";
            echo "<b>Didžiausias skaičius:</b> $d <br><br>";

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
}

if (!isset($_POST["nuo"])) {
    echo "Neįrašytas kintamasis";
    header('location:antrasp.html');
} else {
    $nuo = $_POST["nuo"];
    $iki = $_POST["iki"];

    $seka = new Seka($nuo, $iki);
    $seka->skaiciavimai();
}

?>