<?php

	require 'user_validator.php';

	if(isset($_POST['submit'])){
		
		// valiate entries
		$validations = new userValidator($_POST);
		$errors = $validations->validateForm();

		// save data to database
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Validations</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="new-user">
		<h2>Create New User</h2>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			<label>Username: </label>	
			<input type="text", name="username" value="<?php echo htmlspecialchars($_POST['username']) ?? '' ?>">
			<div class="error">
				<?php echo $errors['username'] ?? '' ?>
			</div>

			<label>Email: </label>	
			<input type="email", name="email" value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>">	
			<div class="error">
				<?php echo $errors['email'] ?? '' ?>
			</div>

			<input type="submit" name="submit" value="Submit">	
		</form>
	</div>
</body>
</html>