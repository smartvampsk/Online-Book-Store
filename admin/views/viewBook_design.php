<?php
	if(!isset($_SESSION['staff_log'])){
		header('location:login');		
	}
?>

<section class="container pt-3 pb-3">
	<div class="row">
		<div class="col-md-2"> </div>

		<div class="mt-3 mb-3 col-md-12">
			<div class="d-flex justify-content-between">
				<h4 class="">View Books</h4>
				<p><a class="btn btn-sm btn-outline-info ml-5" href="addBooks">Add a Book</a></p>
			</div>
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
							<?php header('Refresh:5; url=viewBooks'); ?>
						</button>
					</div>
				<?php
			}
			?>
		</div>
	</div>
	
	<div class="mr-2 table-responsive">
		<table class="table table-sm">
			<thead class="thead-light">
				<tr>
					<th>S.N</th>
					<th>Book Title</th>
					<th>ISBN</th>
					<th>Author</th>
					<th>Publisher</th>
					<th>Genre</th>
					<th>Released Year</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sn = 1;
					foreach ($books as $book) {
						echo '<tr>';
						echo '<td>'.$sn++.'</td>';
						echo '<td>'.$book['title'].'</td>';
						echo '<td>'.$book['isbn'].'</td>';
						echo '<td>'.$book['firstname'].' '.$book['surname'].'</td>';
						echo '<td>'.$book['publisher_name'].'</td>';
						echo '<td>'.$book['genre_name'].'</td>';
						echo '<td>'.$book['released_year'].'</td>';
						echo '<td>'.$book['qty'].'</td>';
						echo '<td>$'.$book['price'].'</td>';
						echo '<td>
								<a class="btn btn-sm btn-success" href="editBooks?eid=' . $book['book_id'].'">Edit</a>
								<a class="btn btn-sm btn-danger" href="viewBooks?delId=' . $book['book_id'].'">Delete</a>
							</td>';
						echo '</tr>';
					}
				?>
			</tbody>
		</table>
	</div>
</section>