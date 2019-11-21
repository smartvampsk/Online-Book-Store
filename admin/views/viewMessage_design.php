<?php
	if(!isset($_SESSION['staff_log'])){
		header('location:login');		
	}
?>

<section class="container pt-3 pb-3">
	<div class="mt-3 mb-3">
		<h4 class="">Messages</h4>
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
						<?php header('Refresh:5; url=view_item'); ?>
					</button>
				</div>
			<?php
		}
		?>
	</div>
	
	<div class=" table-responsive">
		<table class="table table-sm">
			<thead class="thead-light">
				<tr>
					<th>S.N</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Messaage</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sn = 1;
					foreach ($messages as $message) {
						echo '<tr>';
						echo '<td>'.$sn++.'</td>';
						echo '<td>'.$message['firstname'].' '. $message['surname'].'</td>';
						echo '<td>'.$message['email'].'</td>';
						echo '<td>'.$message['message'].'</td>';
						echo '<td>
								<a class="btn btn-sm btn-success" href="">Reply</a>
							</td>';
						echo '</tr>';
					}
				?>
			</tbody>
		</table>
	</div>
</section>