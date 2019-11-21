<?php 
	$msg = '';
	if (isset($_POST['submit'])) {
		$obj = new DatabaseWork($pdo, 'books');
		$data = [
			'title' => $_POST['title'],
			'isbn' => $_POST['isbn'],
			'author_id' => $_POST['author_id'],
			'publisher_id' => $_POST['publisher_id'],
			'genre_id' => $_POST['genre_id'],
			'released_year' => $_POST['released_year'],
			'qty' => $_POST['qty'],
			'price' => $_POST['price']
		];
		$obj->save($data);

		if(isset($_FILES['image'])){
			$errors= array();
			$file_name = $_FILES['image']['name'];
			$file_size =$_FILES['image']['size'];
			$file_tmp =$_FILES['image']['tmp_name'];
			$file_type=$_FILES['image']['type'];
			$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

			$extensions= array("jpeg","jpg","png", 'gif', 'PNG');

			if(in_array($file_ext,$extensions)=== false){
				$errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}

			if($file_size > 2097152){
				$errors[]='File size must be excately 2 MB';
			}

			if(empty($errors)==true){
				move_uploaded_file($file_tmp,"../../images/books/".$file_name);
				echo "Success";
			}else{
				print_r($errors);
			}

	        $photoName = $pdo->lastInsertId();
	       	$savePhoto = $pdo->prepare("INSERT INTO images(book_id, image_name)
	        		VALUES('$photoName', '$file_name')");
	       	$savePhoto->execute();
       	}
       	else {
       		echo 'No image selected';
       	}

		if ($obj){
			header('location:viewBooks?msg=Book Added');
		}
		else
			header('location:viewBooks?msg=Failed to Add Book');
	}

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}

	$templateVars = [
		'msg'=>$msg
	];

	$title = 'Online Book Store - Add Books';
	$pagename = 'Add Books';
	$content = loadTemplate('../views/addBooks_design.php', $templateVars);
?>