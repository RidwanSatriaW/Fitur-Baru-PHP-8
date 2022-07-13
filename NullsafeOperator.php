<?php

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}

//null safety operator
function getCountry(?User $user): ?string
{
    return $user?->address?->country;
    //mengembalikan null tapi tidak error
}

echo getCountry(null) . PHP_EOL;