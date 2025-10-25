<?php

var_dump($_GET);

$chybovaHlaska = $_GET["row1"]??"";
$chybovaHlaska2 = $_GET["row2"]??"";

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<form action="/validate2.php" method="POST" class="container mx-auto flex flex-col w-1/3 bg-gray-200 mt-32 gap-4 p-8 rounded-lg">
    <h1 class="text-2xl font-semibold">Login</h1>
    <label for="username">Username</label>
    <input type="text" name="username" id="name" class="border border-black rounded-lg pl-2">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="border border-black rounded-lg pl-2">
    <p class="text-red-500"><?php echo $chybovaHlaska?></p>
    <p class="text-red-500"><?php echo $chybovaHlaska2?></p>
    <input type="submit" value="Odeslat" class="bg-white text-black w-fit px-3 py-2 rounded-lg">
</form>