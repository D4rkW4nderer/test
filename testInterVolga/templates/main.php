<?php 
	require_once 'connection.php';
	$conn = mysqli_connect($hostname, $username, $password, $database) or die("Error" . mysqli_error($conn));
	$sqlQueryLoad = "SELECT * FROM country";
	$loadData = mysqli_query($conn, $sqlQueryLoad);
?>

<h1 id="countriesList">Список стран</h1>
<table id="countriesTable" align="center">
	<tr>
		<th>Код страны</th>
		<th>Название</th>
		<th>Местоположение</th>
		<th>Язык</th>
		<th>Население</th>
		<th>Площадь</th>
		<th>Столица</th>
	</tr>

	<?php 
		if ($loadData) {
			$key = 1;

			while ($countriesLoad = mysqli_fetch_array($loadData)) {
				echo "<tr><td>" . $countriesLoad['code'] . "</td><td>" . $countriesLoad['name'] . "</td><td>" . $countriesLoad['location'] . "</td><td>" . $countriesLoad['language'] . "</td><td>" . $countriesLoad['population'] . "</td><td>" . $countriesLoad['square'] . "</td><td>" . $countriesLoad['capital'] . "</td></tr>";
				$key++;
			}
		}
	?>
</table>

<?php 
	mysqli_close($conn);
?>
