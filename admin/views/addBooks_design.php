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
				<h4 class="">Add a Book</h4>
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
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="form-group row pt-3">
					<label class="col-sm-4 col-form-label">Book Title <span class="text-danger">*</span></label>
					<div class="col-sm-8">
						<input type="text" name="title" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">ISBN <span class="text-danger">*</span></label>
					<div class="col-sm-8">
						<input type="text" name="isbn" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Author <span class="text-danger">*</span></label>
					<div class="col-sm-8">
						<select class="form-control" name="author_id">
							<option value="" selected="" disabled="">-- Choose Author --</option>
							<?php
		                		require '../db/db.php';
		                		$author = $pdo->prepare("SELECT * FROM author ORDER BY firstname ASC");
		                		$author->execute();
		                		foreach ($author as $aut) {
		                			echo '<option value="'.$aut['author_id'].'">'.$aut['firstname'].' '.$aut['surname'].'</option>';
		                		}
		                	?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Publisher <span class="text-danger">*</span></label>
					<div class="col-sm-8">
						<select class="form-control" name="publisher_id">
							<option value="" selected="" disabled="">-- Choose Publisher --</option>
							<?php
		                		require '../db/db.php';
		                		$publisher = $pdo->prepare("SELECT * FROM publisher ORDER BY publisher_name ASC");
		                		$publisher->execute();
		                		foreach ($publisher as $pub) {
		                			echo '<option value="'.$pub['publisher_id'].'">'.$pub['publisher_name'].'</option>';
		                		}
		                	?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Genre <span class="text-danger">*</span></label>
					<div class="col-sm-8">
						<select class="form-control" name="genre_id">
							<option value="" selected="" disabled="">-- Choose Genre --</option>
							<?php
		                		require '../db/db.php';
		                		$genre = $pdo->prepare("SELECT * FROM genre ORDER BY genre_name ASC");
		                		$genre->execute();
		                		foreach ($genre as $gen) {
		                			echo '<option value="'.$gen['genre_id'].'">'.$gen['genre_name'].'</option>';
		                		}
		                	?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Released Year</label>
					<div class="col-sm-8">
						<input type="text" name="released_year" class="form-control">
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Quantity in Stock</label>
					<div class="col-sm-8">
						<input type="number" name="qty" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Price <span class="text-danger">*</span></label>
					<div class="col-sm-8">
						<input type="number" name="price" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Book Image</label>
					<div class="col-sm-8">
						<!-- <input type="file" name="imageUploading" class="form-control-file" enctype="multipart/form-data"> -->
						<input type="file" class="form-control-file" name="image" accept="image/*">
					</div>
					
				</div>
				<div class="form-group text-center">
					<button type="submit" name="submit" class="btn btn-lg btn-primary mt-3 mb-3 px-5 rounded-pill">Add</button>
				</div>
			</form>
		</div>
		</div>
	</div>
</section>