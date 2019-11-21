<?php
	if(!isset($_SESSION['staff_log'])){
		header('location:login');		
	}
?>

<section class="container pt-3 pb-3">
	<div class="row">
		<div class="col-md-2"> </div>

		<div class="mt-3 col-md-8">
			<legend class="pt-1 pb-1">Genre</legend>

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
						<label class="col-sm-4 col-form-label">Genre Name</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="genre_name">
						</div>
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary mt-3 mb-3 px-4 rounded-pill" name="submit">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2"> </div>
		<div class="pt-3 col-md-8 table-responsive">
			<h5>Genre List</h5>
			<table class="table table-sm">
				<thead class="thead-light">
					<tr>
						<th>S.N</th>
						<th>Genre</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sn = 1;
						foreach ($genre as $genre) {
							echo '<tr>';
							echo '<td>'.$sn++.'</td>';
							echo '<td>'.$genre['genre_name'].'</td>';
							echo '<td>
									<a class="btn btn-sm btn-success" href="">Edit</a>
									<a class="btn btn-sm btn-danger" href="genre?delId=' . $genre['genre_id'].'">Delete</a>
								</td>';
							echo '</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</section>