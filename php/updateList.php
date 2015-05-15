<?php
	
	$do = isset($_GET['do']) ? $_GET['do'] : null;
	$data = '';

	include('db/db.php');

if($do === 'update-title'){

	$sql = "UPDATE listitem SET Title = :title 
			WHERE ItemID = :id";

	$update = $dbh->prepare($sql);

	$update->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
	$update->bindParam(':id', $_POST['list_id'], PDO::PARAM_INT);

	$update->execute();

	$sqlfind = "SELECT * FROM listitem WHERE ItemID = :id ORDER BY Rank";

	$find = $dbh->prepare($sqlfind);

	$find->bindParam(':id', $_POST['list_id'], PDO::PARAM_INT);

	$find->execute();

	$data = $find->fetch();
}

if($do === 'update-rank'){

	$sql = "UPDATE listitem SET Rank = :indexValue 
			WHERE ItemID = :id";

	$update = $dbh->prepare($sql);

	$update->bindParam(':indexValue', $_POST['indexValue'], PDO::PARAM_INT);
	$update->bindParam(':id', $_POST['itemId'], PDO::PARAM_INT);

	$update->execute();

	$sqlfind = "SELECT * FROM listitem ORDER BY Rank";

	$find = $dbh->prepare($sqlfind);

	$find->bindParam(':id', $_POST['itemId'], PDO::PARAM_INT);

	$find->execute();

	$data = $find->fetch();
}
	header('Content-type: application/json');
	echo json_encode($data);

?>