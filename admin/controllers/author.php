<?php 
	$msg = '';
	if (isset($_POST['submit'])) {
		$obj = new DatabaseWork($pdo, 'author');
		$data = [
			'firstname' => $_POST['firstname'],
			'surname' => $_POST['surname'],
			'contact' => $_POST['contact'],
			'address' => $_POST['address']
		];
		$success = $obj->save($data);
		if ($obj){
			header('location:author?msg=Author Added');
		}
		else
			header('location:author?msg=Failed to Add Author');
	}

	$autObj = new DatabaseWork($pdo, 'author');
	$authors = $autObj->findAll();

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}

	$templateVars = [
		'msg'=>$msg,
		'authors' => $authors
	];
	
	$title = 'Online Book Store - Artist';
	$pagename = 'artist';
	$content = loadTemplate('../views/author_design.php', $templateVars);
?>