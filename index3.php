<!DOCTYPE html>
<html>
	<head>
		<title>Запись в файл</title>
	</head>
	<body>
		<form action="index4.php" method="POST">
			<div>
				<label>Строка</label>
				<input type="text" name="line" required="required" />
			</div>
			<div>
				<input type="submit" value="Записать" />
		</form>
		<ul>
			<?php
				$file_name = __DIR__ . '/log.txt';
				$lines = explode(
						"\n",
						file_get_contents($file_name)
					);
					foreach($lines as $line) {
							?>
							<li><?=$line ?></li>
							<?php

				}
			?>
		</ul>
	</body>
</html>