<h1>Добавить новую страну</h1>
<form action="newCountryProcess.php" method="post">
	<table>
		<tr>
			<td>Введите код страны: </td><td><input class="newCountryText" type="number" name="newCountryCode"></td>
		</tr>
		<tr>
			<td>Введите название страны:</td><td><input class="newCountryText" type="text" name="newCountryName"></td>
		</tr>
		<tr>
			<td>Введите расположение страны: </td><td><input class="newCountryText" type="text" name="newCountryLocation"></td>
		</tr>
		<tr>
			<td>Введите основной язык: </td><td><input class="newCountryText" type="text" name="newCountryLanguage"></td>
		</tr>
		<tr>
			<td>Введите население: </td><td><input class="newCountryText" type="text" name="newCountryPopulation"></td>
		</tr>
		<tr>
			<td>Введите площадь страны: </td><td><input class="newCountryText" type="text" name="newCountrySquare"></td>
		</tr>
		<tr>
			<td>Введите столицу: </td><td><input class="newCountryText" type="text" name="newCountryCapital"></td>
		</tr>
		<tr>
			<td><input id="newCountrySubmit" type="submit" value="Ввод"></td><td><a href="/">Главная</a></td>
		</tr>

	</table>
</form>