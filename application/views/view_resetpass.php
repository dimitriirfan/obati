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
					<a href="<?php echo base_url("landing")?>"><img class="brand"
							src="<?php echo base_url('assets/img/logo.png') ?>" alt=""></a>
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="<?php echo base_url("article")?>">Articles</a>
						</li>
						<li><a href="<?php echo base_url("landing")?>">Home</a></li>
					</ul>
				</div>
				<div class="main-form">
					<div class="form-title">
						<h1>Reset Password <span style="color: #FF7243;">Obati</span></h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
					<form>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend input-effect">

									<input class="effect-1" type="text" id="input_email" aria-describedby="emailHelp"
										placeholder="" required>
									<i class="input-icon fa fa-envelope"></i>

									<label id="label_email" for="exampleInputEmail1">Email address</label>

									<span class="focus-border"></span>

								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">

								<div class="input-group-prepend input-effect">
									<input class="effect-1" type="password" id="input_password"
										aria-describedby="passwordHelp" placeholder="" required>
									<i class="input-icon fa fa-key"></i>
									<label id="label_password" for="exampleInputEmail1">New Password</label>
									<span class="focus-border"></span>

									<a href="#" class="text-dark" id="icon-click">
										<span class="gaterlihat"> <i class="fa fa-eye" id="icon"></i></span>
									</a>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">

								<div class="input-group-prepend input-effect">
									<input class="effect-1" type="password" id="input_password"
										aria-describedby="passwordHelp" placeholder="" required>
									<i class="input-icon fa fa-key"></i>
									<label id="label_password" for="exampleInputEmail1">Confirm Password</label>
									<span class="focus-border"></span>

								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-block btn-submit">Submit</button>

					</form>
					<div class="bottom-bar">
						<p style="font-weight: 700;">Dont have an account? <a class="link"
								href="<?php echo base_url('register') ?>">Sign Up</a><br>
							Already have an account? <a class="link"
								href="<?php echo base_url('login') ?>">Sign In</a>
						</p>
					</div>


				</div>

			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="<?php echo base_url("./assets/js/jquery.js")?>"></script>
	<script src="<?php echo base_url("./assets/js/bootstrap/bootstrap.min.js")?>"></script>
	<script src="<?php echo base_url("./assets/js/view_resetpass.js") ?>"></script>

</body>

</html>
