<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div id="baner"><h1>Portal dla wędkarzy</h1></div>
        <div id="blok-glowny">
            <div id="lewy">
                <div id="lewy1">
                    <h3>Ryby zamieszkujące nasze rzeki</h3>
                    <ol>
                        <?php
                        //skrypt 1
                        $polaczenie = mysqli_connect('localhost', 'root', '', 'wedkowanie');
                        $zapytanie1 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby, lowisko WHERE ryby.id=lowisko.Ryby_id and lowisko.rodzaj = 3";
                        $wynik1 = mysqli_query($polaczenie, $zapytanie1);
                        while($wiersz1 = mysqli_fetch_row($wynik1)){
                            echo "<li>$wiersz1[0] pływa w rzece $wiersz1[1], $wiersz1[2]</li>";
                        }
                        ?>
                    </ol>
                </div>
                <div id="lewy2">
                    <h3>Ryby drapieżne naszych wód</h3>
                    <table>
                        <?php
                        //skrypt 2
                        $zapytanie2 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia=1";
                        $wynik2 = mysqli_query($polaczenie, $zapytanie2);
                        while($wiersz2 = mysqli_fetch_row($wynik2)){
                            echo "<tr>
                                    <td>$wiersz2[0]</td>
                                    <td>$wiersz2[1]</td>
                                    <td>$wiersz2[2]</td>
                                  </tr>";
                        }
                        mysqli_close($polaczenie);
                        ?>
                    </table>
                </div>
            </div>
            <div id="prawy">
                <img src="ryba1.jpg" width="400px" />
                <br />
                <a href="kwerendy.txt">Pobierz kwerendy</a>
            </div>
        </div>
        <div id="stopka">Strone wykonał: 00000000000</div>
    </body>
</html>
