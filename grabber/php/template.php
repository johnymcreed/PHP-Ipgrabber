<?php
include_once "info.php";

/** TEMPLATE: HTML */
$template_html     = ("<!DOCTYPE html>
<html lang='en'>
<head>
<title> $ip </title>    
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta content='text/html;charset=utf-8' http-equiv='Content-Type'>
<meta content='utf-8' http-equiv='encoding'>
</head>
<body>
<center>
<h2> Document of <small>$ip</small></h2>
<div style='width: 58rem !important;'>
This was logged $date_lg, and has been generated automatically by our IP grabber using HTTPS and SV, CF to get there information 
this can usually not be completely correct but we don't compain.
</div>
<br>
<h4> User Information</h4>
<small>
<pre id='pre-colored-dark'>
<b> User Unique Id</b>:     $id
<b> Origin Location</b>:    $country, $region, $city.
<b> Geo Location</b>:       $lat, $lon
<b> Server Agent</b>:       $agent
<b> Browser Agent</b>:      $browser
<b> Operating System</b>:   $system
<b> Connection Info</b>:    $zip, $isp
<b> Https Acceptions</b>:   $accept
<b> User Local Port</b>:    $port
<b> User Exact Date</b>:    $date_sr / $date_lg / $date_st
</pre>
</small>
</center>
</body hidden>
</html>");
?>