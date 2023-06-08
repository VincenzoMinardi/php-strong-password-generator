<!DOCTYPE html>
<html>

<head>
    <title>Generatore di password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>


<?php
if (isset($GET['length'])) {
    $length = $GET['length'];

    $uppercase_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase_chars = 'abcdefghijklmnopqrstuvwxyz';
    $number_chars = '123456789';
    $symbol_chars = '!@#$%^&*()_+~`|}{[]:;?><,./-=';

    $chars = $uppercase_chars . $lowecase_chars . $number_chars . $symbol_chars;

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
} else {

    echo 'Errore lunghezza password non specificata';
}





?>

<body>
    <div class="password-generator">
        <h2>Generatore di password</h2>
        <form action="index.php" method="GET">
            <div class="form-group">
                <label for="length">Lunghezza della password:</label>
                <input type="number" id="length" name="length" class="form-control" min="4" max="20" value="8">
            </div>
            <button type="submit" class="btn btn-primary">Genera password</button>
        </form>
        <div><?php echo $password ?></div>
    </div>
</body>

</html>