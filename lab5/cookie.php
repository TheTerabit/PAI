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
 echo "Cookies<br>";
 if (isset($_GET["utworzCookie"])) {
    $cookie = test_input($_GET["czas"]);
    if(is_numeric($cookie) and $cookie > 0){
        setcookie("cookie1", "WITAJ", time() + $cookie, "/");
        echo "Nowe cookie dodane!<br>";
    }
    else {
        echo "Błąd! Czas musi być wartością liczbową większą od 0.<br>";
    }
}
?>
<a href="index.php">Wstecz</a>
</body>
</html>
