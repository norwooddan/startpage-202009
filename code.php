<?php

// User Location - GeoIP2
require_once("files/geoip2.phar");
use GeoIp2\Database\Reader;
// City DB
$reader = new Reader('files/GeoLite2-City.mmdb');
$record = $reader->city($_SERVER['REMOTE_ADDR']);
$userCity = $record->city->name;

// Openweathermap
$jsonurl = "https://api.openweathermap.org/data/2.5/weather?q=" . $userCity . "&units=imperial&appid=05e8c7e2aa4b598ad62f33c75b2ea1c1";
$json = file_get_contents($jsonurl);
$weather = json_decode($json);
$description = $weather->weather[0]->description;
$description = ucfirst($description);
$descriptionicon = $weather->weather[0]->icon;
$iconurl = "https://openweathermap.org/img/wn/" . $descriptionicon . "@2x.png";
$description2 = $weather->weather[1]->description;
$descriptionicon2 = $weather->weather[1]->icon;
$description2 = ucfirst($description2);
$descriptionalt = " and " . $description2;
$descriptionfull = $description . $descriptionalt;
$tempnow = $weather->main->temp;
$templow = $weather->main->temp_min;
$temphigh = $weather->main->temp_max;
$windspeed = $weather->wind->speed;
?>