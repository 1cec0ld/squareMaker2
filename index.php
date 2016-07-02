<?php


for($n = 0; $n <37; $n++){

$r = intval(sqrt($n));
$s = pow($r, 2);

echo $n." -> (".
($n<$s+$r ? $n-$s: $r)
.", ".
($n<$s+$r ? $r : $s+ (2*$r)-$n)
.") <br>";

}

?>
