<!DOCTYPE html>
<html>

<head>
    <title>Generatore di password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>



<body>
    <?php include 'function.php' ?>
    <div class="password-generator">
        <form method="GET">
            <h2>Generatore di Password</h2>
            <div class="form-group">
                <label for="length">Lunghezza della Password:</label>
                <input type="number" class="form-control" name="length" min="6" max="20" value="10">
            </div>
            <button class="btn btn-primary btn-block">Genera Password</button>
            <div class="password-output" id="password-output"></div>

            <h1 class="password ml-2 mt-4"><?php echo $password ?></h1>
        </form>
    </div>


</body>

</html>