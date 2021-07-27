<?php
    //ALAP FÜGGVÉNYEK
    echo "Alapvető szöveg függvények:<br />";
    $str = "Hello World";

    echo "Szöveg = ". $str ."<br />";

    echo "strlen(".$str.") = " . strlen($str) . "<br />";
    echo "str_word_count(".$str.") = " . str_word_count($str) . "<br />";
    echo "strrev(".$str.") = " . strrev($str) . "<br />";

?>

<?php
    //PALINDROME FUNCTION
    echo "<br />Palindrome function:<br />";
    function palindrome($str){
        if($str == strrev($str)){
            return true;
        }
        return false;
    }

    $str = "radar";

    if(palindrome($str)){
        echo "A $str palindroma.<br />";
    }else{
        echo "A $str nem palindroma.<br />";
    }
?>

<?php
    //KERESÉS SZÖVEGBEN
    echo "<br />Keresés szövegben:<br />";
    $str = "Hello World!";

    echo "Szöveg = ". $str ."<br />";

    echo 'strpos('.$str.',"World") = '. strpos($str,"World") ."<br />";
    echo 'strpos('.$str.',"World",7) = '. strpos($str,"World",7) ." nincs eredmény (nem fordul elő a szövegben a keresett szó)<br />";
?>

<?php
    //MÓDOSíTÁS SZÖVEGBEN
    echo "<br /> Szöveg módosítás:<br />";
    $str = "Hello World!";

    echo "Szöveg = ". $str ."<br />";

    echo "strtolower($str) = ". strtolower($str) ."<br />";
    echo "strtoupper($str) = ". strtoupper($str) ."<br />";
    echo 'str_replace("World","Pisti",$str) = '. str_replace("World","Pisti",$str) ."<br />";

    $code = "ABCDE12345";
    echo "str_shuffle($code) = ". str_shuffle($code) ." (Összekeveri a karaktereket)<br />";
    echo "substr($code,0,5) = ". substr(str_shuffle($code),0,5) ." (A szöveg karaktereit választja ki 0-tól 5-ig, valamint előtte a shuffle függvény megkeverte a karaktereket)<br />";
?>

<?php
    //HASONLÓSÁG
    echo "<br />Hasonlítás:<br />";

    $str1 = "Szeretem a csokit, de hízlal";
    $str2 = "Szeretem az almát, mert egészséges";

    echo "Szöveg1 = ". $str1 ."<br />";
    echo "Szöveg2 = ". $str2 ."<br />";

    similar_text($str1,$str2,$result);
    echo "similar_text($str1,$str2,$result)<br />Hasonlóság %-ban (result) = ". $result ."<br />";
?>
