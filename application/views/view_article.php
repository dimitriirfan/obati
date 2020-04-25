<div class="container-fluid paddding">
	<div class="row mx-0">
		<div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
			<div class="fh5co_suceefh5co_height"><img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt="img" />
				<div class="fh5co_suceefh5co_height_position_absolute"></div>
				<div class="fh5co_suceefh5co_height_position_absolute_font">
					<button type="button" class="btn btn-dark">TRENDING</button>
					<div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;2020
						</a></div>
					<div class=""><a href="<?php echo base_url('Detail') ?>"
							class="fh5co_good_font">judul</a></div>
					<h1 class="by">By : penerbit</h1>
					<h2 class="article-desc">isi
						</h1>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
					<div class="fh5co_suceefh5co_height_2"><img src="<?php echo base_url("assets/img/boy1.jpg")?>"
							alt="img" />
						<div class="fh5co_suceefh5co_height_position_absolute"></div>
						<div class="fh5co_suceefh5co_height_position_absolute_font_2">
							<div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;2022</a></div>
							<div class=""><a href="single.html" class="fh5co_good_font_2">judul </a></div>
							<h1 class="by-small">By : nama</h1>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
					<div class="fh5co_suceefh5co_height_2"><img src="<?php echo base_url("assets/img/boy1.jpg")?>"
							alt="img" />
						<div class="fh5co_suceefh5co_height_position_absolute"></div>
						<div class="fh5co_suceefh5co_height_position_absolute_font_2">
							<div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;2022 </a></div>
							<div class=""><a href="single.html" class="fh5co_good_font_2">judul</a></div>
							<h1 class="by-small">By : penulis</h1>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
					<div class="fh5co_suceefh5co_height_2"><img src="<?php echo base_url("assets/img/boy1.jpg")?>"
							alt="img" />
						<div class="fh5co_suceefh5co_height_position_absolute"></div>
						<div class="fh5co_suceefh5co_height_position_absolute_font_2">
							<div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;2019</a></div>
							<div class=""><a href="single.html" class="fh5co_good_font_2"> judul</a></div>
							<h1 class="by-small">By : penulis</h1>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
					<div class="fh5co_suceefh5co_height_2"><img src="<?php echo base_url("assets/img/boy1.jpg")?>"
							alt="img" />
						<div class="fh5co_suceefh5co_height_position_absolute"></div>
						<div class="fh5co_suceefh5co_height_position_absolute_font_2">
							<div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;terbit</a></div>
							<div class=""><a href="single.html" class="fh5co_good_font_2">judul</a></div>
							<h1 class="by-small">penulis</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid p-5" style="background-color:#F2F2F2">
	<div class="container animate-box" data-animate-effect="fadeIn">
		<div>
			<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
		</div>
		<div class="owl-carousel owl-theme js" id="slider1">
		<?php foreach ($article as $row) : ?>
			<div class="item px-2">
				<div class="fh5co_latest_trading_img_position_relative">
					<div class="fh5co_latest_trading_img"><img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt=""
							class="fh5co_img_special_relative" /></div>
					<div class="fh5co_latest_trading_img_position_absolute"></div>
					<div class="fh5co_latest_trading_img_position_absolute_1">
						<a href="<?= base_url('Detail_article/detail/').$row->id;?>" class="text-white"><?= $row->judul?></a>
						<div class="fh5co_latest_trading_date_and_name_color"> <?= $row->penulis?> : <?= $row->terbit?> </div>
					</div>
				</div>
			</div>
	       <?php endforeach ; ?>
	</div>
</div>
<div class="container-fluid paddding">
	<div class="top-decoration d-flex justify-content-between">
		<span class="d-flex">
			<div class="decoration decoration-why-1"></div>
			<div class="decoration decoration-why-2"></div>

		</span>

		<div class="decoration decoration-why-3"></div>

	</div>
	<div class="container paddding">

		<div class="row mx-0">
			<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
				<div>
					<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
				</div>
				<?php foreach ($article as $row): ?>
				<div class="row pb-4">
					<div class="col-md-5">
						<div class="fh5co_news_img"><img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt="" />
						</div>
						<div></div>
					</div>
					<div class="col-md-7 animate-box">
						<a href="<?= base_url('Detail_article/detail/').$row->id;?>" class="fh5co_magna py-2 test"> <?= $row->judul?> </a> <br>
						<p class="fh5co_mini_time py-3">
						<?= $row->penulis ?> : <?= $row->terbit?></p>
						<div class="fh5co_consectetur limit">  <?= $row->isi?> 
						</div>
					</div>
				</div>
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
						<img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt="img" class="fh5co_most_trading" />
					</div>
					<div class="col-7 paddding">
						<div class="most_fh5co_treding_font"> <?= $row->judul?> 
						</div>
						<div class="most_fh5co_treding_font_123"></div>
					</div>
				</div>
				<?php endforeach ?>
		</div>
		<div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
			<div class="col-12 text-center pb-4 pt-4">
				<a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
				<a href="#" class="btn_pagging">1</a>
				<a href="#" class="btn_pagging">2</a>
				<a href="#" class="btn_pagging">3</a>
				<a href="#" class="btn_pagging">...</a>
				<a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
			</div>
		</div>
	</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
	</div>
	<div class="bottom-decoration d-flex justify-content-between">
		<span class="d-flex">
			<div class="decoration decoration-why-1"></div>
			<div class="decoration decoration-why-2"></div>

		</span>

		<div class="decoration decoration-why-3"></div>
	</div>
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
