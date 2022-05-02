<?php
include_once "info.php";
include_once "template.php";

// this builds the html path
$htmldump = fopen("dump/$ip.html", "x");

// exist?
if ($htmldump == FALSE)
    exit;

fwrite($htmldump, $template_html);
fclose($htmldump);
?>