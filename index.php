<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 

?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="follow">

		<title>Login Page</title>

		<base href="/" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/css/uikit.min.css" />
	</head>

	<body>

		<div class="uk-section uk-container">
			<div class=".uk-grid.uk-child-width-1-3@s,uk-child-width-1-1">
				<?php
					echo "Today is: ";
					echo date("d/m/Y");
				?>
				<p>
					<a href="php_login_system/login.php">Login</a>
					<a href="php_login_system/register.php">Register</a>
				</p>
			</div>
		</div>

		<?php require_once "inc/footer.php" ?>

	</body>
</html>