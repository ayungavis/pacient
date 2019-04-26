<?php 
	require_once('function.php');

	if(isset($_POST['nama_pasien'])) {
		/*echo age("2000-05-18");*/
		$identitas		= $_POST['identitas'];
		$nama_pasien	= $_POST['nama_pasien'];
		$jenis_kelamin 	= $_POST['jenis_kelamin'];
		$agama			= $_POST['agama'];
		$nomor_telepon 	= $_POST['nomor_telp'];
		$kepala_keluarga= $_POST['kepala_keluarga'];
		$hubungan_pasien= $_POST['hubungan_pasien'];
		$jenis_perawatan= $_POST['jenis_perawatan'];
		$jenis_poli		= $_POST['jenis_poli'];
		$alamat			= $_POST['alamat'];

		$date 			= explode("/", $_POST['tanggal_lahir']);
		$dob 			= $date[2] .'-'. $date[0] .'-'. $date[1];
		$usia			= age($dob);

		echo $identitas.'\n';
		echo $nama_pasien.'\n';
		echo $jenis_kelamin.'\n';
		echo $agama.'\n';
		echo $nomor_telepon.'\n';
		echo $kepala_keluarga.'\n';
		echo $hubungan_pasien.'\n';
		echo $jenis_perawatan.'\n';
		echo $jenis_poli.'\n';
		echo $alamat.'\n';
		echo $dob.'\n';
		echo $usia.'\n';
	}
?>