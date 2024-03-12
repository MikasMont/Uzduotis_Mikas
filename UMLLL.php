<?php
class Seka {
    public $nuo;
    public $iki;
    public $maxs;
    public $mins;
    public $d;
    public $his = [];

    public function iteracijos(&$y) {
        $i = 0;
		$this->d = 0;
        while ($y != 1) {
            if ($y % 2 == 0) 
                $y = $y / 2;
            else 
                $y = $y * 3 + 1;
            
            echo "sus sk: $y <br>";
            $i++;

            if ($y > $this->d) {
                $this->d = $y;
            }
        }
        return $i;
    }

    public function histogra($i) {
        if (isset($this->his[$i])) {
            $this->his[$i]++;
        } else {
            $this->his[$i] = 1;
        }
    }

    public function atvaizhisto() {
        foreach ($this->his as $iteracija => $kartai) {
            echo "$iteracija iteracijų  pasikartojo $kartai kartą<br>";
        }
    }
}

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
    header('location:UMLLL.html');
} else {
    $nuo = $_POST["nuo"];
    $iki = $_POST["iki"];

    $histograma = new Histograma($nuo, $iki);
    $histograma->skaiciavimai();
	    
}
?>