<div class="container">
	<div class="row">
		<div class="col-md-6">
			<a href="<?php echo base_url();?>mahasiswa/tambah" class="btn mt-3 btn-primary">Tambah Data</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h4 class="mt-4">Data Mahasiswa</h4>
			<ul class="list-group">
				<?php foreach($mahasiswa as $mhs ) : ?>
				<li class="list-group-item"><?php echo $mhs['nama']; ?></li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</div>
