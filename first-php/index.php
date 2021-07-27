<!DOCTYPE html>
<html>
    <head>
        <title>PHP site</title>
    </head>
    <body>
        <h1>HTML text.</h1>
        <?php
            echo '<p>PHP echo text.<br/></p>';
            print "<p>PHP print text.<br/></p>";

            print("<p>PHP print() function text.<br/></p>");
            echo("<p>PHP echo() function text.<br/></p>");

        ?>
        <h1>Valtozók</h1>
        <?php
            $alma = 2;
            $barack = 3;

            echo $alma."+".$barack."=".($alma + $barack)."<br/>";

            $text1 = "Szöveg";
            $boolean = true;

            echo $text1." kiirva.<br/>";
            echo $boolean;

        ?>
    </body>
</html>