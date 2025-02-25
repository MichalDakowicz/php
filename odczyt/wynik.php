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
        echo '<h1>Wynik</h1>';
        echo '<table>';
        echo '<tr><td>Imię:</td><td>' . $_POST['imie'] . '</td></tr>';
        echo '<tr><td>Nazwisko:</td><td>' . $_POST['nazwisko'] . '</td></tr>';
        echo '<tr><td>Email:</td><td>' . $_POST['email'] . '</td></tr>';
        echo '<tr><td>Płeć:</td><td>' . $_POST['plec'] . '</td></tr>';
        echo '<tr><td>Info:</td><td>' . $_POST['info'] . '</td></tr>';
        echo '<tr><td>Język Programowania:</td><td>' . $_POST['jezyk-programowania'] . '</td></tr>';
        echo '<tr><td>Przetwarzanie danych:</td><td>' . (isset($_POST['przetwarzanie-danych']) ? 'Tak' : 'Nie') . '</td></tr>';
        echo '</table>';
    } else {
        header('Location: index.php');
    }
    
    
    ?>
</body>
</html>