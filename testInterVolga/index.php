<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Список стран</title>
</head>
<body>
	<header>
		<div id="inHeader">
			<div id="logo"></div>
			<div id="siteTitle"><a href="/">Countries</a></div>
			<div id="navigationButtons">
				<a href="/">Главная</a>
				<a href="index.php?page=add">Добавить страну</a>
			</div>
		</div>
	</header>
	<div id="content">
		<?php 
			$page = $_GET['page'];
			if (!isset($page)) {
				require('templates/main.php');
			} elseif ($page == 'add') {
				require('templates/addNewCountry.php');
			}
		?>
	</div>
	<footer>
		<div id="inFooter">
			<div id="footerNavigation">
				<a href="/">Главная</a>
				<a href="index.php?page=add">Добавить страну</a>
			</div>
			<div id="copyrights">&copy; Countries, 2019</div>
		</div>
	</footer>
</body>
</html>