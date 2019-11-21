<?php 
	$msg = '';
	if (isset($_POST['submit'])) {
		if ($_POST['password'] != $_POST['conf_password']){
			$msg = 'Passwords do not Matched. Try Again';
		}
		else {
			$staffObj = new DatabaseWork($pdo, 'staff');
			$data = [
				'firstname' => $_POST['firstname'],
				'surname' => $_POST['surname'],
				'address' => $_POST['address'],
				'email' => $_POST['email'],
				'password' => password_hash($_POST['password'],PASSWORD_DEFAULT)
			];
			$success = $staffObj->save($data);
			if ($staffObj){
				header('location:register?msg=Registered');
			}
			else
				$msg = 'Failed to Add User';
		}
	}

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}

	$templateVars = ['msg'=>$msg];
	
	$title = 'Online Book Store - Register';
	$pagename = 'Register';
	$content = loadTemplate('../views/register_design.php', $templateVars);
?>