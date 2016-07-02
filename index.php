<?php



function print2DArray($arr){
    echo "<pre>";
    foreach($arr as $subarr){
        
        foreach($subarr as $val){
            
            echo ($val<10 ? $val."   " : $val."  ");
            
        }
        
        echo "<br>";
        
    }
    echo "</pre>";
}


$grid = array();




for($n = 0; $n < 37; $n++){
    $r = intval(sqrt($n));
    $rSquared = pow($r, 2);

    $x = ($n<$rSquared+$r ? $n-$rSquared: $r);
    $y = ($n<$rSquared+$r ? $r : $rSquared+ (2*$r)-$n);

    $grid[$x][$y] = $n;
    
    $m = max($x,$y);
    $mSquared = pow($m,2);

    $orig = ($x >= $y ? $mSquared+2*$m-$y : $x+$mSquared);
    
    
    
}

print2DArray($grid);

?>
