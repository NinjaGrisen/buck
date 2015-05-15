<?php

	include('db/db.php');

	$output = $dbh->prepare("SELECT * FROM listitem ORDER BY Rank");

	$output->execute();

	$data = $output->fetchAll();

	header('Content-type: application/json');
	echo json_encode($data);

?>