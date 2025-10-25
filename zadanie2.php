<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form action="zadanie2.php" method="post">
		<p>Podaj wage w kg: <input type="number" name="waga"></p>
		<p>Podaj wzrost w cm: <input type="number" name="wzrost"></p>
		<button type="submit">oblicz</button><br>
	</form>
<?php
	if(isset($_POST['waga']) && isset($_POST['wzrost']))
	{
		$waga = $_POST['waga'];
		$wzrost = $_POST['wzrost'];
		$wzrost = $wzrost / 100;
		$bmi = $waga / ($wzrost * $wzrost);
		if($bmi < 16)
			echo $bmi." wyglodzenie";
		else if($bmi >= 16 && $bmi <= 16.9)
			echo $bmi." wychudzenie";
			
		
	}

?>	
</body>
</html>