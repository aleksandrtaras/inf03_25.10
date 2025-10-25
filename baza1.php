<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
	$baza = mysqli_connect('localhost','root','','zajecia');
	$zapytanie = "select * from studenci";
	$dane = mysqli_query($baza,$zapytanie);
	echo "<ol>";
	while($wiersz = mysqli_fetch_row($dane))
	{
		echo "<li>".$wiersz[1]." ".$wiersz[2]." ".$wiersz[3]."</li>";
	}
	echo "</ol>";
	echo "<br>";
	$dane = mysqli_query($baza,$zapytanie);
	echo "<table>";
	while($wiersz = mysqli_fetch_row($dane))
	{
		echo "<tr> <td>".$wiersz[1]."</td><td> ".$wiersz[2]."</td><td>".$wiersz[3]."</td></tr>";
	}
	echo "</table>";
	echo "<br>";


	
	mysqli_close($baza);
?>
</body>
</html>