<?php
include_once 'configucup.php';
class modelMhsu  extends configucup
{
    private $dataku;

    function viMhs()
    {
        $query = "SELECT*FROM pendaftaran, jurusan WHERE jurusan.id_jurusan=pendaftaran.id_jurusan";
        $panggil = mysql_query($query);
        if ($panggil === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }

        while ($tampil = mysql_fetch_array($panggil)) {
            $sementara[] = $tampil;
        }
        $this->dataku = $sementara;
        return $this->dataku;
    }

    function upMhs($npm, $nm, $jrsn, $almt, $ttl, $tlp, $jk, $email)
    {
        $query = "UPDATE pendaftaran SET nama_mhs='$nm',id_jurusan='$jrsn',alamat_mhs='$almt',ttl_mhs='$ttl',telp_mhs='$tlp',gender_mhs='$jk',email='$email' WHERE npm='$npm'";
        $panggil = mysql_query($query);
    }

    function delMhs($npm)
    {
        $query = "DELETE FROM pendaftaran WHERE npm='$npm'";
        $panggil = mysql_query($query);
    }

    function setMhs()
    {
        $query = "ALTER TABLE `pendaftaran` MODIFY `npm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0";
        $panggil2 = mysql_query($query);
    }

    function tomMhs($npm, $verif)
    {
        $query = "UPDATE pendaftaran SET verifikasi='$verif' WHERE npm='$npm'";
        $panggil = mysql_query($query);
    }
    /* TAMBAHAN MODEL */
    function upfoto($foto,$npm){
        $query = "UPDATE pendaftaran SET images_profil='$foto' WHERE npm='$npm'";
        $panggil = mysql_query($query);
    }
}
// $object = new modelMhs();
// $object->uptMhs('2', 'ragil', '13', 'surabaya', '2020-07-01', '09876', 'L', 'ragil@gmail.com');
