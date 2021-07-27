<?php
    $name_tag = "Write here your name";
    $enter_btn = "Next";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1>PHP tag HTML kódon belül.</h1>
        Name: <input type="text" value="<?php echo $name_tag."..."; ?>" />
        <input type="button" value="<?php echo $enter_btn; ?>" />
    </body>
</html>