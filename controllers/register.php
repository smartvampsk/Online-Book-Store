<?php 
	$msg = '';
	if (isset($_POST['submit'])) {
		if ($_POST['password'] != $_POST['conf_password']){
			$msg = 'Passwords do not Matched. Try Again';
		}
		$custObj = new DatabaseWork($pdo, 'customer');
		$data = [
			'firstname' => $_POST['firstname'],
			'surname' => $_POST['surname'],
			'gender' => $_POST['gender'],
			'contact' => $_POST['contact'],
			'email' => $_POST['email'],
			'address' => $_POST['address'],
			'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
		];
		$success = $custObj->save($data);
		if ($custObj){
			header('location:register?msg=Registered');
		}
		else
			header('location:register?msg=Failed to Add User');
	}

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}

	$templateVars = ['msg'=>$msg];
	
	$title = 'Online Book Store - Register';
	$pagename = 'Register';
	$content = loadTemplate('../views/register_design.php', $templateVars);
?>