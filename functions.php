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
