<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Generator Password</title>
</head>

<body>
    <form class="password-generator">
        <h2>Generatore di password</h2>
        <div class="form-group">
            <label for="length">Lunghezza della password:</label>
            <input type="number" id="length" class="form-control" min="4" max="20" value="8">
        </div>
        <div class="form-group">
            <label for="include-uppercase">Includere lettere maiuscole:</label>
            <input type="text" id="include-uppercase" class="form-control">
        </div>
        <div class="form-group">
            <label for="include-numbers">Includere numeri:</label>
            <input type="text" id="include-numbers" class="form-control">
        </div>
        <div class="form-group">
            <label for="include-symbols">Includere simboli:</label>
            <input type="text" id="include-symbols" class="form-control">
        </div>
        <button id="generate" class="btn btn-primary">Genera password</button>
        <div id="password" class="mt-3"></div>
    </form>
</body>

</html>