<?php
    //2D tömb
    $autok = array(
        array("ADS 124", "Mercedes-Benz", 4),
        array("SDG 173", "Ford", 4),
        array("POP 312", "BMW", 4),
        array("BOSS 07", "Lamborghini", 2)
    );

    //Kiíratár egy táblázatban
    echo '<table border = "2">';
    echo "<tr><th>Rendszám: </th> <th>Típus: </th> <th>Ajtók száma: </th></tr>";
    for($i = 0; $i<count($autok); $i++){
        echo "<tr>";
        for($j = 0; $j<count($autok[$i]); $j++){
            echo "<td><center>".$autok[$i][$j]."</center></td>";
        }
        echo "</tr>";
    }
    echo '</table>'
?>