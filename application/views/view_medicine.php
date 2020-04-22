<!DOCTYPE html>
<html lang="en">

<head>
	<title>Product</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Little Closet template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("./assets/css/view_drugdetail.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("./assets/css/product_responsive.css") ?>">
</head>

<body>

	<!-- Menu -->





	<!-- Product -->
	<div class="product">
		<div class="container p-5 shadow" style="border-radius:20px">
			<div class="row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="product_image_slider_container p-3">
						<img class="shadow-sm" src="<?php echo base_url("assets/img/girl1.jpg")?>"
							style="width:100%; height:500px" />
					</div>
				</div>

				<!-- Product Info -->
				<div class="col-lg-6 product_col p-4 ">
					<div class="product_title mb-3">
						<div class="product_name">
							<h2>Sangobion</h2>
						</div>
						<div class="product_category">In <a href="category.html">Medicine</a></div>
					</div>


					<div class="product_price mb-5">Rp.15<span>.000</span></div>
					<div class="product_text">
						<h3>Deskripsi</h3>
						<p>Sangobion bermanfaat untuk mengatasi kurang darah atau anemia. Sebagai suplemen
							penambah darah, Sangobion berisi zat besi yang dapat mencegah dan mengatasi anemia
							defisiensi besi.</p>
					</div>
					<div class="product_size">
						<div class="product_size_title">How much do you want to buy?</div>
						<div class="product_quantity_container">
							<div class="product_quantity ml-lg-auto mr-lg-auto text-center">
								<span class="product_text product_num">1</span>
								<div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
								<div class="qty_add qty_button trans_200 text-center"><span>+</span></div>
							</div>
						</div>
					</div>

					<div class="product_buttons">
						<div class="text-center d-flex flex-column align-items-end ">
							<div
								class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
								<div>
									<div><img src="<?php echo base_url("assets/img/cart.svg")?>" class="svg" alt="">
										<div>+</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>

		<!-- cards -->
	</div>
	<div class="bottom-decoration d-flex justify-content-between">
		<span class="d-flex">
			<div class="decoration decoration-why-1"></div>
			<div class="decoration decoration-why-2"></div>

		</span>

		<div class="decoration decoration-why-3"></div>

	</div>
	<div class="cards-below">
		<div id="btns">
			<div class="btn">
				<img src="<?php echo base_url("assets/img/pill.svg")?>" alt="" class="icon">
				<h2>Type</h2>
				<p>Suplemen dan Vitamin.</p>
			</div>
			<div class="btn">
				<img src="<?php echo base_url("assets/img/clock.svg")?>" alt="" class="icon">
				<h2>Drinking Ruler</h2>
				<p>1 Kapsul perhari</p>
			</div>
			<div class="btn">
				<img src="<?php echo base_url("assets/img/water.svg")?>" alt="" class="icon">
				<h2>Consumption Instruction</h2>
				<p>Langsung minum.</p>
			</div>
			<div class="btn">
				<img src="<?php echo base_url("assets/img/coronavirus.svg")?>" alt="" class="icon">
				<h2>Disease</h2>
				<p>Untuk penyakit anemia.</p>
			</div>
		</div>
	</div>


	<script src="<?php echo base_url ("./assets/js/jquery-3.2.1.min.js") ?>"></script>
	<script src="<?php echo base_url ("./assets/js/bootstrap/popper.js") ?>"></script>
	<script src="<?php echo base_url ("./assets/js/bootstrap/bootstrap.min.js") ?>"></script>

	<script src="<?php echo base_url ("./assets/flexslider/jquery.flexslider-min.js") ?>"></script>
	<script src="<?php echo base_url ("./assets/js/view_drugdetail.js") ?>"></script>
</body>

</html>
