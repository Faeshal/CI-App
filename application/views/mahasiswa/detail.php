<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card mt-4 border-secondary">
				<h5 class="card-header ">Detail Data Mahasiswa</h5>
				<div class="card-body">
					<h5 class="card-title"><?php echo $mahasiswa['nama']; ?></h5>
					<p class="card-text text-muted">
						<?php echo $mahasiswa['email'] ;?>
                    </p>
                    <p class="card-text">
						<?php echo $mahasiswa['nrp'] ;?>
					</p>
                    <p class="card-text">
						<?php echo $mahasiswa['jurusan'] ;?>
					</p>
					<a href="<?php echo base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>
