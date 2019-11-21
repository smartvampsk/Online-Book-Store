<?php 
	$msg = '';
	if(isset($_POST['submit'])){
		$customerLogin = $pdo->prepare("SELECT * FROM customer WHERE email =:email");
		$criteria = ['email'=> $_POST['email']];
		$error = false;
		$customerLogin -> execute($criteria);
		if($customerLogin->rowCount()>0){
			$user = $customerLogin->fetch();
			if(password_verify($_POST['password'], $user['password'])){
				$_SESSION['cust_log'] = $user['cust_id'];
				$_SESSION['cust_email'] = $user['email'];
			}
			else {
				$error = true;
			}
		}
		else{
			$error = true;
		}
		if($error == true){
			$msg = "Email and Password not matched!";
		}
	}

	$templateVars = [
		'msg' => $msg
	];
	
	$title = 'Online Book Store - Login';
	$pagename = 'Login';
	$content = loadTemplate('../views/login_design.php', $templateVars);
?>