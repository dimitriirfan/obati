<?php    
$data = file_get_contents("./assets/json/achievement.json");
$achievement = json_decode($data,true);

$achievement = $achievement["achievement"];

?>

<body>
	<div class="main-hero container ">
		<div class="hero-inner">
			<h1 class="tittle">About Us.</h1>


		</div>
	</div>
	<div class="main-desc container">
		<div class="row">
			<div class="col-lg-6">

				<img class="img-fluid" src="<?= base_url('assets/img/article.jpg')?>" alt="">
			</div>
			<div class="col-lg-6 mt-5">
				<div class="desc desc1">
					<div class="card-body">

						<div class="title">OBATI?</div>

						<p class="card-text">Website <b>Obati</b> adalah website yang menyediakan service berupa
							E-Commerce penjualan obat sekaligus menyediakan artikel-artikel maupun berita
							terkini tentang kesehatan maupun obat.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="title2">OUR ACHIEVEMENT</div>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th scope="col">No.</th>

					<th scope="col">Event</th>
					<th scope="col">Year</th>
					<th scope="col">Description</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($achievement as $row) : ?>
				<tr>
					<th scope="row"><?= $row["id"]?></th>

					<td><?= $row ["achievement"]?></td>
					<td><?= $row ["year"]?></td>
					<td><?= $row ["description"]?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>



	<div class="main-team container">
		<div class="title2">OUR TEAM</div>
		<div class="team-part">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-2 col-half-offset" id="p1">
					<div class="our-team">
						<div class="picture">
							<img class="img-fluid" src="<?php echo base_url ("./assets/img/boy1.jpg")?>">
						</div>
						<div class="team-content">
							<h3 class="name">Rifqi Luthfi</h3>
							<h4 class="title">Founder</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-half-offset" id="p2">
					<div class="our-team">
						<div class="picture">
							<img class="img-fluid" src="<?php echo base_url ("./assets/img/boy1.jpg")?>">
						</div>
						<div class="team-content">
							<h3 class="name">Gilang Brilians</h3>
							<h4 class="title">Founder</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-half-offset" id="p3">
					<div class="our-team">
						<div class="picture">
							<img class="img-fluid" src="<?php echo base_url ("./assets/img/boy1.jpg")?>">
						</div>
						<div class="team-content">
							<h3 class="name">Dimitri Irfan D</h3>
							<h4 class="title">Founder</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-half-offset" id="p4">
					<div class="our-team">
						<div class="picture">
							<img class="img-fluid" src="<?php echo base_url ("./assets/img/boy1.jpg")?>">
						</div>
						<div class="team-content">
							<h3 class="name">Wira Sigalingging</h3>
							<h4 class="title">Founder</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-half-offset" id="p5">
					<div class="our-team">
						<div class="picture">
							<img class="img-fluid" src="<?php echo base_url ("./assets/img/boy1.jpg")?>">
						</div>
						<div class="team-content">
							<h3 class="name">Fazainsyah A W</h3>
							<h4 class="title">Founder</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-1"></div>

			</div>
		</div>

	</div>

	<div class="main-service container">
		<div class="row">
			<div class="col-lg-6 mt-5">
				<div class="desc2 desc1">
					<div class="card-body">

						<div class="title">OUR SERVICES</div>

						<p class="card-text">Kami selalu berusaha menyediakan yang 
							terbaik untuk anda melalui layanan - layanan kami. 
							Anda bebas berbelanja dimanapun dan kapanpun serta perluas 
							pengetahuan anda dengan artikel kami.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card-group">
					<div class="card">
						<img class="img-fluid" src="<?= base_url('assets/img/drug.jpg')?>" alt="">
						<div class="slogan">
							<h4>Drug Collection for all diseases</h4>
						</div>
					</div>
					<div class="card">
						<img class="img-fluid" src="<?= base_url('assets/img/drug.jpg')?>" alt="">
						<div class="slogan">
							<h4>Article from trusted source</h4>
						</div>
					</div>
					<div class="card">
						<img class="img-fluid" src="<?= base_url('assets/img/drug.jpg')?>" alt="">
						<div class="slogan">
							<h4>Shop anytime and anywhere</h4>
						</div>
					</div>
					<div class="card">
						<img class="img-fluid" src="<?= base_url('assets/img/drug.jpg')?>" alt="">
						<div class="slogan">
							<h4>Recomended by Doctor and User</h4>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>

	</div>
</body>
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
