<?php
function generateToken($longitud)
{
    if ($longitud < 4) {
        $longitud = 4;
    }

    return bin2hex(random_bytes(($longitud - ($longitud % 2)) / 2));
}

$token = generateToken(30);
echo $token;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="form1" action="">
        <input type="text" id="input"> Advertencia: <span id="result"></span>
    </form>
</body>
<script>
    input.oninput = function() {
        if(input.value.length < 8 || input.value.length > 20){
            result.innerHTML = "Su contraseña debe tener de 8 a 20 caracteres, contener letras y números. No debe contener espacios, caracteres especiales o emojis.";
        } else{
            result.innerHTML = "";
        }
        
    };
</script>

</html>