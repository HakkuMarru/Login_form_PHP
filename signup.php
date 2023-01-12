<?php
include_once "header.php";
	?>
	
<section class="login__container">
	<h1 class="title">Sign Up</h1>
	<form class="form" action="includes/signup.inc.php" method="POST">
		<input type="text" name="name" placeholder="Full name...">
		<input type="text" name="email" placeholder="Email...">
		<input type="text" name="uid" placeholder="Username...">
		<input type="password" name="pwd" placeholder="Password...">
		<input type="password" name="pwdRepeat" placeholder="Repeat password...">
		<button class="button" type="submit" name="submit">Sign Up</button>
	</form>

	<p class="alert">
	<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo "Fill in all fields!";
			} else if ($_GET["error"] == "invaliduid") {
				echo "Choose a proper username!";
			} else if ($_GET["error"] == "invaliemail") {
				echo "Choose a proper email!";
			} else if ($_GET["error"] == "pwddontmatch") {
				echo "Passwords don't match!";
			} else if ($_GET["error"] == "stmtfailed") {
				echo "Oops... Something went wrong! Please, try again.";
			} else if ($_GET["error"] == "usernametaken") {
				echo "Username already taken!";
			} else if ($_GET["error"] == "none") {
				echo "You have signed up!";
			}
		}
	?>
	</p>

</section>



<?php
 include_once "footer.php";
 	?>