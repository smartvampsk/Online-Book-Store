<?php 
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

	$templateVars = ['books' => $books];
	
	$title = 'Online Book Store - Home';
	$pagename = 'Home';
	$content = loadTemplate('../views/home_design.php', $templateVars);
?>