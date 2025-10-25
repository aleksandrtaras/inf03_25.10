<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<style type="text/css">
		
	</style>
</head>
<body>
	<form method="post" action="lowisko.php">
		Wybierz numer akwenu:
		<select name="wybor">
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
		<button type="submit">Pokaz</button>
	</form>
<?php
	if(isset($_POST['wybor']))
	{
		$nr = $_POST['wybor'];
		$id = mysqli_connect('localhost','root','','wedki');
		$zapytanie = "select * from lowisko where rodzaj=$nr";
		$dane = mysqli_query($id,$zapytanie);
		echo "<table>";
		echo "<tr><th>id</th> <th>id_ryby</th> <th>akwen</th> <th>wojewodztwo</th> <th>rodzaj</th></tr>";
		while($wiersz = mysqli_fetch_row($dane))
			echo "<tr><td>$wiersz[0]</td> <td>$wiersz[1]</td> <td>$wiersz[2]</td> <td>$wiersz[3]</td> <td>$wiersz[4]</td></tr>";
		echo "</table>";
		mysqli_close($id);
	}


?>
</body>

</html>