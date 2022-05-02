<?php
$ip                    = '0.0.0.0';
$ip                    = $_SERVER['REMOTE_ADDR'];
$decode                = file_get_contents("http://ip-api.com/json/$ip");
$decode                = json_decode($decode);
$timezone              = $decode->timezone;
$date_st               = date('d/m/y');
$date_lg               = date('l, F t Y');
$date_sr               = date('r');
$country               = $decode->country;
$region                = $decode->regionName;
$city                  = $decode->city;
$zip                   = $decode->zip;
$lat                   = $decode->lat;
$lon                   = $decode->lon;
$isp                   = $decode->isp;
$id                    = $_SERVER['UNIQUE_ID'];
$agent                 = $_SERVER['HTTP_USER_AGENT'];
$browser               = $_SERVER['HTTP_SEC_CH_UA'];
$system                = $_SERVER['HTTP_SEC_CH_UA_PLATFORM'];
$accept                = $_SERVER['HTTP_ACCEPT'];
$port                  = $_SERVER['REMOTE_PORT'];
?>