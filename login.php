<?php
 include_once "header.php";
 ?>
	
<section class="login__container">
		<h1 class="title">Log In</h1>
		<form class="form" action="includes/login.inc.php" method="POST">
			<input type="text" name="uid" placeholder="Username/Email...">
			<input type="password" name="pwd" placeholder="Password...">
			<button class="button" type="submit" name="submit">Log In</button>
		</form>

		<p class="alert">
			<?php
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyinput") {
						echo "Fill in all fields!";
					} else if ($_GET["error"] == "wronglogin") {
						echo "Incorrect login information!";
					}	
				}
			?>
		</p>
	</section>
	
	

<?php
 include_once "footer.php";
 ?>