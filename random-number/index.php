<?php
    mt_srand(mktime(0));
    echo "Tízjegyű random szám (mt_rand()) = ". 
        mt_rand() ."<br />";
    echo "0-tól 10-ig random szám (mt_rand(0,10)) = ". 
        mt_rand(0,10) ."<br />";
    echo "0-tól 10-ig random tört szám (mt_rand()%10 + (mt_rand()%10)/100) = ". 
        mt_rand()%10 + (mt_rand()%10)/100 ."<br />";
?>