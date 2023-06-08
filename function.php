<?php



if (isset($_GET['length'])) {
    $length = $_GET['length'];

    $uppercase_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase_chars = 'abcdefghijklmnopqrstuvwxyz';
    $number_chars = '123456789';
    $symbol_chars = '!@#$%^&*()_+~`|}{[]:;?><,./-=';

    $chars = $uppercase_chars . $lowercase_chars . $number_chars . $symbol_chars;

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
} else {

    echo 'Errore lunghezza password non specificata';
};
