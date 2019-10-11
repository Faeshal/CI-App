<div class="container">
	<?php if( $this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data mahasiswa <strong>berhasil</strong>
				<?php echo $this->session->flashdata('flash'); ?>
				<button
					type="button"
					class="close"
					data-dismiss="alert"
					aria-label="Close"
				>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="row">
		<div class="col-md-6">
			<a
				href="<?php echo base_url();?>mahasiswa/tambah"
				class="btn mt-3 btn-primary"
				>Tambah Data</a
			>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="POST">
				<div class="input-group mb-3">
					<input type="text" class="form-control" />
					<div class="input-group-append">
						<button
							class="btn btn-outline-secondary"
							type="button"
							id="button-addon2"
						>
							Cari
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h4 class="mt-2">Data Mahasiswa</h4>
			<ul class="list-group">
				<?php foreach($mahasiswa as $mhs ) : ?>
				<li class="list-group-item">
					<?php echo $mhs['nama']; ?>
					<a
						href=" <?php echo base_url(); ?>mahasiswa/hapus/<?php echo $mhs['id'] ?> "
						class="badge badge-sm badge-danger float-right"
						onclick="return confirm('yakin?');"
						>Hapus</a
					>
					<a
						href=" <?php echo base_url(); ?>mahasiswa/ubah/<?php echo $mhs['id'] ?> "
						class="badge badge-sm badge-warning float-right"
						>Ubah</a
					>
					<a
						href=" <?php echo base_url(); ?>mahasiswa/detail/<?php echo $mhs['id'] ?> "
						class="badge badge-sm badge-secondary float-right"
						>Detail</a
					>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</div>
