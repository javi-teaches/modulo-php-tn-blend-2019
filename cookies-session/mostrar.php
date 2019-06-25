<?php
	session_start();
	if ( isset($_SESSION['counter']) ) {
		echo "<h2> {$_SESSION['counter']} </h2>";
	}
?>
