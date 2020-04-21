<!-- Edit Profile -->
<div class="container editprofile">
	<div class="row">
		<div class="col-md-3">
			<div id="photo_profile" class="text-center">
				<img src="<?= $this->session->userdata("user")->pic?>" class="rounded-top" alt="img">
			</div>
			<div class="list-group text-center nav-profile">
				<a href="#" id="dashboard" class="list-group-item list-group-item-action disable">
					<?= $this->session->userdata("user")->name?></a>
				<?php echo form_open_multipart('Profile/uploadPhoto');?>
				<input id="edit-pic-hidden" name="image" type="file" style="display:none"
					onchange="form.submit()"></input>
				</form>
				<a href="#" id="edit-pic" class="list-group-item list-group-item-action active">
					<span><i class="fa fa-pencil-square-o"></i></span>Edit Photo</a>

			</div>
		</div>

		<div class="col-md-9">
			<?php if ($this->session->flashdata("message-danger")) : ?>
			<div class="alert alert-danger" role="alert">
				<?= $this->session->flashdata("message-danger")?>
			</div>
			<?php elseif ($this->session->flashdata("message-success")) : ?>
			<div class="alert alert-success" role="alert">
				<?= $this->session->flashdata("message-success")?>
			</div>
			<?php endif?>
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
							<form action="<?= base_url("Profile/updateProfile")?>" method="post"id="form1">
								<div class="form-group row">
									<label for="username" class="col-4 col-form-label">Nama</label>
									<div class="col-8">
										<input id="name" name="name"
											value="<?= $this->session->userdata("user")->name?>"
											class="form-control here" required="required" type="text">
										<?= form_error('name', '<small class="text-danger">', '</small>')?>

									</div>
								</div>
								<div class="form-group row">
									<label for="name" class="col-4 col-form-label">Tanggal Lahir</label>
									<div class="col-8">
										<input id="date" name="birth"
											value="<?= $this->session->userdata("user")->birth?>"
											placeholder="Place and Birth Date" class="form-control here" type="date">
									</div>
								</div>
								<div class="form-group row">
									<label for="lastname" class="col-4 col-form-label">Jenis Kelamin</label>
									<div class="col-8">
										<select id="inputState" class="form-control" name="gender">
											<option
												<?php if ($this->session->userdata("user")->gender == 'male') {echo 'selected';} ?>
												value="male" id="option-male">Male</option>
											<option
												<?php if ($this->session->userdata("user")->gender == 'female') {echo 'selected';} ?>
												value="female" id="option-male">Female</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="text" class="col-4 col-form-label">Alamat</label>
									<div class="col-8">
										<textarea id="address" name="address" class="form-control here"
											required="required"><?= $this->session->userdata("user")->address?> </textarea>
									</div>
								</div>

						</div>

					</div>
					<h4>
						<span><i class="fa fa-id-card-o"></i></span>
						Kontak</h4>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label for="username" class="col-4 col-form-label">Email</label>
								<div class="col-8">
									<input id="email" name="email" value="<?= $this->session->userdata("user")->email?>"
										placeholder="Email" class="form-control here" required="required" type="text">
								</div>
							</div>
							<div class="form-group row">
								<label for="name" class="col-4 col-form-label">No.Hp</label>
								<div class="col-8">
									<input id="hp" name="no_hp" value="<?= $this->session->userdata("user")->no_hp?>"
										placeholder="no hp" class="form-control here" type="text">
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-4 col-8">
									<input value="Update Profile" name="submit" type="submit" class="btn btn-primary"
										></input>
								</div>
							</div>


							</form>

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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="<?php echo base_url("./assets/js/view_profile.js")?>"></script>


</body>

</html>
