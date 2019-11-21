<?php 
	$msg = '';
	if (isset($_POST['submit'])) {
		$obj = new DatabaseWork($pdo, 'publisher');
		$data = [
			'publisher_name' => $_POST['publisher_name']
		];
		$success = $obj->save($data);
		if ($obj){
			header('location:publisher?msg=Publisher Added');
		}
		else
			header('location:publisher?msg=Failed to Add Publisher');
	}

	$pubObj = new DatabaseWork($pdo, 'publisher');
	$publishers = $pubObj->findAll();

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}

	$templateVars = [
		'msg'=>$msg,
		'publishers' => $publishers
	];


	$title = 'Online Book Store - Publisher';
	$pagename = 'Publisher';
	$content = loadTemplate('../views/publisher_design.php', $templateVars);
?>