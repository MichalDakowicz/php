<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odczyt z pól formularza</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<form action="wynik.php" method="post">

    <input type="text" name="username" id="username" placeholder="Nazwa Urzytkownika" required minlength="5">
    <input type="password" name="password" id="password" placeholder="Hasło" required minlength="8">
    <input type="password" name="password2" id="password2" placeholder="Powtórz Hasło" required minlength="8">
    <?php
    if (isset($_SESSION['error_message'])) {
        echo '<b>' . $_SESSION['error_message'] . '</b>';
        unset($_SESSION['error_message']);
    }
    ?>
    <input type="email" name="email" id="email" placeholder="E-mail" required>
    <input type="number" name="numer" id="numer" placeholder="Numer telefonu" required min="18" max="100">
    <input type="checkbox" name="przetwarzanie-danych" id="przetwarzanie-danych" required>
    <label for="przetwarzanie-danych">Wyrażam zgodę na przetwarzanie danych osobowych</label>

    <button type="submit">Wyślij</button>
</form>

</body>
</html>