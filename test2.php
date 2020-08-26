<?php
	
	$array = [0, 100, -4, 8, 143, 5, 99, 100];
	$sum = 0;

	for ($i=0; $i < count($array); $i++) { 
		if ($array[$i]>= -pow(2, 30) && $array[$i]<= pow(2, 30)) {
			$sum_t = $array[$i]*2;
			for ($j=0; $j < count($array); $j++) { 
				$sum_val = $array[$i] + $array[$j];
				if ($sum_val>$sum && $sum_val!=$sum_t) {
					$sum = $sum_val;
					
				}
			}
		}
		else {
			echo "Không thỏa mãn điều kiện";
		}
	}

	echo $sum.'<br>';
?>