<?php
    echo "String (void) function<br />";
    function message($name){
        echo $name." love the apple.<br />";
    }

    $someone = "Peter";
    message($someone);
    message("Sarah");
?>

<?php
    echo "<br />Return function<br />";
    function area($a, $b){
        $t = $a * $b;
        return $t;
    }
    function perimeterOfRectangle($a, $b){
        return 2 * ($a + $b);
    }

    $x = 5;
    $y = 6;
    echo "Az x = ".$x." és y = ".$y." téglalap területe ".area($x,$y)." és kerülete ".perimeterOfRectangle($x,$y)."<br />";
?>

<?php 
    echo "<br />Standard value in function<br />";
    function heigh($x = 5){
        echo "The minimum heigh is ".$x.".";
    }

    echo heigh(2)." (Parameter is 2)<br />";
    echo heigh()." (Not defined parameter, standard is 5)<br />";
    echo heigh(10)." (Parameter is 10) <br />";
?>

<?php
    echo "<br />The quadratic function results<br />";
    function quadric_function_solving_formula($a, $b, $c){
        if($a == 0 && $b == 0){
            echo "Not a function.<br />";
        }else if($a == 0){
            $x = -1 * $c / $b;
            echo "The function is not quadratic. ( X=$x )<br />";
        }else{
            $D = $b*$b - 4*$a*$c;
            if($D > 0){
                $x1 = (-1 * $b + sqrt($D)) / 2*$a;
                $x2 = (-1 * $b - sqrt($D)) / 2*$a;
                echo "The function have two result: x1 = $x1, x2 = $x2.<br />";
            }else if($D == 0){
                $x = -1 * $b / 2 * $a;
                echo "The function have one result: x = $x<br />";
            }else{
                echo "The function not have real number result.<br />";
            }
        }
    }
    // x1 = 2, x2 = 1
    quadric_function_solving_formula(1,-3,2); 
    // x1 = 1, x2 = -3
    quadric_function_solving_formula(1,2,-3); 
?>
