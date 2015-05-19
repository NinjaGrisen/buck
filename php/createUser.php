<?php

	include('db/db.php');

	$sql = "INSERT INTO users (UserName, Password, Fname, Lname, Age, Mail, Country, Gender, Role, Userpicture, Facebook) VALUES (:username, :password, :fname, :lname, :age, 0, :country, :gender, 0, 0, 0)";

	$insert = $dbh->prepare($sql);

	$insert->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
	$insert->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
	$insert->bindParam(':fname', $_POST['fname'], PDO::PARAM_STR);
	$insert->bindParam(':lname', $_POST['lname'], PDO::PARAM_STR);
	$insert->bindParam(':age', $_POST['age'], PDO::PARAM_STR);
	$insert->bindParam(':country', $_POST['country'], PDO::PARAM_STR);
	$insert->bindParam(':gender', $_POST['gender'], PDO::PARAM_STR);

	$insert->execute();

	$sqlfind = "SELECT * FROM users";

	$find = $dbh->prepare($sqlfind);

	$find->execute();

	$data = $find->fetchAll();

	header('Content-type: application/json');
	echo json_encode($data);

?>