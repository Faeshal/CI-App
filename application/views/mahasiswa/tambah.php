<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card mt-4">
				<div class="card-header">
					Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<?php if (Validation_errors()) : ?>
					<div class="alert alert-danger" role="alert">
						<?php echo Validation_errors(); ?>
					</div>
					<?php endif; ?>
					<form action="" method="POST">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" />
						</div>
						<div class="form-group">
							<label for="nrp">NRP</label>
							<input type="text" class="form-control" id="nrp" name="nrp" />
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email" />
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-control" id="jurusan" name="jurusan">
								<option selected>Jurusan... </option>
								<option value="Teknik Informatika">Teknik Informatika</option>
								<option value="Sistem Informasi">Sistem Informasi</option>
								<option value="Manajemen Informatika"
									>Manajemen Informatika</option
								>
							</select>
						</div>
						<button type="submit" class="btn btn-primary mt-2 float-right">
							Tambah Data
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
