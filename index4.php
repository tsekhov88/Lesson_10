<!DOCTYPE html>
<html>
	<head>
		<title>Запись в файл</title>
	</head>
	<body>
		<?php 
			$file_name = __DIR__ .'/log.txt';
			$line = $_POST['line'];
			file_put_contents(
				$file_name,
				$line . "\n",
				FILE_APPEND
				);
				echo 'Строка добавлена!';
		?>
		<div>
			<a href="index3.php">Назад</a>
		</div>
	</body>
</html>