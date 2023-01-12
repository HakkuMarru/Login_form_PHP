<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Log In</title>
</head>
<body>
	<header>
		<nav class="nav">
			<ul class="nav-ul">
				<li class="nav-li">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-li">
					<a class="nav-link" href="products.php">Products</a>
				</li>
				<li class="nav-li">
					<a class="nav-link" href="about.php">About Us</a>
				</li>
				<?php
					if (isset($_SESSION["useruid"])) {
						echo "<li class='nav-li'><a class='nav-link' href='profile.php'>Profile</a></li>";
						echo "<li class='nav-li'><a class='nav-link' href='includes/logout.inc.php'>Logout</a></li>";
					} else {
						echo "<li class='nav-li'><a class='nav-link' href='signup.php'>Sign Up</a></li>";
						echo "<li class='nav-li'><a class='nav-link' href='login.php'>Log In</a></li>";
					}
				?>
			</ul>
		</nav>
	</header>