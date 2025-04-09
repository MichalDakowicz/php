<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $conn = mysqli_connect("localhost", "root", "", "skibidii3at");

    if (!$conn) {
        die("Błąd połączenia: " . mysqli_connect_error());
    }

    $login = mysqli_real_escape_string($conn, $login);
    $sql = "SELECT * FROM users WHERE login='$login'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($haslo, $row['password'])) {
            $_SESSION['zalogowany'] = true;
            $_SESSION['uzytkownik'] = $login;
            header('Location: powitanie.php');
            exit();
        }
    }

    $blad = "Niepoprawny login lub hasło!";
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="pl">
<head><meta charset="UTF-8"><title>Logowanie</title></head>
<body>
    <h2>Formularz logowania</h2>
    <?php if (!empty($blad)) echo "<p style='color:red;'>$blad</p>"; ?>
    <form method="POST" action="login.php">
        Login: <input type="text" name="login" required><br>
        Hasło: <input type="password" name="haslo" required><br>
        <button type="submit">Zaloguj</button>
    </form>
    <p><a href="rejestracja.php">Nie masz konta? Zarejestruj się</a></p>
</body>
</html>
