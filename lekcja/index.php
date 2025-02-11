<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form h2 {
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>

</head>
<body>
    <h1>dziala</h1>

    <form name="formularz1" method="POST" action="index.php">
        <h2>Imię</h2>
        <input type="text" name="imie" id="imie" required>
        <button type="submit">Zatwierdź</button>
    </form>
    
    <?php
    if (isset($_POST['imie'])){

        $imie = $_POST['imie'];

        print("<h1>Witaj $imie</h1>");
    } else {
        print("<h1>Witaj nieznajomy</h1>");
    }

    print("<table>");
    for ($i=0; $i < 10; $i++) { 
        print("<tr>");
        print("<td>$i</td>");
        print("<td>".$i*$i."</td>");
        print("</tr>");
    }
    print("</table>");
    ?>
</body>
</html>