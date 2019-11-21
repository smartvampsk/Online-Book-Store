<?php
	$msg = '';
	$messObj = new DatabaseWork($pdo, 'messages');
	$messages = $messObj->findAll();

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}

	$templateVars = [
		'msg'=>$msg,
		'messages' => $messages
	];
	
	$title = 'Online Book Store - View Messages';
	$pagename = 'Detail';
	$content = loadTemplate('../views/viewMessage_design.php', $templateVars);
?>