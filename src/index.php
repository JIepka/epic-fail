<?php
	session_start();
?>

<html>
	<head>
		<title> Example</title>
		<link rel = "stylesheet" type="text/css" href = "style1.css">
	</head>
	
	<body>
		<ul class="Menu">
			<li><a href = "index.php"> Главная </a> </li>
				<?php
					if(!isset($_SESSION['login']))
					{ ?>
			<li><a href = "registration.php"> Регистрация</a></li>
			<li><a href = "enter.php">Войти </a></li>
				<?php
				} else
				{ ?>
			<li></a href = "kb.php"> Личный кабинет </a></li>
			<li><a href = "exit.php">Выйти </a></li>
			<li><a href = "delete.php">Удалить </a></li>
				<?php
				} ?>
			<li><a href = "info.php"> Информация</a></li>
		</ul>
	</body>
</html>