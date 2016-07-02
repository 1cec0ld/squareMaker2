<?php


for($n = 0; $n <37; $n++){

$r = intval(sqrt($n));
$s = pow($r, 2);

$x = ($n<$s+$r ? $n-$s: $r);
$y = ($n<$s+$r ? $r : $s+ (2*$r)-$n);

$orig = ($x < $y ? 'Tba' : 'tba');

echo "f(".$n.") -> (".$x.", ".$y."); f(".$x.", ".$y." -> ".$orig." <br>";

}

?>
