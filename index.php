<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Ćwiczenie na ocene - php bazy danych</title>
	<meta charset="utf-8">
	<style type="text/css">
		td{
			padding:10px;
		}
	</style>
</head>
<body>
	<center>
		<!-- 
		Proszę zapoznać się z funkcją "include_once()" 
		https://www.php.net/manual/en/function.include-once.php
		-->
		<?php include_once("polaczenia.php");?>

		<!-- Tworzę zapytanie i pobieram 10 rekordów do pliku index.html -->
		<?php

			$zapytanie = $polaczenie->query("SELECT IDU, Imie, Nazwisko, Adres FROM uczniowie");
			//na przykład:
			// za pomocą pętli while() funkcji list() oraz funkcji mysqli_fetch_row()
			//realizuje cały proces pobierania rekordów z bazy danych
			// tutaj proszę się zapoznać z funkcjami list() oraz mysqli_fetch_row()

			echo "<br>";
			echo "<table border='1'>";
			echo "<tr><td><b>IDU</b></td><td><b>Imię</b></td><td><b>Nazwisko</b></td><td><b>Adres</b></td>";
			while (list($idu,$imie,$nazwisko,$adress)=mysqli_fetch_row($zapytanie)) {
				echo "<tr><td>$idu</td><td>$imie</td><td>$nazwisko</td><td>$adress</td>";
			}
		?>

		<?php $polaczenie->close(); ?>
	</center>
</body>
</html>