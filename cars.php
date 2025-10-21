<?php

require "car.php";

$octavie = new Car("Octavie", "automat", "diesel");
$kamiq = new Car("Kamiq", "manual", "gas");

var_dump($octavie);
var_dump($kamiq);

?>


<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-100">
    
<form action="/validate.php" method="POST" class="container mx-auto mt-12 flex flex-col w-1/3 bg-white p-12 gap-2 rounded-xl">
        <h1 class="text-4xl font-semibold mb-2">Formulář</h1>
        <label for="name">Your name</label>
        <input type="text" name="name" id="name" class="border rounded-xl border-gray-200 pl-4">
        <input type="submit" value="Odeslat" class="w-fit bg-gray-700 text-white px-6 py-2 rounded-xl mt-2"></button>
    </form>
    
</body>
