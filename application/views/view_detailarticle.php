

<div class="container-fluid p-5" style="background: var(--passive-lg-gray)">

		<div class="container article-title">
			<h2> <?= $detail->judul?></h2>
			<span class="sp"> Ditulis oleh :<span class="sp2"> <?= $detail->penulis?> </span></span>
		</div>



	<div class="container main-article shadow-lg">
		<img class="article-img image-fluid" src="<?= base_url().$detail->pic?>" alt="">
		<div class="decoration-button">Article</div>
		<div>
			<p class="article-content">
				<b>Obati, Jakarta | </b><?= $detail->isi?>
			</p>

		</div>

		<div class="bottom-decoration d-flex justify-content-between">
			<span class="d-flex">
				<div class="decoration decoration-why-1"></div>
				<div class="decoration decoration-why-2"></div>

			</span>

			<div class="decoration decoration-why-3"></div>

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