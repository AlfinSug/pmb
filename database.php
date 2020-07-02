<?php
include_once 'config.php';
class database extends config
{

	var $koneksi = "";

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi, "select nama_mhs, alamat_mhs, ttl_mhs, telp_mhs, email, nama_jurusan, kelas 
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
