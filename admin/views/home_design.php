<?php
	if(!isset($_SESSION['staff_log'])){
		header('location:login');		
	}
?>

<section class="container pt-3 pb-3">
	<div class="card-deck mb-5 d-flex justify-content-around card-img">
			<div class="card border-0">
				<a class="nav-link text-center " href="addBooks">
					<img src="../../images/addBooks.png">
					<p class="pt-2">Add Books</p>
				</a>
			</div>
			<div class="card border-0">
				<a class="nav-link text-center " href="viewBooks">
					<img src="../../images/viewBooks.png">
					<p class="pt-2">View Books</p>
				</a>
			</div>
			<div class="card border-0">
				<a class="nav-link text-center" href="viewBooks">
					<img src="../../images/editBooks.png">
					<p class="pt-2">Edit Books</p>
				</a>
			</div>
		</div>

		<div class="card-deck mb-3 d-flex justify-content-around card-img">
			<div class="card border-0">
				<a class="nav-link text-center " href="author">
					<img src="../../images/artist.png">
					<p class="pt-2">Author</p>
				</a>
			</div>
			<div class="card border-0">
				<a class="nav-link text-center " href="publisher">
					<img src="../../images/publisher.png">
					<p class="pt-2">Publisher</p>
				</a>
			</div>
			<div class="card border-0">
				<a class="nav-link text-center " href="genre">
					<img src="../../images/genre.png">
					<p class="pt-2">Genre</p>
				</a>
			</div>
		</div>	

		<div class="card-deck mb-3 d-flex justify-content-around card-img">
			<div class="card border-0">
				<a class="nav-link text-center " href="viewMessage">
					<img src="../../images/viewMessage.png">
					<p class="pt-2">View Messages</p>
				</a>
			</div>
			<div class="card border-0">
				<a class="nav-link text-center " href="viewOrder">
					<img src="../../images/viewOrder.png">
					<p class="pt-2">View Order Details</p>
				</a>
			</div>
			<div class="card border-0">
				<a class="nav-link text-center " href="register">
					<img src="../../images/register.png">
					<p class="pt-2">Register</p>
				</a>
			</div>
		</div>	
	</div>
</section>