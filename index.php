<!DOCTYPE html>
<html>

<head>
    <title>Generatore di password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>



<body>
    <div class="password-generator">
        <h2>Generatore di password</h2>
        <form action="index.php" method="GET">
            <div class="form-group">
                <label for="length">Lunghezza della password:</label>
                <input type="number" id="length" name="length" class="form-control" min="4" max="20" value="">
            </div>
            <button type="submit" class="btn btn-primary">Genera password</button>
        </form>
        <div class="generate-password ml-2"><?php echo $password ?></div>
        <?php include 'function.php' ?>
    </div>


</body>

</html>