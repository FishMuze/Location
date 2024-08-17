<?php

$myfile = fopen("location.txt", "w");

$lat = isset($_GET["lat"]) ? $_GET["lat"] : "Not Received";
$long = isset($_GET["long"]) ? $_GET["long"] : "Not Received";

$txt = "lat= " . $lat . " long= " . $long;
fwrite($myfile, $txt);
fclose($myfile);

?>
