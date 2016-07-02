<?php


for($n = 0; $n <37; $n++){

$r = intval(sqrt($n));
$s = pow($r, 2);

$x = ($n<$s+$r ? $n-$s: $r);
$y = ($n<$s+$r ? $r : $s+ (2*$r)-$n);

$m = max($x,$y);
$ms = pow($m,2);

$orig = ($x >= $y ? $ms+2*$m-$y : $x+$ms);

echo "f(".$n.") -> (".$x.", ".$y."); f(".$x.", ".$y.") -> ".$orig." <br>";

}

?>
