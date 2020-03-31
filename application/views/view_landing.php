<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url("./assets/css/bootstrap/bootstrap.min.css") ?>">
	</link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- style -->
	<link rel="stylesheet" href="<?php echo base_url("./assets/css/landing.css")?>">
	<title>Obati | Login</title>
</head>

<body>

	<!-- first main header -->
	<div class="container-fluid shadow-sm  bg-white rounded">
		<header class="main-header">
			<nav class="navbar navbar-expand-lg navbar-light p-0 ml-3 mr-3">
				<a class="navbar-brand" href="#"> <img src="<?php echo base_url("assets/img/logo.png")?>" alt=""> </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto ">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Articles</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
						</li>
					</ul>


					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link btn-sign-in" href="#">Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn-sign-up" href="#">Sign Up</a>
						</li>
					</ul>
				</div>
			</nav>

		</header>

	</div>


	<!-- second main header -->
	<div class="category-nav">
		<div class="container category-container p-0">
			<ul class="nav justify-content-center p-1 m-0 nav-fill">
				<li class="nav-item">
					<a class="nav-link active" href="#">Vitamin</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Flu & Cough</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Fever</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pregnancy</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Lose Weight</a>
				</li>
			</ul>

		</div>
	</div>


	<!-- main image -->
	<div class="container-fluid p-0 m-0">
		<div class="main-grid">

			<div class="grid-item grid-item-1">
				<div class="container-top">
					<button class=" btn btn-primary btn-main-drug">Drug detail</button>

				</div>


				<div class="container container-drug d-flex justify-content-between">

					<div class="drug-title">
						<h3 class="drug-name">Acifar 400mg</h3>
						<p class="drug-company">Generic Manufacturer</p>

					</div>
					<h3 class="drug-price">Rp. 31.200</h3>

				</div>



			</div>
			<div class="grid-item grid-item-2">
				<div class="container-top">
					<button class=" btn btn-primary btn-main-drug">Drug detail</button>

				</div>
				<div class="container container-drug d-flex justify-content-between">
					<div class="drug-title">
						<h3 class="drug-name">Herclov 500 MG</h3>
						<p class="drug-company">Sanbe Farma</p>

					</div>
					<h3 class="drug-price">Rp. 157.500</h3>

				</div>
			</div>
			<div class="grid-item grid-item-3">
				<div class="container-top">
					<button class=" btn btn-primary btn-main-drug">Drug detail</button>

				</div>
				<div class="container container-drug d-flex justify-content-between">
					<div class="drug-title">
						<h4 class="drug-name">Drug Name</h4>
						<p class="drug-company">Drug Company</p>

					</div>
					<h4 class="drug-price">Drug Price</h4>

				</div>
			</div>
			<div class="grid-item grid-item-4">
				<!-- <div class="card mb-3">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="<?php echo base_url("./assets/img/doctor.jpg")?>" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h3 class="card-title" style="color:#353535">Meet Our Doctor</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional content.</p>
							</div>
						</div>
					</div>
				</div> -->
			</div>
			<div class="grid-item grid-item-5">
				<div class="container-article">
					<h4 class="article-title mb-4">Keep up with our latest article</h4>
					<button class=" btn btn-primary btn-main-article">Check here</button>

				</div>
			</div>
		</div>
	</div>

	<!-- main most popular category -->
	<!-- <div class="container-fluid p-0 m-0">
		<div class="main-category">
			<div class="row">
				<div class="col-lg-3">
					<div class="item p-2">

					</div>
				</div>
				<div class="col-lg-3">
					<div class="item p-2">

					</div>
				</div>
				<div class="col-lg-3">
					<div class="item p-2">

					</div>
				</div>
				<div class="col-lg-3">
					<div class="item p-2">

					</div>
				</div>

			</div>
		</div>
	</div> -->

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="<?php echo base_url("./assets/js/jquery.js")?>"></script>
	<script src="<?php echo base_url("./assets/js/bootstrap/bootstrap.min.js")?>"></script>
	<script src="<?php echo base_url("./assets/js/view_login.js") ?>"></script>

</body>

</html>
