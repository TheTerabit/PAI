<?php
session_start();

if ( isset($_SESSION['success']) ) {
    print ($_SESSION['success']);
    unset( $_SESSION['success']);
    echo "<br><br>";
}

$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "SELECT * FROM pracownicy";
$result = $link->query($sql);
    
foreach ($result as $v) {
    echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
}
    
$result->free();
$link->close();

echo "<a href = \"/form06_post.php\">Dodaj</a><br>";
?>