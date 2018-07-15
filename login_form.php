<header>

<form name="login_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

Username: <input type="text" name="username" value="" required/>
Password: <input type="password" name="password" value="" required/>
<input type="submit" name="login" value="Login" /> | <a href="register_form.php">Register Here</a>

</form>

</header>

<section class="pbgContainer">

	<div class="powerballGen">

		<span id="numGenTitle">Power Ball</span><br>
		<span id="numGenTitleSub">Number Generator</span><br><br>
			
			<div class="numberSets">

				<center><p>Welcome to Isaiah's Powerball Number Generating application! Please log in or sign up to use the application!</p></center>

			</div>

		<div id="numGenPrint"><h5>Application developed by Isaiah M. Duncan - 2017</h5></div>		

	</div>

</section>	