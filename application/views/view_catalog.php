	<div class="main-catalog container">
		<h3 class="ket"><a href="<?= base_url("category")?>">KATEGORI</a> / <?= $category?></h3>
		<div class="decor"></div>
		<div class="main-card">
			<?php foreach($catalog as $row) : ?>
			<div class="card shadow-sm " title="<?= $row->name?>">
				<img src="<?php echo base_url().$row->pic?>" class=" card-img-top pic" alt="<?= $row->name?>">
				<a href="<?= base_url('catalog/medicine/').$row->id;?>" class="stretched-link"></a>
				</img>	
				<div class="card-body">
					<h6 class="dname"><?= $row->name?><div class="penyakit"><?= $row->category?></div>
					</h6>
					<div class="hrg">Rp. <?= $row->price?></div>
				</div>
				<div class="card-footer">
					<a href="#" class="btn">Buy</a>
				</div>
			</div>
			<?php endforeach?>
		</div>
		<?= $this->pagination->create_links()?>
	</div>
	<div class="bottom-decoration d-flex justify-content-between">
		<span class="d-flex">
			<div class="decoration decoration-why-1"></div>
			<div class="decoration decoration-why-2"></div>

		</span>

		<div class="decoration decoration-why-3"></div>

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
