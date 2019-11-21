<?php
	if(!isset($_SESSION['staff_log'])){
		header('location:login');		
	}
?>

<section class="container pt-3 pb-3">
	<div class="mt-3 mb-3">
		<h4 class="">Orders</h4>
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
	
	<div class="table-responsive">
		<table class="table table-sm">
			<thead class="thead-light">
				<tr>
					<th>S.N</th>
					<th>Customer</th>
					<th>Book</th>
					<th>Order Date</th>
					<th>Qty</th>
					<th>Unit Price</th>
					<th>Total Price</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sn = 1;
					foreach ($orders as $order) {
						echo '<tr>';
						echo '<td>'.$sn++.'</td>';
						echo '<td>'.$order['firstname'].' '.$order['surname'].'</td>';
						echo '<td>'.$order['title'].'</td>';
						echo '<td>'.$order['ordered_date'].'</td>';
						echo '<td>'.$order['quantity'].'</td>';
						echo '<td>'.$order['price'].'</td>';
						echo '<td>'.$order['total_price'].'</td>';
						echo '</tr>';
					}
				?>
			</tbody>
		</table>
	</div>
</section>