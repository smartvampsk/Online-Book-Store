<?php
	if(!isset($_SESSION['staff_log'])){
		header('location:login');		
	}
?>

<section class="container pt-3 pb-3">
	<div class="row">
		<div class="col-md-2"> </div>

		<div class="mt-3 mb-3 col-md-8">
			<legend class="pt-1 pb-1">Register New Staff</legend>

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
					<label class="col-sm-4 col-form-label">First name <span class="text-danger">*</span></label>
					<div class="col-sm-8">
						<input type="text" name="firstname" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Surname <span class="text-danger">*</span></label>
					<div class="col-sm-8">
						<input type="text" name="surname" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Address</label>
					<div class="col-sm-8">
						<input type="text" name="address" class="form-control">
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Email <span class="text-danger">*</span></label>
					<div class="col-sm-8">
						<input type="email" name="email" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Password <span class="text-danger">*</span></label>
					<div class="col-sm-8">
						<input type="password" name="password" class="form-control">
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Confirm Password <span class="text-danger">*</span></label>
					<div class="col-sm-8">
						<input type="password" name="conf_password" class="form-control">
					</div>
				</div>
				
				<div class="form-group text-center">
					<button type="submit" name="submit" class="btn btn-lg btn-primary mt-3 mb-3 px-5 rounded-pill">Register</button>
				</div>
			</form>
		</div>
		</div>
	</div>
</section>