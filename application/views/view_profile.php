<!-- Edit Profile -->
<div class="container editprofile">
	<div class="row">
		<div class="col-md-3">
			<div id="photo_profile" class="text-center">
				<img src="<?php echo base_url("assets/img/boy1.jpg")?>" class="rounded-top" alt="img">
			</div>
			<div class="list-group text-center nav-profile">
				<a href="#" id="dashboard" class="list-group-item list-group-item-action disable">
					ini nama</a>
				<a href="#" id="edit-profile" class="list-group-item list-group-item-action active">
					<span><i class="fa fa-pencil-square-o"></i></span> Edit Profile</a>

			</div>
		</div>
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
					<div class="row biodata_profile">
						<div class="col-md-12">
							<h4>
								<span><i class="fa fa-id-card-o"></i></span>
								Biodata Diri</h4>
							<hr>
						</div>
					</div>
					<div class="row biodata_input">
						<div class="col-md-12">
							<form>
								<div class="form-group row">
									<label for="username" class="col-4 col-form-label">Name</label>
									<div class="col-8">
										<input id="name" name="name" placeholder="name" class="form-control here"
											required="required" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label for="name" class="col-4 col-form-label">Place and Birth Date</label>
									<div class="col-8">
										<input id="date" name="date" placeholder="Place and Birth Date"
											class="form-control here" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label for="lastname" class="col-4 col-form-label">Gender</label>
									<div class="col-8">
										<input id="gender" name="gender" placeholder="Gender" class="form-control here"
											type="text">
									</div>
								</div>
								<div class="form-group row">
									<label for="text" class="col-4 col-form-label">Address</label>
									<div class="col-8">
										<input id="address" name="address" placeholder="Address"
											class="form-control here" required="required" type="text">
									</div>
								</div>

							</form>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<h4>
								<span><i class="fa fa-id-card-o"></i></span>
								Kontak</h4>
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form>
								<div class="form-group row">
									<label for="username" class="col-4 col-form-label">Email</label>
									<div class="col-8">
										<input id="email" name="email" placeholder="Email" class="form-control here"
											required="required" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label for="name" class="col-4 col-form-label">No.Hp</label>
									<div class="col-8">
										<input id="hp" name="hp" placeholder="Hp" class="form-control here" type="text">
									</div>
								</div>


							</form>
							<div class="form-group row">
								<div class="offset-4 col-8">
									<button name="submit" type="submit" class="btn btn-primary">Update
										Profile</button>
								</div>
							</div>
						</div>

					</div>
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

</body>

</html>
