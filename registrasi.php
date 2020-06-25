<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<center><h2>Form Registrasi</h2></center>
	<div class="login">
		<form action="#" method="POST" enctype="multipart/form-data" >
			<div>
				<label>Nama Lengkap:</label>
				<input type="text" name="nama_buku" id="nama" />
			</div>
			<div>
				<label>Alamat:</label>
				<textarea cols="40" rows="5" name="alamat" id="alamat"></textarea>
			</div>
			<div>
				<label>No Telp:</label>
				<input type="text" name="telp" id="telp" />
			</div>
			<div>
				<label>Tanggal Lahir:</label>
				<input type="date" name="ttl" id="ttl"/>
			</div>
            <div>
				<label>Mahasiswa Kelas:</label>
				<select  name="kelas">
   					<option>Pagi</option>
   					<option>Malam</option>
				</select >
            </div>
            <div>
				<label>Jenis Kelamin:</label>
                <input type="radio" name="jk" value="L" id="jk" />Laki-laki
				<input type="radio" name="jk" value="P" id="jk" />Perempuan
			</div>
            <div>
                <label>Dokumen:</label>
                <input type="file" name="gambar" required="" />
			</div>
			<br>
			<div>
                <input type="submit" value="Submit" class="tombol">
                <input type="button" value="Back" class="tombol">
			</div>
		</form>
	</div>
</body>

</html>