<?php

	include('db/db.php');

	$output = $dbh->prepare("SELECT * FROM listitem");

	$output->execute();

	$data = $output->fetchAll();
	header('Content-type: application/json');
	echo json_encode($data);

?>