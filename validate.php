<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<?php

$users = ["Anna", "Tom", "Barča", "Matěj", "Eliška", "Ondřej", "Hana", "Eva", "Jindřich", "Kristýna"];

$name_from_form = $_POST["name"];


if (in_array($name_from_form, $users)) {
    echo '<p class="text-green-500 font-semibold">Jsem na seznamu</p>';
} else {
    echo '<p class="text-red-500 font-semibold">Nejsem na seznamu</p>';
}


?>




