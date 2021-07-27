<?php
    echo "Sort function<br />";
    function printarr($arr){
        for($i = 0; $i < count($arr); $i++){
            echo $arr[$i]."<br />";
        }
    }   

    $array = array(2,41,3,-12,34,-2);

    echo "<br />Array:<br />";
    printarr($array);

    sort($array);
    echo "<br />Sorted Array:<br />";
    printarr($array);

    rsort($array);
    echo "<br />Resorted Array:<br />";
    printarr($array);
?>

<?php
    echo "<br />Key-value array sort<br />";
    function printarr_key_value($arr){
        foreach($arr as $key=>$value){
            echo $key."=>".$value."<br />";
        }
    }
    $array = array("B"=>33, "C"=>25, "A"=>18);
    echo "<br />Sorted of VALUE array ( asort() ):<br />";
    asort($array);
    printarr_key_value($array);

    echo "<br />Resorted of VALUE array ( arsort() ):<br />";
    arsort($array);
    printarr_key_value($array);

    echo "<br />Sorted of KEY array ( ksort() ):<br />";
    ksort($array);
    printarr_key_value($array);

    echo "<br />Resorted of KEY array ( krsort() ):<br />";
    krsort($array);
    printarr_key_value($array);
?>