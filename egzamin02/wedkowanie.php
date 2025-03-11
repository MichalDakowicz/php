<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Klub wędkowania</title>
	<link rel="stylesheet" href="styl2.css" />
</head>
<body>
	<div id="baner">
		<h2>Wędkuj z nami!</h2>
	</div>
	<div id="lewy">
		<img src="ryba2.jpg" alt="Szczupak" />
	</div>
	<div id="prawy">
		<h3>Ryby spokojnego żeru (białe)</h3>
		<?php
			$conn = mysqli_connect("localhost", "root", "", "wedkowanie3at");
			
			$kw = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 2";
			$wynik = mysqli_query($conn, $kw);
			while ($tab = mysqli_fetch_row($wynik)) {
				echo "$tab[0]. $tab[1], występuje w: $tab[2]<br />";
			}


			mysqli_close($conn);
		?>
		<ol>
			<li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
			<li><a href="https://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
		</ol>
	</div>
	<div id="stopka">
		<p>Stronę wykonał: 0000000</p>
	</div>
</body>
</html>