<?php

class numbers {

	var $numbers;

	//create array of random numbers in the range of 1 to 69
	function set_whiteballs () {

		$wbRange = range(1, 69);
		shuffle($wbRange);
		$this->wbArray = $wbRange;

	}

	//loop through and print 5 indexes from the array
	function get_whiteballs () {

		for ($x=0; $x < 5; $x++) {
			echo "White Ball #" . ($x+1) . " is " . $this->wbArray[$x] . ".<br>";
		};

	}

	//create array of a random number in the range of 1 to 26
	function set_powerball () {

		$pbRange = range(1, 26);
		shuffle($pbRange);
		$this->powerball = $pbRange;

	}

	//echo the random powerball number for a specific object
	function get_powerball () {

		echo "The Power Ball # is " . $this->powerball[0] . ".<br>";

	}

}


?>