<!-- first main header -->



<div class="slogan">
	<div class="news-detail">
		<div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?= $detail->terbit?> </a></div>
		<div><a href="" class="fh5co_good_font"><?= $detail->judul?></a></div>
		<h2 class="by">By : <?= $detail->penulis?></h2>
	</div>
</div>



<br>

<div class="container-fluid pb-4 pt-4 paddding">
	<div class="container paddding">
		<div class="row mx-0">
			<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
				<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
					<p>
					<?= $detail->isi?>
					</p>

				</div>
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
				<div class="row pb-3">
					<div class="col-5 align-self-center">
						<img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt="img" class="fh5co_most_trading" />
					</div>
					<div class="col-7 paddding">
						<div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
						<div class="most_fh5co_treding_font_123"> April 03, 2020</div>
					</div>
				</div>
				<div class="row pb-3">
					<div class="col-5 align-self-center">
						<img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt="img" class="fh5co_most_trading" />
					</div>
					<div class="col-7 paddding">
						<div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.</div>
						<div class="most_fh5co_treding_font_123"> April 03, 2020</div>
					</div>
				</div>
				<div class="row pb-3">
					<div class="col-5 align-self-center">
						<img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt="img" class="fh5co_most_trading" />
					</div>
					<div class="col-7 paddding">
						<div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
						<div class="most_fh5co_treding_font_123"> April 03, 2020</div>
					</div>
				</div>
				<div class="row pb-3">
					<div class="col-5 align-self-center"><img src="<?php echo base_url("assets/img/boy1.jpg")?>"
							alt="img" class="fh5co_most_trading" /></div>
					<div class="col-7 paddding">
						<div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
						<div class="most_fh5co_treding_font_123"> April 03, 2020</div>
					</div>
				</div>
			</div>
		</div>
		<br><br>
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
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="<?= base_url('./assets/js/jquery.js')?>"></script>
<script src="<?php echo base_url("./assets/js/article/owl.carousel.min.js") ?>"></script>

<!-- Waypoints -->
<script src="<?php echo base_url ("./assets/js/article/jquery.waypoints.min.js") ?>"></script>
<!-- Main -->
<script src="<?php echo base_url("./assets/js/article/main.js") ?>"></script>
