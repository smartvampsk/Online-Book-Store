
<section class="container pt-3 pb-3">
	<div class="col-md-6 row">
		<h2 class=""><?php echo $genre['genre_name']; ?> Books</h2>
	</div>
	
	<div class="card-deck border-top">
		<?php
			$i = 0;
			foreach ($books as $book) {
				$i++;
				?>
				<div class="col-md-3"> 
					<div class="card mt-3 m-0">
						<?php 
							require '../db/db.php';
							$book_id = $book['book_id'];
							$image = $pdo->query("SELECT * FROM images WHERE book_id = '$book_id'")->fetch();
							if (file_exists('../images/books/' . $image['image_name']) && $image['image_name'] != '') {
								echo '<a href="../images/books/'.$image['image_name'].'"><img  class="card-img-top" src="../images/books/' . $image['image_name'].'" /></a>';
							}
							else{
								echo '<a href="../images/books/book.jpg"><img  class="card-img-top" src="../images/books/book.jpg" /></a>';
							}
						?>
						<div class="card-body">
							<p class="mb-0 text-muted"><b><?php echo 'Book Name: '.$book['title']; ?></b></p>
							<p class="mb-0 text-muted"><b><?php echo 'Author: '.$book['firstname'].' '.$book['surname']; ?></b></p>
							<p class="mb-0 text-muted"><b><?php echo 'Price:  $'.$book['price']; ?></b></p>
							<p class="text-center"><?php echo '<a class="btn btn-success btn-sm " href="detail?vid='.$book['book_id'].'">Show Detail</a>'; ?> </p>
						</div>
					</div>
				</div>
				<?php
				if ($i == 9) { break; }
			}
		if ($books->rowCount() == 0) { ?>
			<p class="pl-3 pt-3">Sorry! No book available in this genre.</p>
		<?php } ?>
	</div>
		
	<div class="row pt-5 col-md-8">
		<h2 class="">Other books</h2>
		<small class="pt-3 pl-3 text-dark">- Not available to buy</small>
	</div>
	
	<div class="card-deck border-top">	
		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/heart-of-darkness.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: Heart of Darkness</b></p>
					<p class="mb-0 text-muted"><b>Author: Joseph Conrad</b></p>
					<p class="mb-0 text-muted"><b>Price: $55.45</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm" href="detail">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>
		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/handmaid.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: The Handmaid's Tale</b></p>
					<p class="mb-0 text-muted"><b>Author: Margaret Atwood</b></p>
					<p class="mb-0 text-muted"><b>Price: $42.8</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>
		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/heart-of-darkness.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: Heart of Darkness</b></p>
					<p class="mb-0 text-muted"><b>Author: Joseph Conrad</b></p>
					<p class="mb-0 text-muted"><b>Price: $55.45</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>
		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/handmaid.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: The Handmaid's Tale</b></p>
					<p class="mb-0 text-muted"><b>Author: Margaret Atwood</b></p>
					<p class="mb-0 text-muted"><b>Price: $42.8</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>

		<!-- ------------------------------------- -->
		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/handmaid.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: The Handmaid's Tale</b></p>
					<p class="mb-0 text-muted"><b>Author: Margaret Atwood</b></p>
					<p class="mb-0 text-muted"><b>Price: $42.8</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>

		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/heart-of-darkness.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: Heart of Darkness</b></p>
					<p class="mb-0 text-muted"><b>Author: Joseph Conrad</b></p>
					<p class="mb-0 text-muted"><b>Price: $55.45</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>

		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/handmaid.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: The Handmaid's Tale</b></p>
					<p class="mb-0 text-muted"><b>Author: Margaret Atwood</b></p>
					<p class="mb-0 text-muted"><b>Price: $42.8</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>
		
	</div>
</section>