<!DOCTYPE html>
<html>
<head>
<title>PRZYCHODNIA</title>
<meta charset="utf-8">
<link rel="Stylesheet" type="text/css" href="przychodnia.css" />
</head>
<body>

<div id="logo"><h1>PRAKTYKA LEKARZA RODZINNEGO</h1></div>
<div id="menu"><h3>LISTA PACJENTÓW</h3>
<?php 
	$baza = mysqli_connect('localhost','root','','przychodnia');
	$zapytanie = "select id,imie,nazwisko from pacjenci";
	$dane = mysqli_query($baza,$zapytanie);
	while($wiersz = mysqli_fetch_row($dane))
		echo "$wiersz[0] $wiersz[1] $wiersz[2]<br>";	

 ?>
 <p>Podaj id:</p>
 <form action="pacjent.php" method="POST">
 <input type="number" name="numer"><input type="submit" value="Pokaż dane">
 </form>
 <h3>LEKARZE</h3>
 <ul><li>pn – śr</li>
 <ol>
   <li>Anna Kwiatkowska
   <li>Jan Kowalewski
 </ol>
 <li>czw – pt
 <ol>
   <li>Krzysztof Nowak
 </ol>
 <ul>
</div>
<div id="tresc"><h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2><p>Brak wybranego pacjenta</p></div>
<div id="stopka"><p>utworzone przez: Kamilę!</p><a href="kwerendy.txt">Pobierz plik z kwerendami</a></div>


</body>
</html>