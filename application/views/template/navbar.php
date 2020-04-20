<!-- first main header -->
</head>

<body>
	<div class="container-fluid shadow-sm  bg-white rounded">
		<header class="main-header">
			<nav class="navbar navbar-expand-lg navbar-light p-0 ml-3 mr-3">
				<a class="navbar-brand" href="<?= base_url("Controller_landing")?>"> <img
						src="<?php echo base_url("assets/img/logo.png")?>" alt=""> </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto ">
						<li class="nav-item <?php if ($title == 'landing') {echo 'active';} ?>">
							<a class="nav-link" href="<?php echo base_url("Controller_landing")?>">Home <span
									class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item <?php if ($title == 'article') {echo 'active';} ?>">
							<a class="nav-link" href="<?php echo base_url("Controller_article")?>">Articles</a>
						</li>

						<li class="nav-item <?php if ($title == 'about') {echo 'active';} ?>">
							<a class="nav-link" href="#">About Us</a>
						</li>

					</ul>
					
					<ul class="navbar-nav ml-auto">
	
						<form class="form-inline">
							<input class=" search form-control form-control-md mr-3 w-75" type="text"
								placeholder="Search" aria-label="Search">
							<a type="submit" href=""><i class="fa fa-search" aria-hidden="true"></i></a>
						</form>
						<?php if ($this->session->userdata("user")) :?>
						<a href="<?= base_url("Controller_cart")?>" style="margin-top:2px"><i class="cart fa fa-shopping-cart fa-lg ml-3 mr-4" style="align-items:center"></i></a>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="<?= $this->session->userdata("user")->pic?>"
									width="40" height="40" style="object-fit:cover; margin-right:1em" class="rounded-circle">
								<?php echo $this->session->userdata("user")->name?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="<?= base_url("controller_profile")?>">Profile</a>
								<a class="dropdown-item" href="<?= base_url("Controller_cart")?>">Cart</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url("Controller_landing/logout")?>">Log Out</a>
							</div>
						</li>


						<?php else :?>
						<li class="nav-item">
							<a class="nav-link btn-sign-in" href="<?php echo base_url("Controller_login")?>">Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn-sign-up btn-orange"
								href="<?php echo base_url("Controller_register")?>">Sign Up</a>
						</li>
						<?php endif?>
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
					<a class="nav-link" href=<?= base_url("Controller_category")?>>Medicine</a>
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
