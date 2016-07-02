<html>

    <?php
        if(isset($_GET['value'])){
            echo "<script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
            <script>";
            echo "function showText(id,delay){
                var elem=document.getElementById(id);
                setTimeout(function(){elem.style.visibility='visible';},delay*100)
            }
                window.onload=function(){";
            for($n = 0; $n <= $_GET['value']; $n++){
                echo "
                    showText('id".$n."',".$n.");
                
                ";
            }
            echo "
            }
                    </script>";
        }
    ?>
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
            if(!isset($val)){
                echo "     ";
            } else {
                echo "<span style='visibility:hidden' id='id".$val."'>".$val."</span>";
                if($val < 10){
                    echo "    ";
                } else if ($val < 100){
                    echo "   ";
                } else if($val < 1000){
                    echo "  ";
                } else if($val < 10000){
                    echo " ";
                }
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

    print2DArray($grid);
} else {
    echo "<br>Please input a number...";
    
}
    //see it in action at www.1cec0ld.net/square
?>
