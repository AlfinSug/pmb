<?php
class database
{
	var $koneksi = "";
	function __construct()
	{
		$this->koneksi = mysqli_connect("127.0.0.1:3307", "root", "alfin3307", "pmb_itats");

		if (mysqli_connect_errno()) {
			echo 'Koneksi database gagal!' . mysqli_connect_error();
		} else {
			$this->koneksi;
		}
	}
	function insert_data($jurusan, $email, $nama, $alamat, $ttl, $notelp, $gender, $bukti)
	{
		mysqli_query($this->koneksi, "insert into pendaftaran values('','$jurusan','$email', '$nama', '$alamat', '$ttl', '$notelp', '$gender', '$bukti')");
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi, "select nama_mhs, alamat_mhs, ttl_mhs, telp_mhs, email, nama_jurusan, kelas, dokumen, images_profil, kartu_keluarga 
        from pendaftaran inner join jurusan on pendaftaran.id_jurusan = jurusan.id_jurusan;");
		while ($row = mysqli_fetch_array($data)) {
			$hasil[] = $row;
		}
		return $hasil;
	}

	function pickID($npm)
	{
		$sql_pick = mysqli_query($this->koneksi, "select * from pendaftaran where npm='$npm'");
		return $sql_pick->fetch_array();
	}

	function update_data($doc, $kk, $bukti, $npm)
	{
		$sql_update = "update pendaftaran set dokumen='$doc', kartu_keluarga='$kk', bukti_pem='$bukti' where npm='$npm'";
		$exec = mysqli_query($this->koneksi, $sql_update);
	}
}
