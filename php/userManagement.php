<?php
session_start();
include('db/db.php');

$do = isset($_GET['do']) ? $_GET['do'] : null;

$options = [
   'cost' => 11,
   'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];

$data = '';

$placeholder = 0;

if($do === 'get-user'){

	$userName = isset($_GET['username']) ? $_GET['username'] : null;

	$sqlFetchUser = "SELECT * FROM users WHERE UserName = :username";

	$fetchUser = $dbh->prepare($sqlFetchUser);

	$fetchUser->bindParam(':username', $userName);

	$fetchUser->execute();

	$data = $fetchUser->fetchAll();

	echo $fetchUser->rowCount();
	die();

	if($fetchUser->rowCount() < 0){
		$data = '';
	}else{
		$data = $fetchUser->fetchAll();
	}	
}


if($do === 'add-user'){

	$hashedPass = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);

	$sqlfindUserName = "SELECT * FROM users WHERE UserName = :username";

	$findUsername = $dbh->prepare($sqlfindUserName);

	$findUsername->bindParam(':username', $_POST['username'], PDO::PARAM_STR);

	$findUsername->execute();

	if($findUsername->rowCount() > 0){
	
		$data = 'There is already a user with that name, please try another one.';

	} else {

		$sqlInsert = "INSERT INTO users (UserName, Password, Name, Age, Mail, Country, Gender, Role, Userpicture, Facebook) VALUES (:username, :password, :name, :age, :mail, :country, :gender, 0, 0, 0)";

		$insert = $dbh->prepare($sqlInsert);

		$insert->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
		$insert->bindParam(':password', $hashedPass, PDO::PARAM_STR);
		$insert->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
		$insert->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
		$insert->bindParam(':age', $placeholder, PDO::PARAM_STR);
		$insert->bindParam(':country', $placeholder, PDO::PARAM_STR);
		$insert->bindParam(':gender', $_POST['gender'], PDO::PARAM_STR);

		$insert->execute();
	}
}


if($do === 'user-login'){


	$user = $_POST['username'];
	$password = $_POST['password'];
	 
	if($user === '') {
		$data = 'You must enter your Username';
	}
	else if($password === '') {
		$data = 'You must enter your Password';
	}else{
		// query
		$sql = "SELECT * FROM users WHERE UserName = :username";

		$result = $dbh->prepare($sql);

		$result->bindParam(':username', $user);
		//$result->bindParam(':password', $password);

		$result->execute();

		$data = $result->fetchAll();

		if (password_verify($password, $data[0]['Password'])) {
	    	$_SESSION['userSession'] = $data[0]['UserName'];
			//header('Location: http://localhost/buck/');  	
	    	$data = 'Password is valid!';
		} else {
		
			$data = 'Wrong match with password, please try again';
		}	
	}
	
}

header('Content-type: application/json');
echo json_encode($data);

?>