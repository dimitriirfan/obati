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
    <link rel="stylesheet" href="<?php echo base_url("./assets/css/footer.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("./assets/css/detail_category.css")?>">

    


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
						<form class="form-inline">
							<input class=" search form-control form-control-md mr-3 w-75" type="text"
								placeholder="Search" aria-label="Search">
							<i class="fa fa-search" aria-hidden="true"></i>
						</form>
						<li class="nav-item">
							<a class="nav-link btn-sign-in"
								href="<?php echo base_url("index.php/Controller_landing/toLogin")?>">Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn-sign-up"
								href="<?php echo base_url("index.php/Controller_landing/toRegister")?>">Sign Up</a>
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


	<!-- main catehory -->
	<div class="container-fluid">
		<div class="container">
			<div class="main-category">


				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Category</a></li>
						<li class="breadcrumb-item active" aria-current="page">Category (apa)</li>
					</ol>
				</nav>
                <hr>
                <div class="category-items">
                <div class="row row-cols-1 row-cols-lg-4">
					<div class="col mb-4">
						<div class="card h-100">
							<img src="..." class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<div class="card h-100">
							<img src="..." class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a short card.</p>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<div class="card h-100">
							<img src="..." class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content.</p>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<div class="card h-100">
							<img src="..." class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
							</div>
						</div>
					</div>
				</div>

                </div>
				


			</div>
		</div>
	</div>
