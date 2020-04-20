<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("./assets/css/bootstrap/bootstrap.min.css") ?>">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo base_url("./assets/css/cart.css")?>">
<link rel="stylesheet" href="<?php echo base_url("./assets/css/cart_responsive.css")?>">

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
							<a class="nav-link" href="<?php echo base_url("Controller_article")?>">Articles</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<form action="" class="form-inline mr-5 ">
							<div class="input-group ">
								<input type="text " name="" class="form-control search" placeholder="search">
								<div class="input-group-append">
									<button class="btn search"> <i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
						<li class="nav-item">
							<a class="nav-link btn-sign-in"
								href="<?php echo base_url("Controller_login")?>">Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn-sign-up btn-orange"
								href="<?php echo base_url("Controller_register")?>">Sign Up</a>
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



	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Shopping Cart</div>
					
				</div>
			</div>
		</div>

		<!-- Cart -->

		<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cart_container">
							
							<!-- Cart Bar -->
							<div class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
									<li class="mr-auto">Medicine</li>
									<li>Price</li>
									<li>Quantity</li>
									<li>Total</li>
								</ul>
							</div>

							<!-- Cart Items -->
							<div class="cart_items">
								<ul class="cart_items_list">

									<!-- Cart Item -->
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
										<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
											<!-- <span class="like-btn"></span> -->

											<div><div class="product_number">1</div></div>
											<div><div class="product_image"><img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt=""></div></div>
											<div class="product_name_container">
												<div class="product_name"><a href="product.html">Sangobion</a></div>
												<div class="product_text">Kekurangan darah</div>
											</div>
										</div>
										<div class="delete-btn"></div>
										<div class="product_price product_text"><span>Price: </span>$3.99</div>
										<div class="product_quantity_container">
											<div class="product_quantity ml-lg-auto mr-lg-auto text-center">
												<span class="product_text product_num">1</span>
												<div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
												<div class="qty_add qty_button trans_200 text-center"><span>+</span></div>
											</div>
										</div>
										<div class="product_total product_text"><span>Total: </span>$3.99</div>
									</li>
								</ul>
							</div>

							<!-- Cart Buttons -->
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="button button_clear trans_200"><a href="categories.html">clear cart</a></div>
									<div class="button button_continue trans_200"><a href="categories.html">continue shopping</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<div class="row">
					
					<!-- Billing -->
					<div class="col-lg-6">
						<div class="billing">
							<div class="checkout_title">Billing</div>
							<div class="checkout_form_container">
								<!-- cash on delivery -->
									<form action="#" id="checkout_form" class="checkout_form">
										<div class="row">
											<div class="col-lg-6">
												<!-- Name -->
												<input type="text" id="checkout_name" class="checkout_input" placeholder="First Name" required="required">
											</div>
											<div class="col-lg-6">
												<!-- Last Name -->
												<input type="text" id="checkout_last_name" class="checkout_input" placeholder="Last Name" required="required">
											</div>
										</div>
										<div>
											<!-- Address -->
											<input type="text" id="checkout_address" class="checkout_input" placeholder="Address" required="required">
										</div>
										<div>
											<!-- Zipcode -->
											<input type="text" id="checkout_zipcode" class="checkout_input" placeholder="Post Code" required="required">
										</div>
										<div>
											<!-- Phone no -->
											<input type="phone" id="checkout_phone" class="checkout_input" placeholder="Phone No." required="required">
										</div>
										<div>
											<!-- Email -->
											<input type="phone" id="checkout_email" class="checkout_input" placeholder="Email" required="required">
										</div>
									</form>

										<!-- Bank Transfer -->
									<form action="#" id="checkout_form_bank" class="checkout_form_bank">

										
										<h1>Billing Adrress</h1>
										<br>
											<div>
												<!-- Address -->
												<input type="text" id="checkout_address" class="checkout_input" placeholder="Full Name" required="required">
											</div>
											<div>
												<!-- Address -->
												<input type="text" id="checkout_address" class="checkout_input" placeholder="Adress" required="required">
											</div>
											<div>
												<!-- Zipcode -->
												<input type="text" id="checkout_zipcode" class="checkout_input" placeholder="Post Code" required="required">
											</div>
											<div>
												<!-- Phone no -->
												<input type="phone" id="checkout_phone" class="checkout_input" placeholder="Phone No." required="required">
											</div>
											<div>
												<!-- Email -->
												<input type="phone" id="checkout_email" class="checkout_input" placeholder="Email" required="required">
											</div>

										<br>
										<h1>Bank Transfer Info</h1>
										<br>
											<div>
												<!-- Bank -->
												<select name="checkout_bank" id="checkout_province" class="dropdown_item_select checkout_input" require="required">
													<option>Choose your bank</option>
													<option>Bank 1</option>
													<option>Bank 2</option>
													<option>Bank 3</option>
													<option>Bank 4</option>
												</select>
											</div>
									</form>

									<!-- Credit Card -->
									<form action="#" id="checkout_form_cc" class="checkout_form_cc">
									
										<h1>Billing Adrress</h1>
										<br>
											<div>
												<!-- Address -->
												<input type="text" id="checkout_address" class="checkout_input" placeholder="Full Name" required="required">
											</div>
											<div>
												<!-- Address -->
												<input type="text" id="checkout_address" class="checkout_input" placeholder="Adress" required="required">
											</div>
											<div>
												<!-- Zipcode -->
												<input type="text" id="checkout_zipcode" class="checkout_input" placeholder="Post Code" required="required">
											</div>
											<div>
												<!-- Phone no -->
												<input type="phone" id="checkout_phone" class="checkout_input" placeholder="Phone No." required="required">
											</div>
											<div>
												<!-- Email -->
												<input type="phone" id="checkout_email" class="checkout_input" placeholder="Email" required="required">
											</div>

										<br>
										<h1>Credit Card Info</h1>
										<br>
											<div>
												<!-- Cardholder name -->
												<input type="text" id="checkout_cc_name" class="checkout_input" placeholder="Cardholer Name" required="required">
											</div>
											<div>
												<!-- card number -->
												<input type="text" id="checkout_cc_number" class="checkout_input" placeholder="Card Number" required="required">
											</div>
											<div class="row">
											<div class="col-lg-6">
												<!-- expire  date -->
												<input type="text" id="checkout_cc_expire" class="checkout_input" placeholder="Expire Date" required="required">
											</div>
											<div class="col-lg-6">
												<!-- cvv -->
												<input type="text" id="checkout_cc_cvv" class="checkout_input" placeholder="CVV" required="required">
											</div>
										</div>
									</form>
							</div>
						</div>
					</div>

					<!-- Cart Total -->
					<div class="col-lg-6 cart_col">
						<div class="cart_total">
							<div class="cart_extra_content cart_extra_total">
								<div class="checkout_title">Cart Total</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto">$29.90</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_total_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">$29.90</div>
									</li>
								</ul>
								<div class="payment_options">
									<div class="checkout_title">Payment</div>
									<ul>
										<!-- <a href="#" data-toggle="#div1"> -->
											<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
												<label class="radio_container">
														<input type="radio" id="radio_1" name="payment_radio" class="payment_radio" >
														<span class="radio_mark"></span>
														<span class="radio_text">Bank Transfer</span>
												</label>
											</li>
										<!-- </a> -->

										<!-- <a href="#" data-toggle="#div2"> -->
											<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
												<label class="radio_container">
														<input type="radio" id="radio_2" name="payment_radio" class="payment_radio" >
														<span class="radio_mark"></span>
														<span class="radio_text">Cash on Delivery</span>
												</label>
											</li>
										<!-- </a> -->

										<!-- <a href="#" data-toggle="#div3"> -->
											<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
												<label class="radio_container">
														<input type="radio" id="radio_3" name="payment_radio" class="payment_radio" >
														<span class="radio_mark"></span>
														<span class="radio_text">Credit Card</span>
												</label>
											</li>
										<!-- </a> -->

									</ul>
								</div>
								<div class="cart_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
								</div>
								<div class="checkout_button trans_200"><a href="checkout.html">place order</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			</div>
		</div>

		
</div>

<script src="<?php echo base_url("./assets/js/jquery-3.2.1.min.js") ?>"></script>
<script src="<?php echo base_url("./assets/js/bootstrap/popper.js") ?>"></script>
<script src="<?php echo base_url("./assets/js/bootstrap.min.js") ?>"></script>
<script src="<?php echo base_url("./assets/js/view_cart.js") ?>"></script>
<script src="<?php echo base_url("./assets/js/paymentMethod.js") ?>"></script>


</body>
</html>