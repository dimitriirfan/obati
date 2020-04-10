<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo base_url("./obati.ico")?>" >

	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url("./assets/css/bootstrap/bootstrap.min.css") ?>">
	</link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- style -->
	<link rel="stylesheet" href="<?php echo base_url("./assets/css/landing.css")?>">
	<link rel="stylesheet" href="<?php echo base_url("./assets/css/footer.css")?>">


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
							<a class="nav-link" href="<?php echo base_url("index.php/Controller_article")?>">Articles</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<form action="" class="form-inline mr-5 " >
							<div class="input-group ">
								<input type="text " name="" class="form-control search" placeholder="search">
								<div class="input-group-append">
									<button class="btn search"> <i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
						<li class="nav-item">
							<a class="nav-link btn-sign-in"
								href="<?php echo base_url("index.php/Controller_landing/toLogin")?>">Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn-sign-up btn-orange"
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


	<!-- main image -->
	<div class="container-fluid p-0 m-0">
		<div class="main-grid">

			<div class="grid-item grid-item-1">
				<div class="inner-item">
					<div class="container-top">
						<button class=" btn btn-main-drug">Drug detail</button>
					</div>
					<div class="container container-drug d-flex justify-content-between">
						<div class="drug-title">
							<h4 class="drug-name">Acifar 400mg</h4>
							<p class="drug-company">Generic Manufacturer</p>
						</div>
						<h4 class="drug-price">Rp. 31.200</h4>
					</div>
				</div>
			</div>
			<div class="grid-item grid-item-2">
				<div class="inner-item">
					<div class="container-top ehm">
						<button class=" btn btn-main-drug">Drug detail</button>
					</div>
					<div class="container container-drug d-flex justify-content-between">
						<div class="drug-title">
							<h4 class="drug-name">Herclov 500 MG</h4>
							<p class="drug-company">Sanbe Farma</p>
						</div>
						<h4 class="drug-price">Rp. 157.500</h4>
					</div>
				</div>
			</div>
			<div class="grid-item grid-item-3">
				<div class="inner-item">
					<div class="container-top">
						<button class=" btn btn-main-drug">Drug detail</button>

					</div>
					<div class="container container-drug d-flex justify-content-between">
						<div class="drug-title">
							<h4 class="drug-name">Drug Name</h4>
							<p class="drug-company">Drug Company</p>
						</div>
						<h4 class="drug-price">Drug Price</h4>
					</div>
				</div>
			</div>
			<div class="grid-item grid-item-4">
				
			</div>
			<div class="grid-item grid-item-5">
				<div class="inner-item">
					<div class="container-article">
						<h4 class="article-title mb-4">Keep up with our latest article</h4>
						<button class=" btn btn-main-article">Check here</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- main most popular category -->
	<div class="container-fluid p-0 m-0">
		<div class="main-category">
			<div class="category-grid">
				<div class="grid-c-item grid-c-item-1 shadow-sm  bg-white rounded">
					<div class="tag tag-hot">Hot</div>
					<div class="inner-c-item ">
						<img class="mb-4" src="<?php echo base_url("./assets/img/coronavirus.png")?>" alt="">
						<h5 class="mb-0">Flu & Viruses</h5>
						<p>123 items</p>
					</div>
				</div>
				<div class="grid-c-item grid-c-item-2 shadow-sm  bg-white rounded">
					<div class="tag tag-hot tag-passive">Hot</div>
					<div class="inner-c-item">
						<img class="mb-4" src="<?php echo base_url("./assets/img/cough2.png")?>" alt="">
						<h5 class="mb-0">Cough</h5>
						<p>123 items</p>
					</div>
				</div>
				<div class="grid-c-item grid-c-item-3 shadow-sm  bg-white rounded">
					<div class="tag tag-hot tag-passive">Hot</div>
					<div class="inner-c-item">
						<img class="mb-4" src="<?php echo base_url("./assets/img/eye-makeup.png")?>" alt="">
						<h5 class="mb-0">Eye Care</h5>
						<p>123 items</p>
					</div>
				</div>
				<div class="grid-c-item grid-c-item-4 shadow-sm  bg-white rounded">
					<div class="tag tag-hot tag-passive">Hot</div>
					<div class="inner-c-item">
						<img class="mb-4" src="<?php echo base_url("./assets/img/mom.png")?>" alt="">
						<h5 class="mb-0">Baby</h5>
						<p>123 items</p>
					</div>
				</div>

				<!-- jumbo -->
				<div
					class="grid-c-item grid-c-item-5 shadow-sm  bg-white rounded ">
					<div class="covid-title">
						<img src="<?php echo base_url("./assets/img/obati_fix.svg")?>" alt="">
						<h1>Batuk?</h1>
						<h2>Belum tentu kamu kena Covid-19</h2>
						<div class="d-flex align-items-baseline">
							
							<span class="covid-like">
								<i class="fa fa-heart" style="color:#FF5F5F"></i>
							</span>
							<p class="flex-shrink-1 ml-2">361 likes</p>
						</div>
						<button class="btn btn-primary btn-block btn-j btn-orange">Cek gejalanya</button>
					</div>
				</div>

				<!-- jumbo end -->

				<div class="grid-a-item grid-a-item-1 shadow-sm bg-white rounded">
					<div class="tag">Article</div>
					<h5 class="mb-0">Wash your damn hands</h5>
					<p>is simply dummy text of the printing and typesetting industry.</p>
					<div class="foot d-flex align-items-baseline">
						<span class="covid-like ">
							<i class="fa fa-heart" style="color:#FF5F5F"></i>
						</span>
						<p class="flex-shrink-1 ml-2 mr-5">361 likes</p>
						<button class="btn btn-primary btn-a flex-grow-1 btn-orange">Baca</button>
					</div>
				</div>

				<div class="grid-a-item grid-a-item-2 shadow-sm  bg-white rounded">
					<div class="tag">Article</div>
					<h5 class="mb-0">Healthy inside fresh outside.</h5>
					<p>is simply dummy text of the printing and typesetting industry.</p>
					<div class="foot d-flex align-items-baseline">
						<span class="covid-like ">
							<i class="fa fa-heart" style="color:#FF5F5F"></i>
						</span>
						<p class="flex-shrink-1 ml-2 mr-5">361 likes</p>
						<button class="btn btn-primary btn-a flex-grow-1 btn-orange">Baca</button>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- main why -->
	<div class="container-fluid m-0 p-0" style="background-color:#F2F2F2">
		<div class="top-decoration d-flex justify-content-between">
			<span class="d-flex">
				<div class="decoration decoration-why-1"></div>
				<div class="decoration decoration-why-2"></div>

			</span>

			<div class="decoration decoration-why-3"></div>

		</div>

		<div class="main-why">
			<div class="container">
				<div class="why-grid">
					<div class="grid-w-item grid-w-item-1 shadow-sm  bg-white">
						<div class="inner-w-item">
							<img class="mb-4" src="<?php echo base_url("./assets/img/simple.png")?>" alt="">
							<h5 class="mb-0">Simple</h5>

						</div>

					</div>
					<div class="grid-w-item grid-w-item-2 shadow-sm  bg-white ">
						<div class="inner-w-item">
							<img class="mb-4" src="<?php echo base_url("./assets/img/pill.png")?>" alt="">
							<h5 class="mb-0">Diverse</h5>

						</div>

					</div>
					<div class="grid-w-item grid-w-item-3 shadow-sm  bg-white ">
						<div class="inner-w-item">
							<img class="mb-4" src="<?php echo base_url("./assets/img/trust.png")?>" alt="">
							<h5 class="mb-0">Trusted</h5>

						</div>

					</div>
					<div class="grid-w-item grid-w-item-4 shadow-sm  bg-white ">
						<div class="inner-w-item">
							<img class="mb-4" src="<?php echo base_url("./assets/img/fast.png")?>" alt="">
							<h5 class="mb-0">Fast</h5>

						</div>

					</div>
					<div class="grid-w-item grid-w-item-5 shadow-sm  bg-white">
						<div class="inner-w-title">
							<div class="why">
								<h1>Why Choose Obati ?</h1>
								<p>There are many reason to choose obati. Here are the main ones</p>

							</div>

						</div>


					</div>

				</div>
			</div>


		</div>

		<!-- middle -->
		<div class="container">
			<div class="middle-container">

			</div>

		</div>

		<!-- main testimonials -->

		<div class="container">
			<div class="main-testimonial">
				<div class="main-t-top">
					<h1 class="main-testimonial-title">What they say about us.</h1>
				</div>
				<div class="testimonials">
					<div class="card-deck">
						<div class="card mb-3">
							<img class="card-img-top" src="<?php echo base_url("./assets/img/girl1.jpg")?>"
								alt="Card image cap">
							<div class="card-body">

								<p class="card-text">Jadi inget sewaktu masa kecil aku pernah lorem ipsum dolor sit amet
									is simply dummy text of the printing and typesetting industry.</p>

							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-between align-content-center"
									style="text-align-start">

									<span>
										<h5 class="t-name ">Haris Subekti</h5>
										<p class="t-job">Surgeon Doctor</p>

									</span>
									<i class="fa fa-heart" style="color:#FF5F5F"></i>
								</div>

							</div>
						</div>
						<div class="card mb-3">
							<img class="card-img-top" src="<?php echo base_url("./assets/img/boy1.jpg")?>"
								alt="Card image cap">
							<div class="card-body">

								<p class="card-text">Jadi inget sewaktu masa kecil aku pernah lorem ipsum dolor sit amet
									is simply dummy text of the printing and typesetting industry.</p>

							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-between align-content-center"
									style="text-align-start">

									<span>
										<h5 class="t-name ">Dimitri Irfan</h5>
										<p class="t-job">Surgeon Doctor</p>

									</span>
									<i class="fa fa-heart" style="color:#FF5F5F"></i>
								</div>

							</div>

						</div>
						<div class="card mb-3">
							<img class="card-img-top" src="<?php echo base_url("./assets/img/dokter.jpg")?>"
								alt="Card image cap">
							<div class="card-body">

								<p class="card-text">Jadi inget sewaktu masa kecil aku pernah lorem ipsum dolor sit amet
									is simply dummy text of the printing and typesetting industry.</p>

							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-between align-content-center"
									style="text-align-start">

									<span>
										<h5 class="t-name ">Rifqi Luthfi</h5>
										<p class="t-job">Surgeon Doctor</p>

									</span>
									<i class="fa fa-heart" style="color:#FF5F5F"></i>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-decoration d-flex justify-content-between">
			<span class="d-flex">
				<div class="decoration decoration-why-1"></div>
				<div class="decoration decoration-why-2"></div>

			</span>

			<div class="decoration decoration-why-3"></div>

		</div>


	</div>
