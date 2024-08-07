<?php
function validateRecaptcha($recaptchaResponse) {
    $secret = '6LfVHwgqAAAAAJWj89Ae3fuidGJNHqXD6eaCQSH7';
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptchaResponse");
    $responseKeys = json_decode($response, true);
    return intval($responseKeys["success"]) === 1;
}
?>
