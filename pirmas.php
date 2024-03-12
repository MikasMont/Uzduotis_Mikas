<?php
$i = 0;
echo "Pirma kodo dalis <br>";
for($a = 18; $a <=18; $a++){
	$y = $a;
	echo "<b>skaicius:</b> $y <br>";
	while ($y != 1){
	if($y%2 == 0) $y= $y/2;
		else $y = $y * 3 + 1;
	echo "sk: $y <br>";
	$i++;
	}
	echo "<b>Iteracijų:</b> $i";
}
?>