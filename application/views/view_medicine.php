<!-- Product -->
<div class="product">
	<div class="container p-5 shadow" style="border-radius:20px">
		<div class="row">

			<!-- Product Image -->
			<div class="col-lg-6">
				<div class="product_image_slider_container p-3">
					<img class="shadow-sm" src="<?php echo base_url("").$medicine->pic?>"
						style="width:100%; height:500px" />
				</div>
			</div>

			<!-- Product Info -->
			<div class="col-lg-6 product_col p-4 ">
				<div class="product_title mb-3">
					<div class="product_name">
						<h2><?= $medicine->name?></h2>
					</div>
					<div class="product_category">In <a href="category.html">Medicine</a></div>
				</div>


				<div class="product_price mb-5">
					Rp.<?= floor($medicine->price / 1000)?><span>.<?php if ($medicine->price % 1000 == 0) {echo '000';} else { echo $medicine->price % 1000; }?></span>
				</div>
				<div class="product_text">
					<h3>Deskripsi</h3>
					<p><?= $medicine->description?></p>
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

				<div id="buy" class="product_buttons" name="product_buttons" data-session="<?php if ($this->session->userdata('user')) {echo $this->session->userdata('user')->id;} else {echo 'null';}?>"data-medicineid="<?= $medicine->id?>">
					<div class="text-center d-flex flex-column align-items-end ">
						<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center" >
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
			<p><?= $medicine->category?></p>
		</div>
		<div class="btn">
			<img src="<?php echo base_url("assets/img/clock.svg")?>" alt="" class="icon">
			<h2>Drinking Ruler</h2>
			<p><?= $medicine->dose?></p>
		</div>
		<div class="btn">
			<img src="<?php echo base_url("assets/img/water.svg")?>" alt="" class="icon">
			<h2>Consumption Instruction</h2>
			<p><?= $medicine->howto?></p>
		</div>
		<div class="btn">
			<img src="<?php echo base_url("assets/img/coronavirus.svg")?>" alt="" class="icon">
			<h2>Disease</h2>
			<p><?= $medicine->category?></p>
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

<script src="<?php echo base_url("./node_modules/sweetalert2/dist/sweetalert2.all.min.js")?>"></script>

<script src="<?php echo base_url ("./assets/js/view_drugdetail.js") ?>"></script>
<!-- sweetalert -->
<script src="<?php echo base_url("./node_modules/sweetalert2/dist/sweetalert2.all.min.js")?>"></script>


