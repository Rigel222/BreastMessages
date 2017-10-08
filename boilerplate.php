<?php
session_start();
if (isset($_REQUEST['ruth'])) {
	$_SESSION['ruth']=true;
} else {
	if ($_SESSION['ruth']) {
	} else {
		header('location: ./comingsoon.php');
	}
}
?>
