<!doctype html>
<html lang="en">
<head>
    <title>Example</title>
</head>
<body>
    This is an example it's not actually gonna get your ip since it's a static page, <br>
    go to dump/ to see the generated ip when you run this on a PHP server like apache.
    <br><br> 
    <?php 
        include_once "grabber/php/arrayinfo.php";
        echo "as you can see <a href='dump/$ip.html'> here </a>";
    ?>
</body>
</html>
<?php
    // This will load after all that above
    // require the bundle file
    require "grabber/bundle.php";
?>