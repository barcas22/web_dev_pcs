<?php

require "functions.php";
require "controllers/onasController.php";

$routes = [
    "onas",
    "rezervace",
    "Barca",
];

$URL = $_SERVER["REQUEST_URI"];
$clearURL = str_replace("/","", $URL);

if(in_array($clearURL, $routes)) {
    oNas();
} else {
    zobrazHTML("error");
}