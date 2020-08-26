<?php
	$hieu = 1000;
	$arr = [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];
	$array = array();
	if (count($arr)<10000 && count($arr)>0) {
		for ($i=0; $i < count($arr) ; $i++) { 
		for ($j=0; $j < count($arr); $j++) { 
			if ($i != $j && $arr[$i]<$arr[$j]) {
				$hieu_val = $arr[$j]-$arr[$i];
				if ($hieu_val>0 && $hieu_val<=$hieu) {
					$hieu = $hieu_val;
				}
			}
		}
	}
	echo $hieu;

	for ($i=0; $i < count($arr) ; $i++) { 
		for ($j=0; $j < count($arr); $j++) { 
			if ($i != $j && $arr[$i]<$arr[$j]) {
				$hieu_val = $arr[$j]-$arr[$i];
				if ($hieu_val == $hieu) {
					array_push($array, $arr[$i],$arr[$j]);
				}
			}
		}
	}
	echo "<pre>";
	print_r(array_chunk($array, 2));
	echo "</pre>";
	}
	

?>