<?php
    echo "Tömbök<br />";
    $number = array(0, 1, -24, 21, 13);
    $colour = array("fehér", "fekete", "piros", "zöld", "kék");
    $people = array("Péter"=>35, "Pista"=>42, "Jolika"=>30);
    echo $number[0]."<br />";
    echo $colour[2]."<br />";
    echo $people["Pista"]."<br />";
?>

<?php
    //For
    echo "<br />For ciklus<br />";
    /*  Tömb méretének lekérdezése:
        count()
        sizeof()
    */
    $colours = array("fehér", "fekete", "piros", "zöld", "kék");
    for($i = 0; $i < count($colours); $i++){
        echo $colours[$i]."<br />";
    }
?>

<?php
    //While
    echo "<br />While ciklus<br />";
    $i = 0;
    while($i < count($colours)){
        echo $i."<br />";
        $i++;
    }
?>

<?php
    //Do-while
    echo "<br />Do-while ciklus<br />";
    $i = 0;
    do{
        echo $i."<br />";
        $i++;
    }while($i < sizeof($colours))
?>

<?php
    //For-each
    echo "<br />For-each ciklus<br />";
    $cars = array("Skoda", "BMW", "Ford", "Toyota", "Mercedes-Benz");
    foreach($cars as $c){
        echo $c."<br />";
    }

    $people = array("Péter"=>"munkás", "Pista"=>"nyugdíjas", "Bea"=>"gyerek");
    echo "<br />Key-value pairs<br />";
    foreach($people as $key=>$value){
        echo "K = ".$key." V = ".$value."<br />";
    }
?>
