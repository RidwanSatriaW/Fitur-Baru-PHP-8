<?php

class Example
{
    //bisa banyak tipe data
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "Ridwan";
$example->data = 100;
$example->data = true;
$example->data = [];

//bisa diterapkan dimana saja termasuk function dan return value
function sampleFunction(string|array $data): string|array
{
    if (is_array($data)) {
        return ["Array"];
    } else if (is_string($data)) {
        return "String";
    }
}

var_dump(sampleFunction("Ridwan"));
var_dump(sampleFunction([]));