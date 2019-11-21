<?php
	$orders = $pdo->prepare("SELECT *
		FROM books b 
		JOIN orders o
		ON o.book_id = b.book_id
		JOIN customer c 
		ON c.cust_id = o.cust_id
		ORDER BY ordered_date DESC
	");
	$orders->execute();

	$templateVars = ['orders' => $orders];
	
	$title = 'Online Book Store - View Orders';
	$pagename = 'Orders';
	$content = loadTemplate('../views/viewOrder_design.php', $templateVars);
?>