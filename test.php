<?php
	$n = 3;
	$a = array(11, 2, 8, 10, 5, 99, 1, 8, 9);
	$count = count($a);
	$array = array();
	if ($count%3==0) {
		for ($i=0; $i <$n; $i++) { 
			for ($j=0; $j < $n; $j++) { 
				array_push($array, $a[$i+$n*$j]);
			}
			
		}
	}
	
	print_r($array);
?>