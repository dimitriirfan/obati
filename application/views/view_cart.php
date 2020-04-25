<!-- <div class="home">
	<div class="home_container d-flex flex-column align-items-center justify-content-end">
		<div class="home_content text-center">
			<div class="home_title">Shopping Cart</div>

		</div>
	</div>
</div> -->

<div class="container home">
	<div class="bodytitle">
		<div class="some-lines"></div>
		<h1 class=title>Shopping Cart</h1>
	</div>

</div>


<!-- Cart -->

<?php if ($this->session->flashdata('success')) : ?>
<div class="success-hidden" style="display:none">yay</div>
<?php endif?>
<div class="bottom-decoration d-flex justify-content-between">
	<span class="d-flex">
		<div class="decoration decoration-why-1"></div>

	</span>

	<div class="decoration decoration-why-3"></div>

</div>
<div class="cart_section">
	<div class="container">
		<div class="cart_container shadow-sm">
			<div class="cart_bar">
				<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
					<li class="mr-auto">Medicine</li>
					<li>Price</li>
					<li>Quantity</li>
					<li>Total</li>
				</ul>
			</div>

			<div class="cart_items">
				<ul class="cart_items_list">

					<?php $count = 0?>
					<?php $cartTotal = 0?>
					<?php foreach ($this->session->userdata('cart') as $row) : ?>
					<li <?php $count++?> data-iditem="<?= $row->id?>"
						class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start ">
						<div
							class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">

							<div>
								<div id="med_count<?= $count?>" class="product_number"><?= $count?></div>
							</div>
							<div class="product_image">
								<img src="<?php echo base_url().$row->pic?>" alt="">
							</div>
							<div class="product_name_container">
								<div class="product_name"><a href="product.html"><?= $row->name?></a></div>
								<div class="product_text"><?= $row->category?></div>
							</div>
						</div>
						<div class="delete_btn"><i class="fa fa-trash fa-lg"></i></div>
						<div id="med_price<?= $count?>" class="product_price product_text">
							<span>Price:</span>Rp.<?=$row->price?>
						</div>
						<div class="product_quantity_container">
							<div class="product_quantity ml-lg-auto mr-lg-auto text-center">
								<span id="med_qty<?= $count?>" class="product_text product_num"><?= $row->qty?></span>
								<div onclick="sub_item(<?= $row->id?>)"
									class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
								<div onclick="add_item(<?= $row->id?>)"
									class="qty_add qty_button trans_200 text-center"><span>+</span></div>
							</div>
						</div>
						<div id="med_total<?= $count?>" class="product_total product_text"><span>Total:
							</span>Rp.<?= $row->price * $row->qty?></div>
					</li>
					<?php endforeach?>

				</ul>
			</div>



			<!-- Cart Buttons -->
			<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
				<div
					class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
					<div id="cart_id" data-id="<?= $this->session->userdata('user')->id?>"><a class="button_clear btn btn-primary p-2 pl-5 pr-5"
							href="#">clear cart</a>
					</div>
					<a class="btn btn-secondary trans_200 p-2 pl-5 pr-5" href="<?= base_url('category')?>">continue
							shopping</a>
				</div>
			</div>
		</div>
		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<div class="row">

					<!-- Billing -->
					<div class="col-lg-6">
						<div class="billing shadow">
							<div class="checkout_title">Billing</div>
							<div class="checkout_form_container">
								<!-- cash on delivery -->
								<form action="<?= base_url('cart/checkout')?>" method="post" id="checkout_form"
									class="checkout_form">
									<div class="row">
										<div class="col-lg-6">
											<!-- Name -->
											<input type="text" id="checkout_name" class="checkout_input" name="fname"
												placeholder="First Name" required="required">
										</div>
										<div class="col-lg-6">
											<!-- Last Name -->
											<input type="text" id="checkout_last_name" class="checkout_input"
												name="lname" placeholder="Last Name" required="required">
										</div>
									</div>
									<div>
										<!-- Address -->
										<input type="text" id="checkout_address" class="checkout_input" name="address"
											placeholder="Address" required="required">
									</div>
									<div>
										<!-- Zipcode -->
										<input type="text" id="checkout_zipcode" class="checkout_input" name="post"
											placeholder="Post Code" required="required">
									</div>
									<div>
										<!-- Phone no -->
										<input type="phone" id="checkout_phone" class="checkout_input" name="no_hp"
											placeholder="Phone No." required="required">
									</div>

									<div style="display:none">
										<!-- Email -->
										<input type="text" id="checkout_total" class="checkout_input" name="total"
											placeholder="Email" required="required">
									</div>
								</form>

							</div>
						</div>
					</div>

					<!-- Cart Total -->
					<div class="col-lg-6 cart_col">

						<div class="cart_total shadow">
							<?php if ($this->session->flashdata('error')) : ?>
							<div class="alert alert-danger" role="alert">
								Anda belum memiliki obat dalam cart
							</div>
							<?php endif?>
							<div class="cart_extra_content cart_extra_total">

								<div class="checkout_title">Cart Total</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto"></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_shipping_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value checkout_total ml-auto"></div>
									</li>
								</ul>
								<div class="payment_options">
									<div class="checkout_title">Payment</div>
									<ul>

										<li
											class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="payment_radio"
													class="payment_radio" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Cash on Delivery</span>
											</label>
										</li>


									</ul>
								</div>
								<div class="cart_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra
										tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum
										sodales arcu id te mpus. Ut consectetur lacus.</p>
								</div>
								<input type="submit" class="btn btn-secondary btn-block p-2 pl-5 pr-5 trans_200" form="checkout_form"
									value="place order">

							</div>
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


<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="<?php echo base_url("./node_modules/sweetalert2/dist/sweetalert2.all.min.js")?>"></script>
<script src="<?php echo base_url("./assets/js/view_cart.js") ?>"></script>
<script src="<?php echo base_url("./assets/js/paymentMethod.js") ?>"></script>
