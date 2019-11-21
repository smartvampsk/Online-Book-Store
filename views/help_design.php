<div class="container pt-3 pb-3">
	<div class="row pt-3 border rounded pb-2">
		<div class="col-md-6">
			<h2 class="">Leave a Message:</h2>
			<small class="text-muted">Should have any queries? Leave us your queries...</small>
			<div class="mt-2">
				<form method="POST" action="">
					<div class="form-group row pt-3">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="firstname" placeholder="Firstname">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="surname" placeholder="Surname">
						</div>
					</div>
					
					<div class="form-group row">
						<div class="col-sm-6">
							<input type="email" class="form-control" name="email" placeholder="Email" required>
						</div>
						<div class="col-sm-6">
							<textarea class="form-control" name="message" placeholder="Your Message" required></textarea>
						</div>
					</div>

					<div class="form-group text-center d-flex justify-content-around">
						<button type="submit" class="btn btn-lg btn-success px-5 rounded-pill" name="submit">Send</button>
						<button type="reset" class="btn btn-lg btn-danger px-5 rounded-pill" name="reset">Reset</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-2"></div>
		
		<div class="col-md-4 border-left">
			<h2 class="">Contact Detail:</h2><br>
			<address class="mt-2">
				<ul class="list-unstyled">
					<li><i>St Luica South,</i></li>
					<li><i>Sydney SY2 4067,</i></li>
					<li><i>Australia</i></li>
					<li><i>PO. Box: 4067 12 </i></li>
					<li><i>Fax: (07) 3738 0551 </i></li>
				</ul>
			</address>
		</div>
	</div>

	<div class="pt-4">
		<h3>Frequently Asked Questions</h3>	
		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What do we provide?</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingTwo">
					<h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> How many outlet do we have?	</h5>
				</div>

				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					<div class="card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingThree">
					<h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">	Is Delivery Free?</h5>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingFour">
					<h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> How many days will it take to be shipped to destination?</h5>
				</div>

				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
					<div class="card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
					</div>
				</div>
			</div>
		</div>

	</div>
	
</section>