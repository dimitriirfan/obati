<html>
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
    <link rel="stylesheet" href="<?php echo base_url("./assets/css/catalog.css")?>">
    <title>Obati | Kategori Obat</title>
    
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




      <!-- Main Category -->
      <div class ="bodytitle">Obat Berdasarkan Kategori</div>
        <div class="row" style="padding-top: 200px;">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Vitamin & suplemen</h5>
                  <img src ="<?php echo base_url("./assets/img/Vitamin.png")?>" class="img-fluid foto">
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Anti Nyeri</h5>
                    <img src ="<?php echo base_url("./assets/img/Vitamin.png")?>" class="img-fluid foto">
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Mata</h5>
                    <img src ="<?php echo base_url("./assets/img/vit.jpg")?>" class="img-fluid foto">
                  </div>
                </div>
              </div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Batuk & Flu</h5>
                  <img src ="<?php echo base_url("./assets/img/flu.png")?>"class="img-fluid foto">
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Antibiotik</h5>
                    <img src ="" class="img-fluid foto">
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Otot, Tulang & Sendi</h5>
                    <img src ="" class="img-fluid foto">
                  </div>
                </div>
              </div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Demam</h5>
                  <img src ="<?php echo base_url("./assets/img/demamfix.jpg")?>" class="img-fluid foto">
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Kulit</h5>
                    <img src ="" class="img-fluid foto">
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Mulut & Tenggorokan</h5>
                    <img src ="" class="img-fluid foto">
                  </div>
                </div>
              </div>    
        </div>
        <div class="row" style="padding-top: 20px;">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">P3K</h5>
                  <img src ="<?php echo base_url("./assets/img/P3K.jpg")?>" class="img-fluid foto">
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Alergi</h5>
                    <img src ="" class="img-fluid foto">
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Kontrasepsi & Hormon</h5>
                    <img src ="" class="img-fluid foto">
                  </div>
                </div>
              </div>    
        </div>

        
    </body>