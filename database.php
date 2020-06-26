<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "pmb";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
        $data = mysqli_query($this->koneksi,"select nama_mhs, alamat_mhs, ttl_mhs, telp_mhs, email, nama_jurusan, kelas 
        from pendaftaran inner join jurusan on pendaftaran.id_jurusan = jurusan.id_jurusan;");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
}
?>