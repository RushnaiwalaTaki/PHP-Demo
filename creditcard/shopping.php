<?php
	
	if (isset($_POST['submit'])) {
		
		$number = $_POST['cc'];
		$total = 0;
		$i = 1;

		$last = substr($number, -4,4);			// get last 4 digit

		$number = str_split($number);			//split into array.

		$number = array_reverse($number);		//array reverse.

		foreach ($number as $digit) {
		
			if ($i % 2 == 0) {
				$digit *= 2;  

				if($digit > 9){
					$digit -= 9;
				}
			}

			$total += $digit;
			$i++;
		}

		if($total % 10 == 0){
			echo "Your Credit Card Number Ending In ". $last ."Is Valid.";
		}else{
			echo "Your Credit Card Number Ending In ". $last ."Is InValid.";
		}
	}
?>