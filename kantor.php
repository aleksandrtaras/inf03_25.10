<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="kantor.php">
		<p>Podaj ilosc zlotych: <input type="number" name="liczba"></p>
		<input type="radio" name="kantor" value="dollary">dollar
		<input type="radio" name="kantor" value="euro">euro<br>
		<input type="submit" name="wyslij" value="oblicz"><br>
	</form>
	
<?php
if(isset($_POST['liczba']) && isset($_POST['kantor']))
{
	$zlot = $_POST['liczba'];
	$kantor = $_POST['kantor'];
	if($kantor == 'euro')
	{
		$wynik = $zlot / 4.2;
		echo $zlot." zl = ".$wynik." euro";		
	}
	else
	{
		$wynik = $zlot / 3.7;
		echo $zlot." zl = ".$wynik." $";
	}	
		
}
?>
</body>
</html>