<!DOCTYPE html>
<html>
	<head>
		<title> <?php echo $title; ?> </title>
		<link rel="stylesheet" href="../../css/bootstrap.css"/>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/popper.min.js"></script>
	</head>
	<body>
		<header class="nav-head sticky-top">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="col-md-4">
					<a class="navbar-brand logo-name" href="home">
						<h4 class="logo-name">Beedy's Book Store - Dashboard</h4>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
		      	<div class="collapse navbar-collapse">
		        	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		            	<li class="nav-item">
		                	<a class="nav-link active" href="home">Home <span class="sr-only">(current)</span></a>
		            	</li>
		            	<li class="nav-item dropdown no-arrow drop-genre">
		                	<a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Books</a>
			                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                	<a class="dropdown-item" href="addBooks">Add Books</a>
			                	<a class="dropdown-item" href="viewBooks">View Books</a>
			                	<a class="dropdown-item" href="viewBooks">Edit Books</a>
			                </div>
		             	</li>
		             	<li> <a class="nav-link" href="author">Author</a> </li>
		             	<li> <a class="nav-link" href="publisher">Publisher</a> </li>
		             	<li> <a class="nav-link" href="genre">Genre</a> </li>
		             	<li> <a class="nav-link" href="viewMessage">Messages</a> </li>
		             	<li><a class="nav-link" href="viewOrder">Orders</a></li>
						<li><a class="nav-link" href="register">Register</a></li>
	             		<?php
							if (isset($_SESSION['staff_log'])) {
								echo '<li><a class="nav-link" href="logout">Logout</a></li>';
							}
							else{
								echo '<li><a class="nav-link" href="login">Login</a></li>';
							}
						?>
		          	</ul>
		        </div>
		    </nav>
		</header>

		<main class="main-body">
			<?php echo $content; ?>
		</main>

		<footer class="container-fluid bg-light">
			<div class="">
				<div class="row top-footer pl-5 ml-5">
					<div class="col-md-4 pt-2 left-footer pl-5">
					   	<ul class="foot-link list-unstyled text-left">
					    	<li><a class="nav-link pb-0" href="about">About us</a></li>
					    	<li><a class="nav-link pb-0" href="#">Policies</a></li>
					    	<li><a class="nav-link pb-0" href="help">Help Section</a></li>
				    		<li><a class="nav-link pb-0" href="#">Terms and Conditions</a></li>
					   	</ul>
					</div>

					<div class="col-md-4 pt-2 pl-5 right-footer">
						<h4>Follow Us:</h4>
						<div class=" pb-2">
							<a class="iconSocial" href="https://www.facebook.com" target="_blank"> <img src="../../images/facebook.png" alt="facebook"> </a>
							<a class="iconSocial" href="https://twitter.com" target="_blank"><img src="../../images/twitter.png" alt="twitter"></a>
							<a class="iconSocial" href="https://www.pinterest.com" target="_blank"><img src="../../images/pinterest.png" alt="pinterest"></a>
						</div>
						<div class=" ">
							<a class="iconSocial" href="https://www.youtube.com" target="_blank"><img src="../../images/youtube.png" alt="youtube"></a>
							<a class="iconSocial" href="https://www.linkedin.com" target="_blank"><img src="../../images/linkedin.png" alt="linkedin"></a>
							<a class="iconSocial" href="https://www.viber.com" target="_blank"><img src="../../images/viber.png" alt="viber"></a>
						</div>
					</div>

					<div class="col-md-4 pt-2 pl-5 mid-footer">
						<address>
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

				<div class="pt-2 pb-1 border-top border-dark">
					<div class="text-center">
						<p> &copy; Beedy's Book Store, 2019- <?php echo date('Y'); ?> | All Right Reserved </p>
					</div>
				</div>
			</div>
		</footer>

		<script type="text/javascript">

		</script>
	</body>
</html>