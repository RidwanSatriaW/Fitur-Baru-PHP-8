<?php

function sayHello(string $first, string $last)
{

}

function sum(int... $values){
    return $values;
}

sayHello(
    "Ridwan",
    "Ridwan",
);

$sum = sum(
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
);
var_dump($sum);

$array = [
    "first" => "Ridwan",
    "middle" => "Ridwan",
    "last" => "Ridwan",
    "address" => "Ridwan",
    "country" => "Ridwan",
    "bday" => "Ridwan",
];
