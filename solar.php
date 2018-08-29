<?php
$WeatherSource = "https://api.forecast.io/forecast/a28eb70bce6497163c45d648ef341e27/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>