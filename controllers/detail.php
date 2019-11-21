<?php
	$msg = '';
	$date = new DATETIME();
	$vid = $_GET['vid'];

	$books = $pdo->prepare("SELECT *
		FROM books b 
		JOIN author a
		ON a.author_id = b.author_id
		JOIN publisher p 
		ON p.publisher_id = b.publisher_id
		JOIN genre g 
		ON g.genre_id = b.genre_id
		WHERE book_id = '$vid'
	");
	$books->execute();

	if (isset($_POST['buy'])) {
		$qty = $_POST['quantity'];
		$price = $_POST['price'];
		$total = $qty * $price;

		$obj = new DatabaseWork($pdo, 'orders');
		$data = [
			'cust_id' => $_POST['cust_id'],
			'book_id' => $_POST['book_id'],
			'quantity' => $qty,
			'total_price' => $total,
			'ordered_date' => $date->format('Y-m-d')
		];
		$success = $obj->save($data);
		if ($obj){
			$msg = "Thank you for buying book. Your book will be delivered soon";
			header('Refresh:10; url=detail?vid='.$vid);
		}
		else
			$msg = "Failed to Order";
	}

	if (isset($_POST['cart'])) {
		$qty = $_POST['quantity'];
		$price = $_POST['price'];
		$total = $qty * $price;

		$cartObj = new DatabaseWork($pdo, 'cart');
		$data = [
			'cust_id' => $_POST['cust_id'],
			'book_id' => $_POST['book_id'],
			'quantity' => $qty,
			'total_price' => $total,
			'cart_date' => $date->format('Y-m-d')
		];
		$success = $cartObj->save($data);
		if ($cartObj){
			$msg = 'Book Added to Cart'.'<a href="cart" class="ml-4 btn btn-sm btn-outline-warning ">View My Cart</a>';
			header('Refresh:10; url=detail?vid='.$vid);
		}
		else
			$msg = "Failed to add to Cart";
	}

	$templateVars = ['msg' => $msg, 'books' => $books];
	
	$title = 'Online Book Store - Book Detail';
	$pagename = 'Detail';
	$content = loadTemplate('../views/detail_design.php', $templateVars);
?>
