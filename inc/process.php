<?php 
	/**
	 *	Officially created by
	 * 	Tranity Project
	 * 	---------------------
	 * 	
	 *	For more information:
	 *	+62 857 3240 5860 (WhatsApp)
	 * 	http://udah.pw/ayung
	 */

	require_once(__DIR__ . '/db.class.php');
	require_once('function.php');
	require_once('config.php');
	$db = new DB();

	// GET ACTION PROCESS
	$action = $_POST["action"];

	if ($action == 'register_rawat_jalan') {
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

		$db->bindMore(array(
			"id"				=> "",
			"log_date"			=> get_date(),
			"identitas"			=> "$identitas",
			"nama_pasien"		=> "$nama_pasien",
			"jenis_kelamin"		=> "$jenis_kelamin",
			"agama"				=> "$agama",
			"tanggal_lahir" 	=> "$dob",
			"usia"				=> "$usia",
			"nomor_telepon" 	=> "$nomor_telepon",
			"kepala_keluarga"	=> "$kepala_keluarga",
			"hubungan_pasien" 	=> "$hubungan_pasien",
			"jenis_perawatan"	=> "$jenis_perawatan",
			"jenis_poli"		=> "$jenis_poli",
			"alamat"			=> "$alamat",
			"updated_by"		=> "",
			"updated_date"		=> "",
			"revision"			=> 0 
		));

		$query = "INSERT INTO rawat_jalan VALUES (:id, :log_date, :identitas, :nama_pasien, :jenis_kelamin, :agama, :tanggal_lahir, :usia, :nomor_telepon, :kepala_keluarga, :hubungan_pasien, :jenis_perawatan, :jenis_poli, :alamat, :updated_by, :updated_date, :revision)";
		$process = $db->query($query);

		if ($process) {
			$_SESSION['info'] = "Data berhasil disimpan.";
			$_SESSION['params'] = 'rawat-jalan';
			header("Location: ../success");
			die();
		}
	}

	else if ($action == 'register_rawat_inap') {
		$identitas		= $_POST['identitas'];
		$nama_pasien	= $_POST['nama_pasien'];
		$jenis_kelamin 	= $_POST['jenis_kelamin'];
		$agama			= $_POST['agama'];
		$nomor_telepon 	= $_POST['nomor_telp'];
		$kepala_keluarga= $_POST['kepala_keluarga'];
		$hubungan_pasien= $_POST['hubungan_pasien'];
		$jenis_perawatan= $_POST['jenis_perawatan'];
		$jenis_bangsal 	= $_POST['jenis_bangsal'];
		$alamat			= $_POST['alamat'];

		$date 			= explode("/", $_POST['tanggal_lahir']);
		$dob 			= $date[2] .'-'. $date[0] .'-'. $date[1];
		$usia			= age($dob);

		$db->bindMore(array(
			"id"				=> "",
			"log_date"			=> get_date(),
			"identitas"			=> "$identitas",
			"nama_pasien"		=> "$nama_pasien",
			"jenis_kelamin"		=> "$jenis_kelamin",
			"agama"				=> "$agama",
			"tanggal_lahir" 	=> "$dob",
			"usia"				=> "$usia",
			"nomor_telepon" 	=> "$nomor_telepon",
			"kepala_keluarga"	=> "$kepala_keluarga",
			"hubungan_pasien" 	=> "$hubungan_pasien",
			"jenis_perawatan"	=> "$jenis_perawatan",
			"jenis_bangsal"		=> "$jenis_bangsal",
			"alamat"			=> "$alamat",
			"updated_by"		=> "",
			"updated_date"		=> "",
			"revision"			=> 0 
		));

		$query = "INSERT INTO rawat_inap VALUES (:id, :log_date, :identitas, :nama_pasien, :jenis_kelamin, :agama, :tanggal_lahir, :usia, :nomor_telepon, :kepala_keluarga, :hubungan_pasien, :jenis_perawatan, :jenis_bangsal, :alamat, :updated_by, :updated_date, :revision)";
		$process = $db->query($query);

		if ($process) {
			$_SESSION['info'] = "Data berhasil disimpan.";
			$_SESSION['params'] = 'rawat-inap';
			header("Location: ../success");
			die();
		}
	}

	else if ($action == 'register_rawat_darurat') {
		$identitas		= $_POST['identitas'];
		$nama_pasien	= $_POST['nama_pasien'];
		$jenis_kelamin 	= $_POST['jenis_kelamin'];
		$agama			= $_POST['agama'];
		$nomor_telepon 	= $_POST['nomor_telp'];
		$kepala_keluarga= $_POST['kepala_keluarga'];
		$hubungan_pasien= $_POST['hubungan_pasien'];
		$alamat			= $_POST['alamat'];

		$date 			= explode("/", $_POST['tanggal_lahir']);
		$dob 			= $date[2] .'-'. $date[0] .'-'. $date[1];
		$usia			= age($dob);

		$db->bindMore(array(
			"id"				=> "",
			"log_date"			=> get_date(),
			"identitas"			=> "$identitas",
			"nama_pasien"		=> "$nama_pasien",
			"jenis_kelamin"		=> "$jenis_kelamin",
			"agama"				=> "$agama",
			"tanggal_lahir" 	=> "$dob",
			"usia"				=> "$usia",
			"nomor_telepon" 	=> "$nomor_telepon",
			"kepala_keluarga"	=> "$kepala_keluarga",
			"hubungan_pasien" 	=> "$hubungan_pasien",
			"alamat"			=> "$alamat",
			"updated_by"		=> "",
			"updated_date"		=> "",
			"revision"			=> 0 
		));

		$query = "INSERT INTO rawat_darurat VALUES (:id, :log_date, :identitas, :nama_pasien, :jenis_kelamin, :agama, :tanggal_lahir, :usia, :nomor_telepon, :kepala_keluarga, :hubungan_pasien, :alamat, :updated_by, :updated_date, :revision)";
		$process = $db->query($query);

		if ($process) {
			$_SESSION['info'] = "Data berhasil disimpan.";
			$_SESSION['params'] = 'rawat-darurat';
			header("Location: ../success");
			die();
		}
	}
?>