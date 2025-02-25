<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    
    $username = $_POST['username'] ?? '';
    if (strlen($username) < 5) {
        $errors[] = "Nazwa użytkownika musi mieć minimum 5 znaków";
    }

    $password = $_POST['password'] ?? '';
    $password2 = $_POST['password2'] ?? '';
    if (strlen($password) < 8) {
        $errors[] = "Hasło musi mieć minimum 8 znaków";
    }
    if ($password !== $password2) {
        $errors[] = "Hasła nie są identyczne";
    }

    $email = $_POST['email'] ?? '';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Niepoprawny format adresu email";
    }

    $numer = $_POST['numer'] ?? '';
    if (!is_numeric($numer) || $numer < 18 || $numer > 100) {
        $errors[] = "Numer musi być między 18 a 100";
    }

    if (!empty($errors)) {
        $_SESSION['error_message'] = "<ul><li>" . implode("</li><li>", $errors) . "</li></ul>";
        header('Location: index.php');
        exit();
    }

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
    <h1>Wynik</h1>
    <table>
        <tr><td>Nazwa użytkownika:</td><td><?= htmlspecialchars($username) ?></td></tr>
        <tr><td>Hasło:</td><td><?= htmlspecialchars($password) ?></td></tr>
        <tr><td>Email:</td><td><?= htmlspecialchars($email) ?></td></tr>
        <tr><td>Numer:</td><td><?= htmlspecialchars($numer) ?></td></tr>
    </table>
</body>
</html>
<?php
} else {
    header('Location: index.php');
    exit();
}
?>