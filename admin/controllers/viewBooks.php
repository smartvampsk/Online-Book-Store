<?php
	$msg = '';

	if (isset($_GET['delId'])) {
		$dId = $_GET['delId'];
		$deleteBook = new DatabaseWork($pdo, 'books');
		$deleteBook->delete('book_id', $dId);
		$msg = "Book Deleted";
		header("Refresh:8, url=viewBooks");
	}

	$books = $pdo->prepare("SELECT *
		FROM books b
		JOIN author a
		ON a.author_id = b.author_id
		JOIN publisher p 
		ON p.publisher_id = b.publisher_id
		JOIN genre g 
		ON g.genre_id = b.genre_id
		ORDER BY book_id DESC
	");
	$books->execute();	

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}

	$templateVars = [
		'msg'=>$msg,
		'books' => $books
	];
	$title = 'Online Book Store - View Book';
	$pagename = 'Detail';
	$content = loadTemplate('../views/viewBook_design.php', $templateVars);
?>