<?php
	$msg = '';
	$date = new DATETIME();
	$cust_id = $_SESSION['cust_log'];
	$carts = $pdo->prepare("SELECT *
		FROM books b
		JOIN cart c
		ON c.book_id = b.book_id
		JOIN customer cu 
		ON c.cust_id = cu.cust_id
		WHERE c.cust_id = '$cust_id'
	");
	$carts->execute();

	$sumTotal = $pdo->query("SELECT SUM(total_price) as total FROM cart")->fetch();

	if (isset($_GET['dId'])) {
		$dId = $_GET['dId'];
		$delCartItem = new DatabaseWork($pdo, 'cart');
		$delCartItem->delete('cart_id', $dId);
		$msg = 'Book removed from cart';
		header('Refresh:4; url=cart');
	}

	if (isset($_POST['order'])) {
		$orders = $pdo->prepare("INSERT INTO orders(cust_id, book_id, quantity, total_price)
			SELECT cust_id, book_id, quantity, total_price
			FROM cart
			WHERE cust_id = '$cust_id'
		");
		$orders->execute();

		$updateOrderDate = $pdo->prepare("UPDATE orders SET 
				ordered_date = :ordered_date
				WHERE cust_id = $cust_id
				AND ordered_date = '0000-00-00'
			");
		$criteria = ['ordered_date' => $date->format('Y-m-d')];
		$updateOrderDate->execute($criteria);

		$removeCartItem = new DatabaseWork($pdo, 'cart');
		$removeCartItem->delete('cust_id', $cust_id);

		$msg = 'Thanks for ordering. Your orders will be delivered soon';
		header('Refresh:10; url=cart');
		
	}

	$templateVars = [
		'msg'=>$msg, 
		'carts' => $carts, 
		'sumTotal' => $sumTotal
	];
	
	$title = 'Online Book Store - Your Cart';
	$pagename = 'Cart';
	$content = loadTemplate('../views/cart_design.php', $templateVars);
?>