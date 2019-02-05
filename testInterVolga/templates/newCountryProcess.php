<?php
	require_once '../connection.php';

	$conn = mysqli_connect($hostname, $username, $password, $database) or die ("Ошибка" . myslqli_error($conn));

	if(isset($_POST['newCountryCode']) && isset($_POST['newCountryName']) && isset($_POST['newCountryLocation']) && isset($_POST['newCountryLanguage']) && isset($_POST['newCountryPopulation']) && isset($_POST['newCountrySquare']) && isset($_POST['newCountryCapital'])) {

		$sqlQuery = mysqli_query($conn, "INSERT INTO `country` (`code`, `name`, `location`, `language`, `population`, `square`, `capital`) VALUES ('{$_POST['newCountryCode']}', '{$_POST['newCountryName']}', '{$_POST['newCountryLocation']}', '{$_POST['newCountryLanguage']}', '{$_POST['newCountryPopulation']}', '{$_POST['newCountrySquare']}', '{$_POST['newCountryCapital']}')");

		if($sqlQuery) {
			echo "<br><span style='color:#4682B4;'>Данные успешно добавлены в таблицу.</span> <br> <a href='/'>Главная</a>";
	    } else {
	      	echo '<p>Произошла ошибка: ' . mysqli_error($conn) . '</p>';
	    }
	}
	mysqli_close($conn);
?>