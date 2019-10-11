<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card mt-4">
				<div class="card-header">
					Ubah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<input type="hidden" name="id" value="<?php echo $mahasiswa['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa['nama']; ?>" />
							<small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="nrp">NRP</label>
							<input type="text" class="form-control" id="nrp" name="nrp" value="<?php echo $mahasiswa['nrp']; ?>" />
							<small class="form-text text-danger"><?php echo form_error('nrp'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email" value="<?php echo $mahasiswa['email']; ?>" />
							<small class="form-text text-danger"><?php echo form_error('email'); ?></small>
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-control" id="jurusan" name="jurusan" >
								<?php foreach($jurusan as $j) : ?>
									<?php if ($j == $mahasiswa['jurusan']) : ?>
									<option value="<?php echo $j; ?>" selected><?php echo $j; ?></option>
									<?php else : ?>
									<option value="<?php echo $j; ?>"><?php echo $j; ?></option>
									<?php endif; ?>	
								<?php endforeach; ?>
							</select>
						</div>
						<button type="submit" class="btn btn-primary mt-2 float-right">
							Ubah Data
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
