<?php

function randomPassword()
{
    if (isset($_GET['password'])) {
        $length = $_GET['password'];
        $pass = "";
        $permittedChars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()-_=+[]{};:',./\|ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $count = mb_strlen($permittedChars);
        for ($i = 0; $i < $length; $i++) {
            // genero un numero random da 0 a (lunghezza max della lista - 1)
            $index = rand(0, $count - 1);
            // genero una stringa di lunghezza 1, pescando tra la lista il carattere collocato in posizione N (dato dal numero random generato prima) 
            $pass .= mb_substr($permittedChars, $index, 1);
            // ripeto il processo fino a quando la $pass è di N caratteri quanti richiesti dall'utente
        }
        return $pass;
    }
}
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
        <h1>
            Password Generator
        </h1>
    </header>

    <main>
        <div class="container">
            <form action="" method="get">
                <div>
                    <label for="password">Scegli la lunghezza della tua password</label>
                    <input name="password" id="password" type="number">
                </div>
                <button type="submit">Genera password</button>
            </form>
        </div>

        <div class="container">
            <h2>
                La password generata è:
                <?php echo randomPassword() ?>
            </h2>
        </div>



    </main>
</body>

</html>