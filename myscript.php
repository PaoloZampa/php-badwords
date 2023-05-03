<?php

//var_dump($_GET);

/* echo $_GET['name'] . "<br>";
echo $_GET['badword'] . "<br>"; */

$name = $_GET['name'];
$badWord = $_GET['badword'];

$nameLength = strlen($name);
$badWordLength = strlen($badWord);

echo "La lunghezza di " . $name . " è: " . $nameLength . "<br>";
echo "La lunghezza di " . $badWord . " è: " . $badWordLength . "<br>";

$badWord = substr_replace($badWord, str_repeat('*', $badWordLength - 2), 1, -1);

echo "La bad word modificata è: " . $badWord;