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
<h2>Lista samochodow</h2>
<?php
	$baza = mysqli_connect('localhost','root','','wedki');
	$zapytanie = "select * from samochody";
	$dane = mysqli_query($baza,$zapytanie);
	echo "<table>";
	while($wiersz = mysqli_fetch_row($dane))
	{
		echo "<tr><td>$wiersz[0]</td><td>$wiersz[1]</td><td>$wiersz[2]</td><td>$wiersz[3]</td><td>$wiersz[4]</td><td>$wiersz[5]</td></tr>";
	}
	echo "</table>";
?>
<p>Podaj id:</p>
<form action="baza3.php" method="POST">
	<input type="number" name="numer"><input type="submit" value="Pokaż dane">
</form>	
<?php
	if(isset($_POST['numer']))
	{
		$nr = $_POST['numer'];
		$zapytanie = "select * from samochody where id=$nr";
		$dane = mysqli_query($baza,$zapytanie);
		while($wiersz = mysqli_fetch_row($dane))
		{
			echo "$wiersz[0] $wiersz[1] $wiersz[2] $wiersz[3] $wiersz[4] $wiersz[5]";			
		}
	}
	echo "<h2>Zawody</h2>";
	$zapytanie = "select data_zawodow,sedzia from zawody_wedkarskie";
	$dane = mysqli_query($baza,$zapytanie);
	echo "<ul>";
	while($wiersz = mysqli_fetch_row($dane))
		echo "<li>$wiersz[0] $wiersz[1]";
	echo "</ul>";



	
	mysqli_close($baza);
?>
</body>
</html>