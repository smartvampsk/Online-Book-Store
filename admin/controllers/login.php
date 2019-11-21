<?php 
	$msg = '';
	if(isset($_POST['submit'])){
		$staffLogin = $pdo->prepare("SELECT * FROM staff WHERE email =:email");
		$criteria = ['email'=> $_POST['email']];
		$error = false;
		$staffLogin -> execute($criteria);
		if($staffLogin->rowCount()>0){
			$user = $staffLogin->fetch();
			if(password_verify($_POST['password'], $user['password'])){
				$_SESSION['staff_log'] = $user['staff_id'];
				$_SESSION['staff_email'] = $user['email'];
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
