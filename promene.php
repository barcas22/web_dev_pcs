<?php

echo "Ahoj jsem tady a funguju";


//datové typy

//string
$promenna = "jsem string";

//boolean
$pravda = true;
$nepravda = false;

//čísla
$float = 2.4;
$int = 2;

//indexované pole
$pole = ["jablíčko", "hruška", "borůvky"];

//asociativní pole
$asociativniPole = [
    "prvni_ovoce" => "jablko",
    "druhe_ovoce" => "hruška",
    "treti_ovoce" => "borůvky",
];

//multidemenzionální pole
$multiPole = [
    "name" => "Tomáš",
    "kids" => [
        [
            "name" => "Jáchym",
        ],
        [
            "name" => "Meda",
        ]
    ]
];

//nic
$nic = NULL;

//funkce
function pozdrav($name){
    return "Ahoj $name";
}

?>

<form action="/test.php" method="POST">
    <input type="text" name="name" id="name">
    <input type="password" name="psw" id="psw">
    <button type="submit">Odeslat na test.php</button>


</form>

