<?php
require_once('./apps/config.php');


if (strlen($_POST['user-name']) < 3){
	$_SESSION['error']= "Логин должен быть не меньше 3-х символов";
		header('Location: login-register.php');
}else{

					$sql = "INSERT INTO users (name, password,email) 			
						VALUES (:name, :pass, :email)";

					$stmt = $db->prepare($sql);

					$stmt->bindValue(':name',$_POST['user-name']);
					$stmt->bindValue(':pass',$_POST['user-password']);
					$stmt->bindValue(':email',$_POST['user-email']);

					$stmt->execute();		

					header("location: my-account.php", true, 301 ); exit;

}

?>