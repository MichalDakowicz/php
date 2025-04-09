<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $haslo1 = $_POST['haslo1'];
    $haslo2 = $_POST['haslo2'];

    if ($haslo1 !== $haslo2) {
        $blad = "Hasła się nie zgadzają!";
    } else {
        $conn = mysqli_connect("localhost", "root", "", "skibidii3at");

        if (!$conn) {
            die("Błąd połączenia: " . mysqli_connect_error());
        }

        $login = mysqli_real_escape_string($conn, $login);
        $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (login, password) VALUES ('$login', '$haslo_hash')";
        if (mysqli_query($conn, $sql)) {
            header("Location: login.php");
            exit();
        } else {
            $blad = "Login już istnieje lub błąd zapisu!";
        }

        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head><meta charset="UTF-8"><title>Rejestracja</title></head>
<body>
    <h2>Formularz rejestracji</h2>
    <?php if (!empty($blad)) echo "<p style='color:red;'>$blad</p>"; ?>
    <form method="POST">
        Login: <input type="text" name="login" required><br>
        Hasło: <input type="password" name="haslo1" required><br>
        Powtórz hasło: <input type="password" name="haslo2" required><br>
        <button type="submit">Zarejestruj</button>
    </form>
    <p><a href="login.php">Powrót do logowania</a></p>
</body>
</html>
