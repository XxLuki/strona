<?php require("register.class.php") ?>
<?php
	if(isset($_POST['submit'])){
		$user = new RegisterUser($_POST['username'], $_POST['password']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
	<title>Rejestracja</title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>Formularz rejestracyjny</h2>
		<h4>Wszystkie pola są <span>wymagane</span></h4>

		<label>Nazwa użytkownika</label>
		<input type="text" name="username">

		<label>Hasło</label>
		<input type="text" name="password">

		<button type="submit" name="submit">Wyślij</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	</form>

</body>
</html>