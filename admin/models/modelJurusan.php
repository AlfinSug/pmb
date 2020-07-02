<?php
include_once 'config.php';
class modelJurusan extends config
{
    private $dataku;

    function vijur()
    {
        $query = "SELECT*FROM jurusan";
        $panggil = mysqli_query($this->penghubung, $query);
        if ($panggil === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }

        while ($tampil = mysqli_fetch_array($panggil)) {
            $sementara[] = $tampil;
        }
        $this->dataku = $sementara;
        return $this->dataku;
    }

    function injur($nj, $kls, $spp)
    {
        $query = "INSERT INTO jurusan VALUES ('','$nj','$kls','$spp')";
        $panggil = mysqli_query($this->penghubung, $query);
    }

    function upjur($nj, $spp, $id)
    {
        $query = "UPDATE jurusan SET nama_jurusan='$nj', biaya_spp='$spp' WHERE id_jurusan='$id'";
        $panggil = mysqli_query($this->penghubung, $query);
    }

    function deljur($id)
    {
        $query = "DELETE FROM jurusan WHERE id_jurusan='$id'";
        $panggil = mysqli_query($this->penghubung, $query);
    }
    function setjur()
    {
        $query = "ALTER TABLE `jurusan` MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0";
        $panggil2 = mysqli_query($this->penghubung, $query);
    }
}
$object = new modelJurusan();
