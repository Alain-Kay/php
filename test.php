﻿<?php 
	
	//test2
	
	/*
	if(isset($_POST['a']) and isset($_POST['b'])) {
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $a + $b;
		
		if($c == 3) {
			echo $a.' + '.$b.' = '.$c;
		} else {
			echo $a.' + '.$b.' = '.$c;
		}
	}*/
	
	//test3
	
	function tintin($a) {
		$c = array();
		foreach ($a as $b) {
			$c[] = $a[$b];
		}
		return $c;
	}

	$d = array(5,3,4,1,0,2);
	$s = tintin($d);
	
	echo "<pre>";
	print_r($s);
	echo "</pre>";
	
?>