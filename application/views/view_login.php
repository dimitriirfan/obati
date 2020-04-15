</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 container-image">
				<div class="slogan">
					<h1>Buy Drugs Instead.</h1>
				</div>
			</div>
			<div class="col-lg-6 container-form">
				<div class="navbar main-nav d-flex justify-content-between align-items-center">
					<a href="<?php echo base_url("Controller_landing")?>"><img class="brand"
							src="<?php echo base_url('assets/img/logo.png') ?>" alt=""></a>
					<ul>
						<li><a href="<?php echo base_url("Controller_login/toLanding")?>">About</a></li>
						<li><a href="<?php echo base_url("Controller_article")?>">Articles</a></li>
						<li><a href="<?php echo base_url("Controller_landing")?>">Home</a></li>
					</ul>
				</div>
				<div class="main-form">
					<div class="form-title">
						<h1>Sign in to <span style="color: #FF7243;">Obati</span></h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>

					<form action="<?= base_url('Controller_login/login')?>" method="post">
						<?php if ($this->session->flashdata('message')) : ?>
						<div class="alert alert-danger mb-4" role="alert">
							Username or password is incorect
						</div>
						<?php endif?>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend input-effect">

									<input class="effect-1" type="text" id="input_email" name="email"
										aria-describedby="emailHelp" placeholder="" required>
									<i class="input-icon fa fa-envelope"></i>

									<label id="label_email" for="exampleInputEmail1">Email address</label>

									<span class="focus-border"></span>


								</div>
							</div>
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with
								anyone.</small>
						</div>
						<div class="form-group">
							<div class="input-group">

								<div class="input-group-prepend input-effect">
									<input class="effect-1" type="password" id="input_password" name="password"
										aria-describedby="passwordHelp" placeholder="" required>
									<i class="input-icon fa fa-key"></i>
									<label id="label_password" for="exampleInputEmail1">Password</label>
									<span class="focus-border"></span>

									<a href="#" class="text-dark" id="icon-click">
										<span class="gaterlihat"> <i class="fa fa-eye" id="icon"></i></span>
									</a>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between">
							<div class="form-group form-check ">

								<div class="form-group">
									<label class="mz-check">
										<input id="checkbox_remember" type="checkbox">
										<i class="mz-blue"></i>
										<label id="label_form_check" class="form-check-label" for="exampleCheck1">Always
											remember</label>
									</label>
								</div>
							</div>
							<a class="link" href="<?php echo base_url('Controller_resetpass') ?>">Forgot
								Password?</a>
						</div>
						<button type="submit" class="btn btn-primary btn-block btn-submit">Submit</button>

					</form>
					<div class="bottom-bar">
						<p style="font-weight: 700;">Dont have an account? <a class="link"
								href="<?php echo base_url('Controller_register') ?>">Sign Up</a>
						</p>
					</div>

				</div>

			</div>
		</div>
	</div>


	<script src="<?php echo base_url("./assets/js/jquery.js")?>"></script>
	<script src="<?php echo base_url("./assets/js/bootstrap/bootstrap.min.js")?>"></script>
	<script src="<?php echo base_url("./assets/js/view_login.js") ?>"></script>

	</body>

	</html>
