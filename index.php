<?php

	include("DbModel.php");
	$db = new DB();

	if(isset($_GET['action'])) {
		header("Content-Type: application/json");
		if($_GET['action']=="display") {
			echo json_encode([$db->fetchall()]);
		}
	}

?>