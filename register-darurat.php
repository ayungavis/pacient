<main>
	<div id="hero_register">
		<div class="container margin_120_95">			
			<div class="row">
				<div class="col-lg-6">
					<h1>Instalasi Rawat Darurat</h1>
					<p class="lead">Melayani pertolongan pertama pada kasus/penyakit yang tergolong emergency.</p>
					<div class="box_feat_2">
						<i class="pe-7s-id"></i>
						<h3>Masukkan nomor identitas</h3>
						<p>Bisa menggunakan nomor Kartu Tanda Penduduk, nomor Kartu Keluarga, atau nomor Badan Penyelenggara Jaminan Sosial (BPJS).</p>
					</div>
					<div class="box_feat_2">
						<i class="pe-7s-phone"></i>
						<h3>Masukkan nomor telepon aktif</h3>
						<p>Demi kenyamanan dan pelayanan yang terbaik terhadap pasien, mohon untuk masukkan nomor telepon yang masih aktif.</p>
					</div>
					<div class="box_feat_2">
						<i class="pe-7s-map-marker"></i>
						<h3>Masukkan alamat lengkap</h3>
						<p>Mohon masukkan alamat lengkap dari pasien, demi kenyamanan privasi Anda akan kami rahasiakan.</p>
					</div>
				</div>
				<!-- /col -->
				<div class="col-lg-5 ml-auto">
					<div class="box_form">
						<div id="message-register"></div>
						<form method="post" action="inc/process.php">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nama Pasien" name="nama_pasien" id="nama_pasien" required>
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nomor KTP/KK/BPJS" name="identitas" id="identitas" required>
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6 ">
									<div class="form-group">
										<select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
											<option value="">Jenis Kelamin</option>
											<option value="l">Laki-laki</option>
											<option value="p">Perempuan</option>
										</select>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<select class="form-control" name="agama" id="agama" required>
											<option value="">Agama</option>
											<option value="islam">Islam</option>
											<option value="kristen">Kristen</option>
											<option value="katolik">Katolik</option>
											<option value="hindu">Hindu</option>
											<option value="budha">Budha</option>
										</select>
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Tanggal Lahir (MM/DD/YYYY)" name="tanggal_lahir" id="tanggal_lahir" required>
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nama Kepala Keluarga" name="kepala_keluarga" id="kepala_keluarga" required>
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Hubungan Keluarga Pasien" name="hubungan_pasien" id="hubungan_pasien" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nomor Telepon" name="nomor_telp" id="nomor_telp" required>
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<textarea rows="3" class="form-control" name="alamat" id="alamat" style="height:100px;" placeholder="Alamat" required></textarea>
									</div>
								</div>
							</div>
							<!-- /row -->
							<input type="hidden" name="action" value="register_rawat_darurat">
							<div><input type="submit" class="btn_1" value="Submit" id="submit-register"></div>
						</form>
					</div>
					<!-- /box_form -->
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /hero_register -->
</main>
<!-- /main -->