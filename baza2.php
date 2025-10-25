<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<style type="text/css">
		table{
			border:1px solid black;
			border-collapse:collapse;
		}
		td{
			border:1px solid black;
		}
	</style>
</head>
<body>
<h2>Lista pracownikow</h2>
<?php
	$baza = mysqli_connect('localhost','root','','firma');
	$zapytanie = "select imie,nazwisko,stanowisko,pesel from pracownicy";
	$dane = mysqli_query($baza,$zapytanie);
	echo "<table>";
	while($wiersz = mysqli_fetch_row($dane))
	{
		echo "<tr><td>$wiersz[0]</td><td>$wiersz[1]</td><td>$wiersz[2]</td><td>$wiersz[3]</td></tr>";
	}
	echo "</table>";
	$zapytanie = "select nazwisko,stanowisko,placa from pracownicy";
	$dane = mysqli_query($baza,$zapytanie);	
	echo "<ul>";
	while($wiersz = mysqli_fetch_row($dane))
	{
		echo "<li>$wiersz[0] $wiersz[1] $wiersz[2] </li>";
	}
	echo "</ul>";


	
	mysqli_close($baza);
?>
</body>
</html>