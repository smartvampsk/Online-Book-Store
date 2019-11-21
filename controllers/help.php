<?php 
	$msg = '';
	if (isset($_POST['submit'])) {
		$obj = new DatabaseWork($pdo, 'messages');
		$data = [
			'firstname' => $_POST['firstname'],
			'surname' => $_POST['surname'],
			'email' => $_POST['email'],
			'message' => $_POST['message']
		];
		$success = $obj->save($data);
		if ($obj){
			header('location:help?msg=Thank you for contacting!');
		}
		else
			header('location:help?msg=Message Sending Failed');
	}

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}

	$templateVars = [
		'msg'=>$msg
	];
	
	$title = 'Online Book Store - Help';
	$pagename = 'Help';
	$content = loadTemplate('../views/help_design.php', $templateVars);
?>