<div class="main-title container-fluid d-flex align-items-center justify-content-center">
	<h1 style="color:white">Article.</h1>


</div>
<div class="bottom-decoration d-flex justify-content-between" >
	<span class="d-flex">
		<div class="decoration decoration-why-1"></div>
		<div class="decoration decoration-why-2"></div>

	</span>

	<div class="decoration decoration-why-3"></div>
</div>

<div class="container-fluid ">
	<div class="container animate-box" data-animate-effect="fadeIn">
		<div>
			<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
		</div>
		<div class="owl-carousel owl-theme js" id="slider1">
			<?php foreach ($article as $row) : ?>
			<div class="item px-2">
				<div class="fh5co_latest_trading_img_position_relative">
					<div class="fh5co_latest_trading_img"><img src="<?php echo base_url().$row->pic?>" alt=""
							class="fh5co_img_special_relative" /></div>
					<div class="fh5co_latest_trading_img_position_absolute"></div>
					<div class="fh5co_latest_trading_img_position_absolute_1">
						<a style="stretched-link" href="<?= base_url('Detail_article/detail/').$row->id;?>"
							class="text-white"><?= $row->judul?></a>
						<div class="fh5co_latest_trading_date_and_name_color"> <?= $row->penulis?> : <?= $row->terbit?>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach ; ?>
		</div>
	</div>
	<div class="container-fluid paddding">

		<div class="container paddding">

			<div class="row mx-0">
				<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft" >
					<div>
						<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
					</div>
					<?php foreach ($article as $row): ?>
					<div class="article-item d-flex my-3 p-2">
						<img class="article-item-img" src="<?php echo base_url().$row->pic?>" alt="" />
						<div class="article-item-content ml-3">
							<a href="<?= base_url('Detail_article/detail/').$row->id;?>" class="fh5co_magna py-2 test">
								<?= $row->judul?> </a> <br>
							<p class="fh5co_mini_time ">
								<?= $row->penulis ?> : <?= $row->terbit?></p>
							<p class="limit"> <?= $row->isi?></p>

						</div>

					</div>
					<hr>
					<?php endforeach; ?>
				</div>
				<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
					<div>
						<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Category</div>
					</div>
					<div class="clearfix"></div>
					<div class="fh5co_tags_all">
						<a href="#" class="fh5co_tagg">Lose Weight</a>
						<a href="#" class="fh5co_tagg">Work Out</a>
						<a href="#" class="fh5co_tagg">Pregnancy</a>
						<a href="#" class="fh5co_tagg">Fever</a>
						<a href="#" class="fh5co_tagg">Vitamin</a>
					</div>
					<div>
						<div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
					</div>
					<?php foreach ($article as $row): ?>
					<div class="row pb-3">
						<div class="col-5 align-self-center">
							<img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt="img"
								class="fh5co_most_trading" />
						</div>
						<div class="col-7 paddding">
							<div class="most_fh5co_treding_font"> <?= $row->judul?>
							</div>
							<div class="most_fh5co_treding_font_123"></div>
						</div>
					</div>
					<?php endforeach ?>
				</div>

			</div>


		</div>

	</div>

</div>
<div class="bottom-decoration d-flex justify-content-between" >
	<span class="d-flex">
		<div class="decoration decoration-why-1"></div>
		<div class="decoration decoration-why-2"></div>

	</span>

	<div class="decoration decoration-why-3"></div>
</div>
<!-- bootstrap -->

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<script src="<?php echo base_url("./assets/js/article/owl.carousel.min.js") ?>"></script>

<!-- Waypoints -->
<script src="<?php echo base_url ("./assets/js/article/jquery.waypoints.min.js") ?>"></script>
<!-- Main -->
<script src="<?php echo base_url("./assets/js/article/main.js") ?>"></script>
<script src="<?php echo base_url("./assets/js/article/modernizr-3.5.0.min.js")?>"></script>
