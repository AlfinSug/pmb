<?php
class configucup
{
    protected $penghubung;
    function __construct()
    {
        $sambunganDB = mysql_connect("localhost", "root", "");
        $penghubung=mysql_select_db("pmb");
    }
}
$object = new configucup();
