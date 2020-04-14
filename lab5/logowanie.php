<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
require_once("funkcje.php");
if (isset($_POST["zaloguj"])) {
    $login = test_input($_POST["login"]);
    $haslo = test_input($_POST["haslo"]);
    
    if(($login == $osoba1->login) && ($haslo == $osoba1->haslo)) {
        $_SESSION["zalogowany"] = 1;
        $_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
    }
    else if(($login == $osoba2->login) && ($haslo == $osoba2->haslo)) {
        $_SESSION["zalogowany"] = 1;
        $_SESSION["zalogowanyImie"] = $osoba2->imieNazwisko;
    }
    else {
        $_SESSION["zalogowany"] = 0;
    }
    if($_SESSION["zalogowany"] == 1) {
        //echo "Witaj " . $zalogowanyImie;
        header("Location: user.php");
    }
    else {
        header("Location: index.php");
    }

    //echo "Przesłany login: " . $login . "<br>Przesłane hasło: " . $haslo . "<br><br>";
}

?>
</body>
</html>