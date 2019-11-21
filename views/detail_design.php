<section class="container pt-3 pb-3">
	<div class="d-flex justify-content-around text-center">
		<?php
			if (!empty($msg)) 
			{
				?>
					<div class="p-2 bg-info alert alert-dismissible fade show">
						<?php echo $msg ?>
						<button type="button" class="close pt-1 text-danger" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true"><b>&times;</b></span>
						</button>
					</div>
				<?php
			}
		?>
	</div>

		<?php
			foreach ($books as $book) { ?>
				<div class="row pt-2">
					<div class="col-md-5">
						<h2><?php echo $book['title']; ?></h2>
						<div class="container">
							<div class="row text-dark">
								<?php
									require '../db/db.php';
									$book_id = $book['book_id'];
									$image = $pdo->query("SELECT * FROM images WHERE book_id = '$book_id'")->fetch();
									if (file_exists('../images/books/' . $image['image_name']) && $image['image_name'] != '') {
										echo '<a href="../images/books/'.$image['image_name'].'"><img  class="card-img-top" src="../images/books/' . $image['image_name'].'" /></a>';
									}
									else{
										echo '<a href="../images/books/book.jpg"><img class="card-img-top" src="../images/books/book.jpg" /></a>';
									}
								?>
							</div>
						</div>
					</div>

					<div class="col-md-1"></div>
					<div class="col-md-6">
						<h2>Book Information</h2>
						<div class="container border">
							<div class="row pt-2 border-bottom">
								<div class="col-md-3 ">
									<p>ISBN</p>
								</div>
								<div class="col-md-9 ">
									<?php echo $book['isbn']; ?>
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Book Title</p>
								</div>
								<div class="col-md-9 ">
									<?php echo $book['title']; ?>
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Author</p>
								</div>
								<div class="col-md-9 ">
									<?php echo $book['firstname'].' '.$book['surname']; ?>
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Genre</p>
								</div>
								<div class="col-md-9 ">
									<?php echo $book['genre_name']; ?>
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Publisher</p>
								</div>
								<div class="col-md-9 ">
									<?php echo $book['publisher_name']; ?>
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Released Year</p>
								</div>
								<div class="col-md-9 ">
									<?php echo $book['released_year']; ?>
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Stock Quantity</p>
								</div>
								<div class="col-md-9 ">
									<?php echo $book['qty']; ?>
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Price</p>
								</div>
								<div class="col-md-9 ">
									<?php echo '$'.$book['price']; ?>
								</div>
							</div>
						</div>

						<div class="mt-3">
							<form method="POST">
								<input type="hidden" name="book_id" value="<?php echo $book['book_id']; ?>">
								<input type="hidden" name="cust_id" value="<?php echo $_SESSION['cust_log']; ?>">
								<input type="hidden" name="price" value="<?php echo $book['price']; ?>">
								<div class="form-group row">
									<label class="col-sm-3 pt-0 col-form-label">Quantity</label>
									<div class="col-md-6">
										<input type="radio" class="ml-1" name="quantity" value="1" checked="">
										<label>1</label>
										<input type="radio" class="ml-2" name="quantity" value="2">
										<label>2</label>
										<input type="radio" class="ml-2" name="quantity" value="3">
										<label>3</label>
										<input type="radio" class="ml-2" name="quantity" value="4">
										<label>4</label>
										<input type="radio" class="ml-2" name="quantity" value="5">
										<label>5</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5">
										<button class="btn btn-outline-warning" name="buy"
											<?php 
												if (!isset($_SESSION['cust_log'])) {
													echo 'disabled="disablesd"'; 
												}
											?>> Buy Now
										</button>
									</div>
									<div class="col-md-5">
										<button class="btn btn-outline-info" name="cart" 
											<?php 
												if (!isset($_SESSION['cust_log'])) { 
													echo 'disabled="disablesd"'; 
												}
											?>>Add to Cart
										</button>
									</div>
								</div>
							</form>
							<?php 
								if (!isset($_SESSION['cust_log'])) {  ?>
									<div class="text-center col-md-8 text-danger pt-3 alert alert-dismissible fade show">
										<div class="d-flex justify-content-around">
											<div class="col-md-11 bg-light rounded p-2">
												<h6 class="pb-0">You are not Logged in.</h6>
												<small>You cannot buy or add to cart book.</small>
												<button type="button" class="close pt-1" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true"><b>&times;</b></span>
												</button>
											</div>
										</div>
									</div>
								<?php }
							?>
						</div>
					</div>
				</div>
			<?php } ?>
</section>

<script>
	function allowDrop(ev) {
	  ev.preventDefault();
	}

	function drag(ev) {
	  ev.dataTransfer.setData("text", ev.target.id);
	}

	function drop(ev) {
	  ev.preventDefault();
	  var data = ev.dataTransfer.getData("text");
	  ev.target.appendChild(document.getElementById(data));
	}
</script>