<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Password Generator</h1>
    <form action="index.php" method="GET">
    <input type="number" name="lenght" placeholder="inserisci la lunghezza">
    <button type="submit">Invia</button>
    <?php
        include'functions.php';
        $lenght = $_GET['lenght'] ?? 8;
        $password =  get_rand_alphanumeric_maiusc_symbol($lenght);
    ?>
    <div>La tua password è: <?php echo $password?></div>
</form>
</body>
</html>