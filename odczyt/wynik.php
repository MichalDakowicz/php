<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['password'] === $_POST['password2']) {
            $password_display = $_POST['password'];
            $password_style = 'color: green;';
        } else {
            $_SESSION['error_message'] = 'Hasła się nie zgadzają.';
            header('Location: index.php');
            exit();
        }

        echo '<h1>Wynik</h1>';
        echo '<table>';
        echo '<tr><td>Nazwa użytkownika:</td><td>' . htmlspecialchars($_POST['username']) . '</td></tr>';
        echo '<tr><td>Hasło:</td><td style="' . $password_style . '">' . $password_display . '</td></tr>';
        echo '<tr><td>Email:</td><td>' . htmlspecialchars($_POST['email']) . '</td></tr>';
        echo '<tr><td>Numer telefonu:</td><td>' . htmlspecialchars($_POST['numer-telefonu']) . '</td></tr>';
        echo '</table>';
    } else {
        header('Location: index.php');
    }
    ?>
</body>
</html>