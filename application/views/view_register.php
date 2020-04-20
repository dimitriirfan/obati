
</head>
<body><div class="container-fluid">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message');?>"></div>
	<div class="row">
		<div class="col-lg-6 container-image">
			<div class="slogan">
				<h1>Buy Drugs <br> instead.</h1>
			</div>
		</div>
		<div class="col-lg-6 container-form">
			<div class="main-nav d-flex justify-content-between align-items-center">
				<a href="<?php echo base_url("Controller_landing")?>"><img class="brand"
						src="<?php echo base_url('assets/img/logo.png') ?>" alt=""></a>
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="<?php echo base_url("Controller_article")?>">Articles</a></li>
					<li><a href="<?php echo base_url("Controller_landing")?>">Home</a></li>
				</ul>


			</div>
			<div class="main-form">
				<div class="form-title">
					<h1>Sign up to <span style="color: #74BDCB;">Obati</span></h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<form action="<?php echo base_url("Controller_register/register")?>" method="post">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4">Name</label>
							<input type="text" id="input_name" name="name" value="<?= set_value('name')?>"	
								placeholder="Please enter your name">
							<?= form_error('name', '<small class="text-danger">', '</small>')?>

						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">email</label>
							<input type="email" id="input_email" name="email" value="<?= set_value('email')?>"
								placeholder="Please enter your email">
							<?= form_error('email', '<small class="text-danger">', '</small>')?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">Address</label>
						<input type="text" id="input_address" name="address" value="<?= set_value('address')?>"
							placeholder="Please enter your address">
						<?= form_error('address', '<small class="text-danger">', '</small>')?>
					</div>
					<div class="form-group">
						<label for="inputPlaceandBirhdate">Birth date</label>
						<input type="date" id="input_birth" name="birth" value="<?= set_value('birth')?>"
							placeholder="Please enter your place and birth date">
						<?= form_error('birth', '<small class="text-danger">', '</small>')?>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4">Password</label>
							<input type="password" id="input_password" name="password"
								placeholder="Please enter your password">
							<a href="#" class="text-dark" id="icon-click">
								<span class="gaterlihat"> <i class="fa fa-eye" id="icon"></i></span>
							</a>
							<?= form_error('password', '<small class="text-danger">', '</small>')?>
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Confirm Password</label>
							<input type="password" id="input_confirm" name="confirm"
								placeholder="Please re-enter your password">
							<?= form_error('', '<small class="text-danger">', '</small>')?>
						</div>
					</div>

					<div class="d-flex justify-content-between agree">
						<div class="form-group form-check ">

							<div class="form-group">
								<label class="mz-check">
									<input id="checkbox_remember" type="checkbox">
									<i class="mz-blue"></i>
									<label class="form-check-label" for="exampleCheck1">I agree to the Obati <a href=""
											style=" color: #4492ED">Terms </a> and <a href="" style=" color: #4492ED">
											Privacy policy</a></label>
								</label>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block btn-submit">Sign Up</button>
				</form>
				<div class="bottom-bar">
					<p style="font-weight: 700;">Already have an account? <a class="link"
							href="<?php echo base_url('Controller_login') ?>">Sign In</a></p>

				</div>

			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url("./assets/js/jquery.js")?>"></script>
<script src="<?php echo base_url("./assets/js/bootstrap/bootstrap.min.js")?>"></script>
<script src="<?php echo base_url("./assets/js/view_register.js") ?>"></script>
<script src="<?php echo base_url("./node_modules/sweetalert2/dist/sweetalert2.all.min.js")?>"></script>

</body>

</html>
