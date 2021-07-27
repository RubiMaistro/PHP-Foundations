<?php 
    echo "Elágazások:<br/>";
    if(date("H" < 10)){
        echo "Jó reggelt!<br />";
    }else if(date("H" < 20)){
        echo "Szép napot!<br />";
    }else{
        echo "Szép estét!<br />";
    }
?>

<?php
    echo "<br/>Operátorok:<br/>";
    $a = true;
    $b = 1;
    $c = 1;
    $d = 2;

    if($a == $b){
        echo $a." == ".$b." =? Egyenlő a változók értéke.<br />";
    }
    if($a === $b){
        echo $a." === ".$b." = ? Egyenlő a változók értéke és típusuk megegyezik.<br />";
    }else if($b === $c){
        echo $b." === ".$c." = ? Egyenlő a változók értéke és típusuk megegyezik.<br />";
    }else{
        echo $b." === ".$c." = ? Nem egyenlő.<br />";
    }

    if($c != $d){
        echo $c." != ".$d." = ? TRUE. <br />";
    }
    if($c <> $d){
        echo $c." <> ".$d." = ? TRUE. ( <> equals != )<br />";
    }
?>

<?php
    echo "<br/>Művelet operátorok:<br />";
    $x = 0;
    echo "Érték: X = ".$x."<br />";
    $x++;
    echo "Érték: X++ = ".$x." (increase out of echo)<br />";

    $y = 0;
    echo "Érték: Y = ".$y."<br />";
    echo "Érték: Y++ = ".$y++." (increase in echo) (First echo) <br />";
    echo "Érték: Y = ".$y."<br />";
    echo "Érték: ++Y = ".++$y." (increase in echo) (First increase) <br />";

    $alma = "alma";
    $korte = "körte";

    echo "<br />";
    echo "Érték: A = ".$alma."<br />";
    echo "Érték: B = ".$korte."<br />";

    echo "Művelet konkatenáció: A .= B<br />";
    $alma .= " ".$korte;

    echo "Érték: A = ".$alma."<br />";
    echo "Érték: B = ".$korte."<br />";

?>