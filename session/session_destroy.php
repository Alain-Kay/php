<?php

	session_start();
	
	session_destroy();
	echo 'Vous vous �tes deconnect� avec succ�s';
	
	$_SESSION['pseudo'] = 'Dimokeur';

?>