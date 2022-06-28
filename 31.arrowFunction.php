<?php

$firstName = "Fadhil";
$lastName = "Muhammad";

$anonymousFunction = function() use($firstName, $lastName){ //return value string
    echo "Hallo $firstName $lastName" . PHP_EOL; //return value string
};

$arrowFunction = fn() => "Hallo $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();