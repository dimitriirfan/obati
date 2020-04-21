
<div class="container">
	<h3 class="ket"><a href="<?= base_url("Category")?>">KATEGORI</a> / <?= $category?></h3>
	<div class="decor"></div>
	

	<div class="card-deck">
		<?php foreach($catalog as $row) : ?>

		<div class="card shadow-sm " title="<?= $row->name?>">
			<img src="<?php echo base_url("assets/img/sangobion.jpg")?>" class=" card-img-top pic" alt="<?= $row->name?>">
				<a href="#" class="stretched-link"></a>
			</img>
			<div class="card-body">
				<h6 class="dname"><?= $row->name?><div class="penyakit"><?= $row->category?></div>
				</h6>
				<div class="hrg">Rp.<?= $row->price?></div>
			</div>
			<a href="#" class="btn">Buy</a>
		</div>

		<?php endforeach?>
	</div>

	<!-- Pagination-->

	<div class="page_indicator">
		<ul class="pagination pg-darkgrey pagination-lg">
			<li class="page-item">
				<a class="page-link" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				</a>
			</li>
			<li class="page-item active"><a class="page-link">1</a></li>
			<li class="page-item"><a class="page-link">2</a></li>
			<li class="page-item"><a class="page-link">3</a></li>
			<li class="page-item"><a class="page-link">4</a></li>
			<li class="page-item"><a class="page-link">5</a></li>
			<li class="page-item">
				<a class="page-link" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				</a>
			</li>
		</ul>
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

