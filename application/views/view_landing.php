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
						<button class="btn btn-primary trans_200 btn-block btn-j btn-orange">Cek gejalanya</button>
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
						<button class="btn btn-primary trans_200 btn-a flex-grow-1 btn-orange">Baca</button>
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
						<button class="btn btn-primary trans_200 btn-a flex-grow-1 btn-orange">Baca</button>
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
								<div class="d-flex justify-content-between align-content-center" style="text-align-start">

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
								<div class="d-flex justify-content-between align-content-center" style="text-align-start">

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
								<div class="d-flex justify-content-between align-content-center" style="text-align-start">

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

	<!-- bootstrap -->
	
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
	<script src="<?= base_url('assets/js/view_landing.js')?>"></script>
