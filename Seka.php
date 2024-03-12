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
?>