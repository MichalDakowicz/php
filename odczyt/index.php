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
    <input type="text" name="imie" id="Imie" placeholder="Imię" required>
    <input type="text" name="nazwisko" id="Nazwisko" placeholder="Nazwisko" required>
    <input type="number" name="numer-telefonu" id="numer-telefonu" placeholder="Numer telefonu" required>
    <input type="email" name="email" id="email" placeholder="E-mail" required>
    <textarea name="info" id="info" rows="4" cols="30" required></textarea>
    <select name="jezyk-programowania" id="jezyk-programowania" required>
        <option value="C++">C++</option>
        <option value="Python">Python</option>
        <option value="JavaScript">JavaScript</option>
        <option value="PHP">PHP</option>
    </select>

    <div class="radio-group">
        <input type="radio" name="plec" id="mezczyzna" value="Mężczyzna" required>
        <label for="mezczyzna">Mężczyzna</label>
        <input type="radio" name="plec" id="kobieta" value="Kobieta" required>
        <label for="kobieta">Kobieta</label>
    </div>

    <input type="checkbox" name="przetwarzanie-danych" id="przetwarzanie-danych">
    <label for="przetwarzanie-danych">Wyrażam zgodę na przetwarzanie danych osobowych</label>

    <button type="submit">Wyślij</button>
</form>

</body>

</html>