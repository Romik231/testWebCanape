<?php/** * Основной шаблон * =============== * $title - заголовок * $content - HTML страницы */?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head>	<title><?=$title?></title>	<meta content="text/html; charset=utf-8" http-equiv="content-type">    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />    <script src="../public/scripts/jquery.js"></script>    <script src="../public/scripts/script.js"></script></head><body>	<div id="header">		<h1><?=$title?></h1>	</div>		<div id="menu">		<a href="index.php">На главную</a> |	</div>		<div id="content">		<?=$content?>	</div>		<div id="footer">        Все права защищены. Адрес. Телефон.	</div></body></html>