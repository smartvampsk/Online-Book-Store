<?php 
	$msg = '';
	if (isset($_POST['submit'])) {
		$obj = new DatabaseWork($pdo, 'genre');
		$data = [
			'genre_name' => $_POST['genre_name']
		];
		$success = $obj->save($data);
		if ($obj){
			header('location:genre?msg=Genre Added');
		}
		else
			header('location:genre?msg=Failed to Add Genre');
	}

	$genObj = new DatabaseWork($pdo, 'genre');
	$genre = $genObj->findAll();

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}

	$templateVars = [
		'msg'=>$msg,
		'genre' => $genre
	];
	
	$title = 'Online Book Store - Genre';
	$pagename = 'Genre';
	$content = loadTemplate('../views/genre_design.php', $templateVars);
?>