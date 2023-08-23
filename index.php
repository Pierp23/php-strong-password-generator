<?php

include_once __DIR__ . '/./functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <title>Password Generator</title>
</head>

<body>
    <header>
        <div class="container">
            <h1>
                Password Generator
            </h1>
        </div>
    </header>


    <main>
        <div class="container">
            <form action="passgenerator.php" method="get">
                <div class="fs-3">
                    <label for="password">Scegli la lunghezza della tua password</label>
                    <input name="password" id="password" type="number">
                </div>
                <button class="fs-3" type="submit">Genera password</button>
            </form>
        </div>
    </main>
</body>

</html>