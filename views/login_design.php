<?php
	if(isset($_SESSION['cust_log'])){
		header('location:home');		
	}
?>

<section class="container pt-3 pb-3">
	<div class="row">
		<div class="col-md-2">
			
		</div>

		<div class="mt-3 mb-3 col-md-8">
			<legend class="pt-1 pb-1">Log on to your Account </legend>

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
						<label class="col-sm-4 col-form-label">Email</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" name="email">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Password</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" name="password">
						</div>
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary mt-3 mb-3 px-4 rounded-pill" name="submit">Login</button>
						<small class="text-muted"><a class="pl-3" href="">Forget Password?</a></small>
						<p class="text-muted">Not a Member? <a class="pl-2" href="register">Register</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>