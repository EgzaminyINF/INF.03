<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restauracja Wszystkie Smaki</title>
	<link rel="stylesheet" href="styl_1.css">
</head>
<body>
	<div id="baner">
		<h1>Witamy w restauracji „Wszystkie Smaki”</h1>
	</div>
	<div id="lewy">
		<img src="menu.jpg" alt="Nasze danie">
	</div>
	<div id="prawy">
		<h4>U nas dobrze zjesz</h4>
		<ol>
			<li>Obiady od 40 zł</li>
			<li>Przekąski od 10 zł</li>
			<li>Kolacje od 20 zł</li>
		</ol>
	</div>
	<div id="dolny">
		<h2>Zarezerwuj stolik on-line</h2>
		<?php
			if(isset($_POST['data']) && isset($_POST['osoby']) && isset($_POST['nr_tel'])){
				$data=$_POST['data'];
				$osoby=$_POST['osoby'];
				$nr_tel=$_POST['nr_tel'];
				$polaczenie = mysqli_connect('localhost', 'root', '', 'baza');
				$zapytanie = "INSERT INTO rezerwacje VALUES(NULL, NULL, '$data', $osoby, '$nr_tel')";
				$wynik = mysqli_query($polaczenie, $zapytanie);
				if($wynik){
					echo 'Dodano rezerwację do bazy';
				}
				mysqli_close($polaczenie);
			}
		?>
	</div>
	<div id="stopka">
		Stronę internetową opracował: <em>PESEL</em>
	</div>
</body>
</html>