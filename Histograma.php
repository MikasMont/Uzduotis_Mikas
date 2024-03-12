<?php
require_once 'Seka.php';

class Histograma extends Seka {

    public function __construct($nuo, $iki) {
        $this->nuo = $nuo;
        $this->iki = $iki;
    }

    public function histo_skai() {
        echo "<h2>Iteracijų histograma:</h2>";
        $this->atvaizhisto();
    }

    public function skaiciavimai() {
        $max = 0;
        $min = 10000000000000;
        $this->maxs = 0;
        $this->mins = 0;
        $this->d = 0;

        for ($a = $this->nuo; $a <= $this->iki; $a++) {
            $y = $a;
            echo "skaičius: <b>$y</b> <br>";

            $i = $this->iteracijos($y);

            echo "<b>Iteracijų:</b> $i<br>";
            echo "<b>Didžiausias skaičius:</b> $this->d <br><br>";

            $max = $this->maxsk($i, $max, $a);
            $min = $this->minsk($i, $min, $a);

            $this->histogra($i);
        }

        echo "Didžiausias iteracijų skaičius: $max, kurį pasiekė skaičius $this->maxs<br>";
        echo "Mažiausias iteracijų skaičius: $min, kurį pasiekė skaičius $this->mins<br>";

        echo "<h2>Iteracijų histograma:</h2>";
        $this->atvaizhisto();
    }

    public function maxsk($i, $max, $a) {
        if ($i > $max) {
            $max = $i;
            $this->maxs = $a;
        }
        return $max;
    }

    public function minsk($i, $min, $a) {
        if ($i < $min) {
            $min = $i;
            $this->mins = $a;
        }
        return $min;
    }
}

if (!isset($_POST["nuo"])) {
    echo "Neįrašytas kintamasis";
    header('location:Spaus.html');
} else {
    $nuo = $_POST["nuo"];
    $iki = $_POST["iki"];

    $histograma = new Histograma($nuo, $iki);
    $histograma->skaiciavimai();

}

?>