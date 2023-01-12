<?php
 include_once "header.php";
 ?>
	
	<main>
		<section class="main">
			<div class="main__container">
				<?php
					if (isset($_SESSION["useruid"])) {
						echo "<h1 class='main__title'>Welcome, " . $_SESSION["useruid"] . "!</h1>";
					} else {
						echo "<h1 class='main__title'>Hello there!</h1>";
					}
				?>
			</div>
		</section>
	</main>

<?php
 include_once "footer.php";
 ?>