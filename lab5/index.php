<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
require("funkcje.php");
echo "<h1>Nasz system</h1><br>";

if (isset($_POST["wyloguj"])) {
    $_SESSION["zalogowany"] = 0;
    echo "Wylogowano<br><br>";
}

?>
<form action="logowanie.php" method="post">
Login: <input type="text" name="login"><br>
Hasło: <input type="password" name="haslo"><br>
<input type="submit" name="zaloguj" value="Zaloguj"><br>
</form>
<hr>
<form action="cookie.php" method="get">
Czas nowego cookie: <input type="number" name="czas"><br>
<input type="submit" name="utworzCookie" value="Utworz Cookie"><br>
</form>
<?php
if(isSet($_COOKIE["cookie1"])) {
    echo "<br>Wartość cookie: " . $_COOKIE["cookie1"] . "<br>";
}
?>
<hr>
<a href="user.php">Strona użytkownika</a>
</body>
</html>
