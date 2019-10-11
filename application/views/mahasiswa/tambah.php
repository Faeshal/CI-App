<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card mt-4">
				<div class="card-header">
					Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" />
							<small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="nrp">NRP</label>
							<input type="text" class="form-control" id="nrp" name="nrp" />
							<small class="form-text text-danger"><?php echo form_error('nrp'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email" />
							<small class="form-text text-danger"><?php echo form_error('jurusan'); ?></small>
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
