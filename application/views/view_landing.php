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
							<p class="drug-company">Vitamin dan suplemen</p>
						</div>
						<h4 class="drug-price">Rp. 22.500</h4>
					</div>
					<a class="stretched-link" href="<?= base_url('catalog/medicine/121')?>"></a>

				</div>
			</div>
			<div class="grid-item grid-item-2">
				<div class="inner-item">
					<div class="container-top ehm">
						<button class=" btn btn-main-drug">Drug detail</button>
					</div>
					<div class="container container-drug d-flex justify-content-between">
						<div class="drug-title">
							<h4 class="drug-name">Delysid LSD 25 MG</h4>
							<p class="drug-company">Vitamin dan suplemen</p>
						</div>
						<h4 class="drug-price">Rp. 132.500</h4>
					</div>
					<a class="stretched-link" href="<?= base_url('catalog/medicine/122')?>"></a>
				</div>
			</div>
			<div class="grid-item grid-item-3">
				<div class="inner-item">
					<div class="container-top">
						<button class=" btn btn-main-drug">Drug detail</button>

					</div>
					<div class="container container-drug d-flex justify-content-between">
						<div class="drug-title">
							<h4 class="drug-name">Porcelain HA+ 35 MG</h4>
							<p class="drug-company">Vitamin dan suplemen</p>
						</div>
						<h4 class="drug-price">Rp. 182.500</h4>
					</div>
					<a class="stretched-link" href="<?= base_url('catalog/medicine/123')?>"></a>
				</div>
			</div>
			<div class="grid-item grid-item-4">

			</div>
			<div class="grid-item grid-item-5">
				<div class="inner-item">
					<div class="container-article">
						<h4 class="article-title mb-4">Keep up with our latest article</h4>
						<a href="<?= base_url('article');?>" class=" btn btn-main-article">Check here</a>
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
					<div id="c1" class="inner-c-item">
						<img class="mb-4" src="<?php echo base_url("./assets/img/coronavirus.png")?>" alt="">
						<h5 class="mb-0" data-c1="Batuk dan Flu">Flu & Batuk</h5>
						<a class="stretched-link" style="transform: rotate(0);"
							href="<?= base_url('catalog/batuk_flu')?>"></a>
						<p><?= $c1?> items</p>
					</div>
				</div>
				<div class="grid-c-item grid-c-item-2 shadow-sm  bg-white rounded">
					<div class="tag tag-hot tag-passive">Hot</div>
					<div id="c2" class="inner-c-item">
						<img class="mb-4" src="<?php echo base_url("./assets/img/vita.png")?>" alt="">
						<h5 class="mb-0" data-c2="Vitamin">Vitamin</h5>
						<a class="stretched-link" style="transform: rotate(0);"
							href="<?= base_url('catalog/vitamin_suplemen')?>"></a>

						<p><?= $c2?> items</p>
					</div>
				</div>
				<div class="grid-c-item grid-c-item-3 shadow-sm  bg-white rounded">
					<div class="tag tag-hot tag-passive">Hot</div>
					<div id="c3" class="inner-c-item">
						<img class="mb-4" src="<?php echo base_url("./assets/img/eye-makeup.png")?>" alt="">
						<h5 class="mb-0" data-c3="Mata">Mata</h5>
						<a class="stretched-link" style="transform: rotate(0);" href="<?= base_url('catalog/mata')?>"></a>

						<p><?= $c3?> items</p>
					</div>
				</div>
				<div class="grid-c-item grid-c-item-4 shadow-sm  bg-white rounded">
					<div class="tag tag-hot tag-passive">Hot</div>
					<div id="c4" class="inner-c-item">
						<img class="mb-4" src="<?php echo base_url("./assets/img/skin.png")?>" alt="">
						<h5 class="mb-0">Kulit</h5>
						<a class="stretched-link" style="transform: rotate(0);" href="<?= base_url('catalog/kulit')?>"></a>

						<p><?= $c4?> items</p>
					</div>
				</div>

				<!-- jumbo -->
				<div class="grid-c-item grid-c-item-5 shadow-sm  bg-white rounded ">
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
						<a href="<?= base_url('detail_article/detail/10');?>" class="btn btn-primary trans_200 btn-block btn-j btn-orange">Cek gejalanya</a>
					</div>
				</div>

				<!-- jumbo end -->

				<div class="grid-a-item grid-a-item-1 shadow-sm bg-white rounded">
					<div class="tag">Article</div>
					<h5 class="mb-0">Bingung Pilih Menu Buka Puasa Pertama? Baca Dulu Saran dari Ahli Gizi</h5>
					<p> Spesialis Gizi Klinik dr. Raissa Edwina Djuanda, M.Gizi, Sp.GK memperbolehkan...</p>
					<div class="foot d-flex align-items-baseline">
						<span class="covid-like ">
							<i class="fa fa-heart" style="color:#FF5F5F"></i>
						</span>
						<p class="flex-shrink-1 ml-2 mr-5">361 likes</p>
						<a href="<?= base_url('detail_article/detail/5');?>" class="btn btn-primary trans_200 btn-a flex-grow-1 btn-orange">Baca</a>
					</div>
				</div>

				<div class="grid-a-item grid-a-item-2 shadow-sm  bg-white rounded">
					<div class="tag">Article</div>
					<h5 class="mb-0">Ajakan Hidup Sehat Melalui GERMAS</h5>
					<p>Siapa yang belum pernah mendengar tentang Germas, yang...</p>
					<div class="foot d-flex align-items-baseline">
						<span class="covid-like ">
							<i class="fa fa-heart" style="color:#FF5F5F"></i>
						</span>
						<p class="flex-shrink-1 ml-2 mr-5">361 likes</p>
						<a href="<?= base_url('detail_article/detail/6');?>" class="btn btn-primary trans_200 btn-a flex-grow-1 btn-orange">Baca</a>
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
							<h5 class="mb-0">Mudah</h5>

						</div>

					</div>
					<div class="grid-w-item grid-w-item-2 shadow-sm  bg-white ">
						<div class="inner-w-item">
							<img class="mb-4" src="<?php echo base_url("./assets/img/pill.png")?>" alt="">
							<h5 class="mb-0">Beragam</h5>

						</div>

					</div>
					<div class="grid-w-item grid-w-item-3 shadow-sm  bg-white ">
						<div class="inner-w-item">
							<img class="mb-4" src="<?php echo base_url("./assets/img/trust.png")?>" alt="">
							<h5 class="mb-0">Terpercaya</h5>

						</div>

					</div>
					<div class="grid-w-item grid-w-item-4 shadow-sm  bg-white ">
						<div class="inner-w-item">
							<img class="mb-4" src="<?php echo base_url("./assets/img/fast.png")?>" alt="">
							<h5 class="mb-0">Cepat</h5>

						</div>

					</div>
					<div class="grid-w-item grid-w-item-5 shadow-sm  bg-white">
						<div class="inner-w-title">
							<div class="why">
								<h1>Kenapa pilih Obati?</h1>
								<p>Ada banyak sekali alasan kenapa sih kamu harus menggunakan obati. Berikut adalah intinya</p>

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
					<h1 class="main-testimonial-title">Apa kata mereka.</h1>
				</div>
				<div class="testimonials">
					<div class="card-deck">
						<div class="card mb-3">
							<img class="card-img-top" src="<?php echo base_url("./assets/img/girl1.jpg")?>"
								alt="Card image cap">
							<div class="card-body">

								<p class="card-text">Jadi inget waktu sakit susah pergi kemana-mana. Untung ada Obati jadi gampang buat pesan obat.</p>

							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-between align-content-center" style="text-align-start">

									<span>
										<h5 class="t-name ">Haris Subekti</h5>
										<p class="t-job">Orang Biasa no.3</p>

									</span>
									<i class="fa fa-heart" style="color:#FF5F5F"></i>
								</div>

							</div>
						</div>
						<div class="card mb-3">
							<img class="card-img-top" src="<?php echo base_url("./assets/img/boy1.jpg")?>"
								alt="Card image cap">
							<div class="card-body">

								<p class="card-text">Dengan adanya Obati, saya gampang untuk memesan obat.</p>

							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-between align-content-center" style="text-align-start">

									<span>
										<h5 class="t-name ">Naufal Alvin</h5>
										<p class="t-job">Penunda Professional</p>

									</span>
									<i class="fa fa-heart" style="color:#FF5F5F"></i>
								</div>

							</div>

						</div>
						<div class="card mb-3">
							<img class="card-img-top" src="<?php echo base_url("./assets/img/dokter.jpg")?>"
								alt="Card image cap">
							<div class="card-body">

								<p class="card-text">Pokoe Obati The Best.</p>

							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-between align-content-center" style="text-align-start">

									<span>
										<h5 class="t-name">Farrel Jamet</h5>
										<p class="t-job">Jamet Professional</p>

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

	<!-- bootstrap -->
	
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
	<script src="<?= base_url('assets/js/view_landing.js')?>"></script>
