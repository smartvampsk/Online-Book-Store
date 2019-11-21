<?php
	if(!isset($_SESSION['cust_log'])){
		header('location:login');		
	}
?>

<section class="container pt-3 pb-3">
	<div class="row pt-5">
		<div class="col-md-4 text-center">
			<h3 class="">Your Cart</h3>
			<img src="../images/cart.png" height="120px">
		</div>
		<div class="col-md-8">
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
				if ($carts->rowCount()==0) {
				 	echo 'There is no book items in your cart';
				 }
				else { ?>
				<table class="table table-sm table-striped table-borderless">
				  <thead>
				    <tr>
				      <th scope="col">S.N.</th>
				      <th scope="col">Book Title</th>
				      <th scope="col">Date</th>
				      <th scope="col">Unit Price</th>
				      <th scope="col">Qty</th>
			  	      <th scope="col">Total Price</th>
			  	      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
					<?php
						$sn = 1;
						foreach ($carts as $cart) {
							echo '<tr>';
							echo '<th scope="row">'.$sn++.'</td>';
							echo '<td>'.$cart['title'].'</td>';
							echo '<td>'.$cart['cart_date'].'</td>';
							echo '<td>'.$cart['price'].'</td>';
							echo '<td>'.$cart['quantity'].'</td>';
							echo '<td>'.$cart['total_price'].'</td>';
							echo '<td>
									<a href="cart?dId='.$cart['cart_id'].'"><img src="../images/cancel.png" height="30px"></a>
								</td>';
							echo '</tr>';
						} ?>
					</tbody>
				</table>
				<div class="row pt-3 pb-3 d-flex justify-content-around">
					<h5>Grand Total: <strong class="text-warning">$<?php echo $sumTotal['total']; ?>
					</strong></h5>
					<form method="POST" action="">
						<button class="btn btn-warning" name="order">Order Now</button>
					</form>
				</div>
			<?php } ?>
		</div>
	</div>
</section>