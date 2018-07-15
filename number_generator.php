<header>
<!-- once logged in users will see this welcome message in the header of the application -->
<?php echo 'Welcome, ' .  $_SESSION['username'] . "! You are free to use the number generator."; ?>

</header>

<!-- this section lays out the foundation for the number generator design -->
<section class="pbgContainer">

	<div class="powerballGen">

		<span id="numGenTitle">Power Ball</span><br>
		<span id="numGenTitleSub">Number Generator</span><br><br>

		<div class="numberSets">

			<div id="numGenSet">

				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set1wb1'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set1wb2'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set1wb3'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set1wb4'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set1wb5'];?></div></div>
				<div class="powerballContainer"><div class="powerball"><?php echo $_SESSION['set1pb'];?></div></div>

			</div>

			<div id="numGenSet">

				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set2wb1'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set2wb2'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set2wb3'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set2wb4'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set2wb5'];?></div></div>
				<div class="powerballContainer"><div class="powerball"><?php echo $_SESSION['set2pb'];?></div></div>

			</div>

			<div id="numGenSet">

				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set3wb1'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set3wb2'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set3wb3'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set3wb4'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set3wb5'];?></div></div>
				<div class="powerballContainer"><div class="powerball"><?php echo $_SESSION['set3pb'];?></div></div>

			</div>

			<div id="numGenSet">

				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set4wb1'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set4wb2'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set4wb3'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set4wb4'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set4wb5'];?></div></div>
				<div class="powerballContainer"><div class="powerball"><?php echo $_SESSION['set4pb'];?></div></div>

			</div>

			<div id="numGenSet">

				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set5wb1'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set5wb2'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set5wb3'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set5wb4'];?></div></div>
				<div class="whiteballContainer"><div class="whiteball"><?php echo $_SESSION['set5wb5'];?></div></div>
				<div class="powerballContainer"><div class="powerball"><?php echo $_SESSION['set5pb'];?></div></div>

			</div>						
		</div>
		
		<!-- once clicked, new sets of numbers will be generated -->
		<form action="handles/set_numbers.php" method="POST">

			<input type="submit" name="generate" value="Generate Numbers" />

		</form>
		<div id="numGenPrint"><h5><a href='logout_button.php'>Logout</a> | <a href="javascript:window.print()">Print</a></h5></div>		

	</div>

</section>