<?php

$users = [
    ["username" => "adam", "password" => "1234"],
    ["username" => "eva", "password" => "heslo"],
    ];

$name_from_form = $_POST["username"];
$psw_from_form = $_POST["password"];

$name_psw = ["username" => $name_from_form, "password" => $psw_from_form];

if (in_array($name_psw, $users)) {
    echo "Jméno a heslo jsou správné. Vítej, " .$name_from_form;
} else {
    header("Location: /?test=spatne_udaje&key=value");
}