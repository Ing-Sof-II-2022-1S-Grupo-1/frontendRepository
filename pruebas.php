<?php
function generateToken($longitud)
{
    if ($longitud < 4) {
        $longitud = 4;
    }

    return bin2hex(random_bytes(($longitud - ($longitud % 2)) / 2));
}

$token= generateToken(30);
echo $token;