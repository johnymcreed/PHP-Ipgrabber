<?php
$start = "grabber/php/builder.php"; // initalizer
$client = $_SERVER['REMOTE_ADDR']; // ip address
$banned = $client; // just define $banned for client (switch case)

/**
this will get information from client and
depending on the ip will continue or die

E.G:
    case "banned ip":
        die();
*/

switch ($banned) {
default:
    require $start;
}
?>