<?php
class config
{
    protected $penghubung;
    function __construct()
    {
        $sambunganDB = mysqli_connect("127.0.0.1:3307", "root", "alfin3307", "pmb_itats");

        if (mysqli_connect_errno()) {
            echo 'Koneksi database gagal!' . mysqli_connect_error();
        } else {
            $this->penghubung = $sambunganDB;
        }
    }
}
$object = new config();
