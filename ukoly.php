<?php

// Proměnné a datové typy


//1
$name = "Barča";
$age = 25;
$height = 168.5;

//echo "$name, $age, $height";

//2
$firstName = "Jan";
$lastName = "Novak";

$fullName = $firstName .$lastName;
//echo $fullName;

//3
$x=3.14;
//echo (gettype($x));

//4
$number = (int) "42";
$result = $number + 8;
//echo $result;

//5
$colors = ["green", "blue", "red"];
//echo $colors[1];






//Podmínky a logika


//6
$score = 59;

if ($score>89)
{
    echo "Výborně";
} elseif ($score<90 && $score>59){
    echo "Dobře";
} else {
    echo "Zkus to znovu";
}

//7
$x = 20;
if ($x % 2 === 0)
{
    echo "Jsem sudé číslo";
} else {
    echo "Jsem liché číslo";
}

//8
$name = "Beata";
if (str_starts_with($name,"A"))
{
    echo "Začínám A";
} else {
    echo "Nezačínám A";
}

//9
$loggedIn = false;

if($loggedIn === true) {
    echo "Přihlášen";
} else {
    echo "Odhlášen";
}

//10
$items = [];

if(empty($items))
{
    echo "Žádné položky";
}






//Funkce


//11
function greet($name){
    return "Ahoj, $name.";
}
//echo (greet("Honza"));

//12
function add($a , $b){
    return $a + $b;
}
//echo add(12,5);

//13
function isEven($num)
{
    return ($num % 2 === 0);
}
//var_dump(isEven(6));

//14
$array = [12, 15, 18];

function avarage($numbers){
    return array_sum($numbers) / count($numbers);
}
//echo avarage($array);

//15
$string = "avokado";

function countVowels($string){
    $strWithoutVowels = str_ireplace(["a","e","i","o","u"],"",$string);
    return strlen($string) - strlen($strWithoutVowels);
}
//echo countVowels($string);






//Stringy


//16
$text = "ahoj";
$arrayOfLetters = str_split($text);

$obracenyText = implode(array_reverse($arrayOfLetters));
//echo $obracenyText;

//17
$word = "php";
$changedWord = ucfirst($word);
//echo $changedWord;

//18
$sentence = "This is an example of a sentence.";
//echo substr_count($sentence, "a");

//19
$wordToFind = "Laravel";

if (str_contains($sentence,$wordToFind)){
    echo "obsahuje";
} else {
    echo "neobsahuje";
}

//20
$newSentence = str_ireplace("e", "3", $sentence);
//echo $newSentence;






//Práce s poli a logikou


//21
$numbers = [1, 2, 3, 4, 5];

function double($n){
    return $n * 2;
}
$newNumbers = array_map("double", $numbers);
//var_dump($newNumbers);

//22
$names = ["Eva", "Jan", "Eva", "Petr"];
$newNames = array_unique($names);

//23
$a = [1, 2];
$b = [3, 4,];
$myResult = array_merge($a, $b);
//var_dump($myResult);

//24
if (in_array("Jan", $names)){
    echo "Jan se nachází v poli";
} else {
    echo "Jan se nenachází v poli.";
}

//25
$numbers = [9, 2, 5, 1];
sort($numbers);






//Logické a algoritmické funknce


//26
$myWords = ["a", "aaaa", "aaaaaaaaa", "aaaaaaaaaaaaaaa"];

function findLongestWord(array $words): string
{
    $longest = ""; 

    foreach ($words as $text) {
        if (strlen($text) > strlen($longest)) {
            $longest = $text;
        }
    }

    return $longest;
}
//echo findLongestWord($myWords);


//27
$myArray = [1, 2, 5, 6, 8, 3];

function sumEvenNumbers($numbers){
    $evenNumbers = array_filter($numbers, function($n) {
        return $n % 2 === 0;
    });

    return array_sum($evenNumbers);
}
//echo sumEvenNumbers($myArray);

//28
$mySentence = "Káva je skvělý moment dne";

function reverseWords($sentence){
    $wordsToArray = explode(" ", $sentence);
    $reversedArray = array_reverse($wordsToArray);
    return implode(" ", $reversedArray);
}
//echo reverseWords($mySentence);

//29
$array = ["cat", "dog", "horse", "cow", "dog"];

function hasDuplicates($array){
    $uniqueArray = array_unique($array);
    if (count($array) === count($uniqueArray)){
        return false;
    } else {
        return true;
    }
}

//30
$word = "abeceda";

function uniqueLetters($string){
    return array_unique(str_split($string));
}

