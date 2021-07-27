<?php
    echo "Műveleti függvények:<br />";
    $a = -5;
    $b = 4;
    $c = 2.43;
    $d = 3.78;

    $x = array(1,2,-3,4,12,-23,4);

    echo "abs($a) = " . abs($a) . "<br />";
    echo "round($c) = " . round($c) . "<br />";
    echo "floor($d) = " . floor($d) . "<br />";
    echo "ceil($d) = " . ceil($d) . "<br />";

    echo "sqrt($b) = " . sqrt($b) . "<br />";
    echo "sqrt(".pi().") = " . sqrt(pi()) . "<br />";
    echo "max(1,2,-3,4,12,-23,4) = " . max(1,2,-3,4,12,-23,4) . "<br />";
    echo "min(1,2,-3,4,12,-23,4) = " . min($x) . "<br />";

    echo "sin(pi/2) = " . sin(pi()/2) . "<br />";
    echo "cos(pi/2) = " . cos(pi()/2) . "<br />";
    echo "tan(pi/2) = " . tan(pi()/2) . "<br />";
    
    echo "log10(100) = " . log10(100) . "<br />";
?>

<?php
    echo "<br />Logikai függvények:<br />";
    echo "is_finite(): ";
    $x = 2;
    if(is_finite($x)){
        echo "Létezik<br />";
    }else{
        echo "Nem létezik<br />";
    }
    
    echo "is_infinite(): ez előző ellentéte<br />";
?>

<?php 
    echo "<br />Számok átalakítása (Számrendszerek):<br />";

    echo 'hexdec("fff123") = ' . hexdec("fff123") . "<br />";
    echo 'dechex("16773411") = ' . dechex("16773411") . "<br />";
    echo 'decoct("120") = ' . decoct("120") . "<br />";
    echo 'octdec("170") = ' . octdec("170") . "<br />";
    echo 'decbin("123") = ' . decbin("123") . "<br />";
    echo 'bindec("111") = ' . bindec("111") . "<br />";
?>