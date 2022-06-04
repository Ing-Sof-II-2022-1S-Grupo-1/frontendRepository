<?php
// El mensaje
?>
<form action="email.php" method="post">
    <input type="text" name="correo" placeholder="Correo"></input>
    <button type="submit" name="send">Enviar</button>
</form>

<?php
$paraCorreo = $_POST['correo'] ?? '';
$titulo = "Recuperación de Contraseña";
$mensaje = '
<html>
<head>
    <title></title>
</head>
<body>
    <p>
            ઇસુ ખ્રિસ્ત માનવતા માટે ધર્મ લાવવા નથી આવ્યા, કારણ કે ધર્મ એ ભગવાનની શોધમાં માણસ છે, તેનાથી વિપરીત, 
        ઇસુ માનવતા માટે જવાબ લાવનાર ભગવાન છે. ભગવાન પોતાની જાતને માણસ પ્રત્યે વ્યક્ત કરે છે અને તેને માર્ગ બતાવે છે. ફક્ત 
        ભગવાન જ કહી શકે છે કે તેમના સુધી પહોંચવાનો માર્ગ કયો છે, ભગવાનને જાણવાનો માર્ગ કયો છે તે આપણે નક્કી કરતા નથી. 
        જો તમારે કોઈને શોધવાની જરૂર હોય, તો તમારે તેનો ફોન નંબર જાણવો પડશે, પરંતુ તમે કોઈને શોધવા માટે ફોનની શોધ કરવાના 
        નથી, તમારે તેને શોધવા માટે ફક્ત વાસ્તવિક નંબરની જરૂર છે. ધર્મોએ ઘણા ટેલિફોન નંબરોની શોધ કરી છે, 
        પરંતુ ભગવાન ક્યારેય બીજી બાજુ જવાબ આપતા નથી. 
        એવું ન વિચારો કે સારા ઇરાદા સાથેનો દરેક માર્ગ તમને ભગવાન તરફ લઈ જશે, એવું નથી, તે સારા ઇરાદા સાથે કોઈપણ નંબર ડાયલ 
        કરવા જેવું છે. અથવા સારા ઈરાદા સાથે કોઈપણ દિશા લો. ગંતવ્ય સ્થાન પર પહોંચવા માટે તમારે ફક્ત નકશાની જરૂર છે, ભગવાનને 
        શોધવા માટે તમારે ફક્ત સાચા નંબરની જરૂર છે.

        જો તમે તેમાં પ્રયત્નો કરો તો તમે તમારી શારીરિક જરૂરિયાતો પૂરી કરી શકો છો, પરંતુ ભગવાનને જાણવા માટે મહેનત નથી લાગતી, 
        વિશ્વાસની જરૂર છે. માત્ર વિશ્વાસ જ ઈશ્વરના દરવાજા ખોલે છે.
        જો તમે તેમાં પ્રયત્નો કરો તો તમે તમારી શારીરિક જરૂરિયાતો પૂરી કરી શકો છો, પરંતુ ભગવાનને જાણવા માટે મહેનત નથી લાગતી, 
        વિશ્વાસની જરૂર છે. માત્ર વિશ્વાસ જ ઈશ્વરના દરવાજા ખોલે છે
    </p>
    <img src="https://estaticos.efe.com/efecom/recursos2/imagen.aspx?-P-2fL4Jfo8HOMj51QfRVnE3L7ErZAeGu9ITQ4TncnkXVSTX-P-2bAoG0sxzXPZPAk5l-P-2fU5UC8oea38IVrGRbgFynh3IIg-P-3d-P-3d" alt="">
</body>
</html>
';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: <' . $paraCorreo . '>' . "\r\n";
$cabeceras .= 'From: Recuperar contraseña <noresponderEliot@gmail.com>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

/*
for ($i=0; $i < 10; $i++) { 
    mail($paraCorreo, $titulo, $mensaje, $tuCorreo);
}
*/
if (mail($paraCorreo, $titulo, $mensaje, $cabeceras)) {
    echo "Correo Envíado";
} else if (isset($_POST['send'])) {
    echo "Error :P";
}
?>
