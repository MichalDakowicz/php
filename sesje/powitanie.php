<?php
    session_start();
    if (!isset($_SESSION['zalogowany']) || $_SESSION['zalogowany'] !== true) {
        header('Location: login.php');
        exit();
    }

   
    if (isset($_COOKIE['licznik'])) {
        $licznik = $_COOKIE['licznik'] + 1;
    } else {
        $licznik = 1;
    }
    setcookie('licznik', $licznik, time()+(7*24*60*60)); 
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Witaj <?php echo $_SESSION['uzytkownik']; ?></h2>
    <p>To twoja <?php echo $licznik; ?> wizyta na stronie.</p>
    <p><a href="wyloguj.php">Wyloguj się</a></p>
    
</body>
</html>