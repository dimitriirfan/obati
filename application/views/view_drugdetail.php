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


<div class="super_container">
	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Product Page</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Home</a></li>
							<li><a href="category.html">Drug Detail</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Product -->

		<div class="product">
			<div class="container">
				<div class="row">
					
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="product_image_slider_container">
                            <img src="<?php echo base_url("assets/img/girl1.jpg")?>" style="width:480px;height:580px;" />
						</div>
					</div>

					<!-- Product Info -->
					<div class="col-lg-6 product_col">
						<div class="product_info">
							<div class="product_name">Sangobion</div>
							<div class="product_category">In <a href="category.html">Medicine</a></div>
							<!-- <div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
								<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="product_reviews">4.7 out of (123 consumer review)</div>
							</div> -->
							<div class="product_price">Rp.15<span>.000</span></div>
							<div class="product_size">
								<div class="product_size_title">How much do wan't to buy?</div>
                                    <div class="product_quantity_container">
										<div class="product_quantity ml-lg-auto mr-lg-auto text-center">
											<span class="product_text product_num">1</span>
											<div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
											<div class="qty_add qty_button trans_200 text-center"><span>+</span></div>
										</div>
									</div>
							</div>
							<div class="product_text">
								<p>Sangobion bermanfaat untuk mengatasi kurang darah atau anemia. Sebagai suplemen penambah darah, Sangobion berisi zat besi yang dapat mencegah dan mengatasi anemia defisiensi besi.</p>
							</div>
							<div class="product_buttons">
								<div class="text-center d-flex flex-column align-items-center justify-content-center">
									<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
										<div><div><img src="<?php echo base_url("assets/img/cart.svg")?>" class="svg" alt=""><div>+</div></div></div>
									</div>
								</div>
							</div>
							<div class="product_buttons">
								<div class="text-center d-flex flex-column align-items-center justify-content-center">
									<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                        <div class="button button_continue trans_200"><a href="categories.html">continue
                                            shopping</a></div>
                                        </div>
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
<div class="cards-below">
<div id="btns">
  <div class="btn" onclick="window.location='#'">
        <img src="<?php echo base_url("assets/img/pill.svg")?>" alt="" class="icon">
    <h2>Type</h2>
    <p>Suplemen dan Vitamin.</p>
  </div>
  <div class="btn" onclick="window.location='#'">
        <img src="<?php echo base_url("assets/img/clock.svg")?>" alt="" class="icon">
    <h2>Drinking Ruler</h2>
    <p>1 Kapsul perhari</p>
  </div>
  <div class="btn" onclick="window.location='#'">
        <img src="<?php echo base_url("assets/img/water.svg")?>" alt="" class="icon">
    <h2>Consumption Instruction</h2>
    <p>Langsung minum.</p>
  </div>
  <div class="btn" onclick="window.location='#'">
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