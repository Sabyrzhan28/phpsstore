<?php 
     require_once('./apps/config.php');
     
	$pass = $_POST['user-password'];
	$login = $_POST['user-name'];



	if(strlen($_POST['user-name']) < 3){
        header('Location: login-register.php');
    }
    else{


	$sql = "SELECT * FROM users where name = '$login' LIMIT 1";
	$result = $db->query($sql);
	$product = $result->fetch(PDO::FETCH_ASSOC);

	$id = $product['id'];

	if($_POST['user-password'] == $product['password']){
		$_SESSION['login']='on';
		$_SESSION['id']= $id;
		$_SESSION['name']= $login;
		header('Location: my-account.php');
	}else{
		header('Location: login-register.php');
	}


	}



?>