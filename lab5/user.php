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
 if($_SESSION["zalogowany"] != 1) {
    header("Location: index.php");
}

echo "<h1>Witaj " . $_SESSION["zalogowanyImie"] . "</h1><br>";
?>
<form action='user.php' method='POST' enctype='multipart/form-data'>
<input name="myfile" type="file"><br>
<input type="submit" name="przeslij" value="Prześlij"><br>
</form>
<?php
if(isSet($_POST["przeslij"])) {
    $currentDir = getcwd();
    $uploadDirectory = "/zdjeciaUzytkownikow/";
    $fileName = $_FILES['myfile']['name'];
    $fileTmpName = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];

    if($fileName != "" and ($fileType == 'image/png' or $fileType == 'image/jpeg' or $fileType == 'image/JPEG' or $fileType == 'image/PNG')) {
        $uploadPath = $currentDir . $uploadDirectory . $fileName;
        if(move_uploaded_file($fileTmpName, $uploadPath))
            echo "Zdjęcie zostało załadowane na serwer FTP";
    }
}
if(file_exists("zdjeciaUzytkownikow/arrow3.png")) {
    echo '<br><img src="zdjeciaUzytkownikow/arrow3.png" alt="Zdjecie Uzytkownika">';
}
else {
    echo "Miejsce na zdjęcie";
}
echo "<br><a href=\"index.php\">Strona główna</a><br>"
?>
<form action="index.php" method="post">
<input type="submit" name="wyloguj" value="Wyloguj">
</form>
</body>
</html>
