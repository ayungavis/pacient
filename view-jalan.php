<main>
	<div class="container margin_60">
		<div class="row">
			<div class="col-xl-12 col-lg-12">
				<nav id="secondary_nav">
					<div class="container">
						<ul class="clearfix">
							<li><a href="#section_1" class="active">Lihat Data Instalasi Rawat Jalan</a></li>
						</ul>
					</div>
				</nav>
				<div id="section_1">
					<div class="box_general_3">
						
						<!-- Example DataTables Card-->
						<div class="card">
							<div class="card-body">
						  		<div class="table-responsive">
						    		<table class="display nowrap" style="width:100%" id="tabel-jalan">
						      			<thead>
						        			<tr>
						        				<th>#</th>
						          				<th>ID</th>
												<th>Nama Pasien</th>
												<th>Gender</th>
												<th>Agama</th>
												<th>TTL</th>
												<th>Usia</th>
												<th>Kepala Keluarga</th>
												<th>Hubungan</th>
												<th>No. Telp</th>
												<th>Perawatan</th>
												<th>Poli</th>
												<th>Alamat</th>
						        			</tr>
						      			</thead>
						      			<tbody>
						      				<?php $query = "SELECT * FROM rawat_jalan"; ?>
						      				<?php $data = $db->query($query); $i = 1; ?>
						      				<?php foreach($data as $row) { ?>
							        			<tr>
													<td><?php echo $i; $i++; ?></td>
													<td><?php echo $row['identitas']; ?></td>
													<td><?php echo $row['nama_pasien']; ?></td>
													<?php 
														if($row['jenis_kelamin'] == 'l') $gender = 'Laki-laki';
														if($row['jenis_kelamin'] == 'p') $gender = 'Perempuan';
													?>
													<td><?php echo $gender; ?></td>
													<td class="text-center"><?php echo $row['agama']; ?></td>
													<td><?php echo show_date($row['tanggal_lahir']); ?></td>
													<td class="text-center"><?php echo $row['usia']; ?></td>
													<td class="text-center"><?php echo $row['nama_kk']; ?></td>
													<td class="text-center"><?php echo $row['hubungan_keluarga']; ?></td>
													<td><?php echo $row['nomor_telepon']; ?></td>
													<?php 
														if($row['jenis_perawatan'] == 'jalan') $perawatan = 'Rawat Jalan';
														if($row['jenis_perawatan'] == 'inap') $perawatan = 'Rawat Inap';
													?>
													<td><?php echo $perawatan; ?></td>
													<?php 
														if($row['jenis_poli'] == 'anak') $poli = 'Poli Anak';
														if($row['jenis_poli'] == 'gigi') $poli = 'Poli Gigi';
														if($row['jenis_poli'] == 'syaraf') $poli = 'Poli Syaraf';
														if($row['jenis_poli'] == 'bedah') $poli = 'Poli Bedah';
														if($row['jenis_poli'] == 'obsgyn') $poli = 'Poli Obsgyn';
														if($row['jenis_poli'] == 'jantung') $poli = 'Poli Jantung';
														if($row['jenis_poli'] == 'paru') $poli = 'Poli Paru-Paru';
														if($row['jenis_poli'] == 'rehabilitasi') $poli = 'Poli Rehabilitasi';
													?>
													<td><?php echo $poli; ?></td>
													<td><?php echo $row['alamat']; ?></td>
							        			</tr>
							        		<?php } ?>
										</tbody>
						    		</table>
						  		</div>
							</div>
						</div>
						<!-- /tables-->
					</div>
					<!-- /section_1 -->
				</div>
				<!-- /box_general -->
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!-- /main -->