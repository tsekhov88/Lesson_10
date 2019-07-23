<?php
	session_start();
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$_SESSION['session_key'] = $_POST['session_key'];
	}
	$value = isset($_SESSION['session_key']) ? $_SESSION['session_key'] : '';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Работа с сессиями</title>
	</head>
	<body>
		<form action="" method="POST">
			<div>
				<input type="text" required name="session_key" value="<?php echo $value ?>" />
			</div>
			<div>
				<input type="submit" value="Сохранить" />
			</div>
		</form>
	</body>
</html>