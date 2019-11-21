<?php 
	$msg = '';
	if (isset($_GET['eid'])) {
		$selectedBook = $pdo->query('SELECT * FROM books WHERE book_id = ' . $_GET['eid'])->fetch();
	}

	if (isset($_POST['cancel'])) {
		header('location:viewBooks');
	}

	if (isset($_POST['update'])) {
		$stmt = $pdo->prepare('UPDATE books SET
			title = :title,
			isbn = :isbn,
			author_id = :author_id,
			publisher_id = :publisher_id,
			genre_id = :genre_id,
			released_year = :released_year,
			qty = :qty,
			price = :price
			WHERE book_id = :book_id
		');
		$data = [
			'book_id' => $_POST['book_id'],
			'title' => $_POST['title'],
			'isbn' => $_POST['isbn'],
			'author_id' => $_POST['author_id'],
			'publisher_id' => $_POST['publisher_id'],
			'genre_id' => $_POST['genre_id'],
			'released_year' => $_POST['released_year'],
			'qty' => $_POST['qty'],
			'price'=>$_POST['price']
		];
		$success = $stmt->execute($data);

		if ($success == true){
			header('location:viewBooks?msg=Book Updated Successfully');
		}
		else
			$msg='Failed to Update Book Information';
	}

	$templateVars = [
		'selectedBook'=>$selectedBook,
		'msg' => $msg
	];
	
	$title = 'Online Book Store - Edit Book';
	$pagename = 'Detail';
	$content = loadTemplate('../views/editBook_design.php', $templateVars);
?>