<?php
	if(!isset($_SESSION['staff_log'])){
		header('location:login');		
	}
?>

<section class="container pt-3 pb-3">
	<div class="row">
		<div class="col-md-2"> </div>

		<div class="mt-3 mb-3 col-md-8">
			<div class="d-flex justify-content-between">
				<h4 class="">Edit Book</h4>
				<p><a class="btn btn-sm btn-outline-info ml-5" href="viewBooks">View All Books</a></p>
			</div>

			<div class="text-left">
				<?php
				if (!empty($msg)) 
				{
					?>
						<div class=" p-2 bg-info alert alert-dismissible fade show">
							<div class="col-md-11">
								<?php echo $msg; ?>
							</div>
							<button type="button" class="close pt-1" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><b>&times;</b></span>
							</button>
						</div>
					<?php
				}
				?>
			</div>

			<div class="border rounded mt-2 p-3">
			<form method="POST" action="">
				<div class="form-group row pt-3">
					<label class="col-sm-4 col-form-label">Book Title </label>
					<div class="col-sm-8">
						<input type="hidden" name="book_id" class="form-control" value="<?php echo $selectedBook['book_id'];?>">
						<input type="text" name="title" class="form-control" value="<?php echo $selectedBook['title'];?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">ISBN </label>
					<div class="col-sm-8">
						<input type="text" name="isbn" class="form-control" value="<?php echo $selectedBook['isbn'];?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Author </label>
					<div class="col-sm-8">
						<select class="form-control" name="author_id">
							<?php
		                		require '../db/db.php';
		                		$author = $pdo->prepare("SELECT * FROM author ORDER BY firstname ASC");
		                		$author->execute();
		                		foreach ($author as $aut) {
		                			if ($aut['author_id'] == $selectedBook['author_id']) {
										echo '<option selected="selected" value="'.$aut['author_id'].'">'.$aut['firstname'].' '.$aut['surname'].'</option>';
									}
									else {
										echo '<option value="'.$aut['author_id'].'">'.$aut['firstname'].' '.$aut['surname'].'</option>';
									}
		                		}
		                	?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Publisher </label>
					<div class="col-sm-8">
						<select class="form-control" name="publisher_id">
							<?php
		                		require '../db/db.php';
		                		$publisher = $pdo->prepare("SELECT * FROM publisher ORDER BY publisher_name ASC");
		                		$publisher->execute();
		                		foreach ($publisher as $pub) {
		                			if ($pub['publisher_id'] == $selectedBook['publisher_id']) {
										echo '<option selected="selected" value="'.$pub['publisher_id'].'">'.$pub['publisher_name'].'</option>';
									}
									else {
										echo '<option value="'.$pub['publisher_id'].'">'.$pub['publisher_name'].'</option>';
									}
		                		}
		                	?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Genre </label>
					<div class="col-sm-8">
						<select class="form-control" name="genre_id">
							<option value="" disabled="">-- Choose Genre --</option>
							<?php
		                		require '../db/db.php';
		                		$genre = $pdo->prepare("SELECT * FROM genre ORDER BY genre_name ASC");
		                		$genre->execute();
		                		foreach ($genre as $gen) {
		                			if ($gen['genre_id'] == $selectedBook['genre_id']) {
										echo '<option selected="selected" value="'.$gen['genre_id'].'">'.$gen['genre_name'].'</option>';
									}
									else {
										echo '<option value="'.$gen['genre_id'].'">'.$gen['genre_name'].'</option>';
									}
		                		}
		                	?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Released Year</label>
					<div class="col-sm-8">
						<input type="text" name="released_year" class="form-control" value="<?php echo $selectedBook['released_year'];?>">
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Quantity in Stock</label>
					<div class="col-sm-8">
						<input type="number" name="qty" class="form-control" value="<?php echo $selectedBook['qty'];?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Price </label>
					<div class="col-sm-8">
						<input type="number" name="price" class="form-control" value="<?php echo $selectedBook['price'];?>">
					</div>
				</div>

				<div class="form-group d-flex justify-content-around">
					<button type="submit" name="update" class="btn btn-lg btn-primary mt-3 mb-3 px-5 rounded-pill">Update</button>
					<button type="submit" name="cancel" class="btn btn-lg btn-danger mt-3 mb-3 px-5 rounded-pill">Cancel</button>
				</div>
			</form>
		</div>
		</div>
	</div>
</section>