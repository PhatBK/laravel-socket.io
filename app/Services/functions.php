<?php
	function random_min_max($min,$max){
		return rand($min,$max);
	}
	function range_min_max($min,$max,$n){
		$result = array();
		$i = 0 ;
		for($i ; $i < $n ; $i++){
			$result[$i] = rand($min,$max);
		}
		return $result;
	}
?>