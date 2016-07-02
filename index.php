<html>
    <form action='index.php' method='GET'>
        <input type='number' min='0' max='10000' name='value'> 
        <input type='submit' value='Go'>
    </form>
    <br>
</html>


<?php

function print2DArray($arr){
    echo "<br><br><pre>";
    foreach($arr as $subarr){
        
        foreach($subarr as $val){
            if($val < 10){
                echo $val."    ";
            } else if ($val < 100){
                echo $val."   ";
            } else if($val < 1000){
                echo $val."  ";
            } else if($val < 10000){
                echo $val." ";
            }
        }
        echo "<br>";
    }
    echo "</pre>";
}


if(isset($_GET['value'])){
    $grid = array();

    for($n = 0; $n <= $_GET['value']; $n++){
        $r = intval(sqrt($n));
        $rSquared = pow($r, 2);

        $x = ($n < $rSquared+$r ? $n-$rSquared : $r);
        $y = ($n<$rSquared+$r ? $r : $rSquared+ (2*$r)-$n);

        $grid[$y][$x] = $n;
        
        $m = max($x,$y);
        $mSquared = pow($m,2);

        $orig = ($x >= $y ? $mSquared+2*$m-$y : $x+$mSquared);
    }
    //number values are defined, now fill in the undefined values to complete the square
    for($i = 0; $i < 10; $i++){
        for($j = 0; $j < 10; $j++){
            if(!isset($grid[$i][$j])){
                $grid[$i][$j] = "_";
            }
        }
    }

    print2DArray($grid);
} else {
    echo "<br>Please input a number...";
    
}

?>
