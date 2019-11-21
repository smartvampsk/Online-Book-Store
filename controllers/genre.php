<?php
	$genre_id = $_GET['gen_id'];
	$books = $pdo->prepare("SELECT *
		FROM books b 
		JOIN author a
		ON a.author_id = b.author_id
		JOIN publisher p 
		ON p.publisher_id = b.publisher_id
		JOIN genre g 
		ON g.genre_id = b.genre_id
		WHERE g.genre_id = '$genre_id'
		ORDER BY book_id DESC
	");
	$books->execute();

	$genre = $pdo->query("SELECT * FROM genre WHERE genre_id = $genre_id")->fetch();

	$templateVars = ['books' => $books, 'genre' => $genre];

	$title = 'Online Book Store - Book Genre';
	$pagename = 'Genre';
	$content = loadTemplate('../views/genre_design.php', $templateVars);
?>