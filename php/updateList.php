<?php

	include('db/db.php');

	$sql = "UPDATE listitem SET Title = :title 
			WHERE ItemID = :id";

	$update = $dbh->prepare($sql);

	$update->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
	$update->bindParam(':id', $_POST['list_id'], PDO::PARAM_INT);

	$update->execute();

	$sqlfind = "SELECT * FROM listitem WHERE ItemID = :id";

	$find = $dbh->prepare($sqlfind);

	$find->bindParam(':id', $_POST['list_id'], PDO::PARAM_INT);

	$find->execute();

	$data = $find->fetch();


	header('Content-type: application/json');
	echo json_encode($data);

?>