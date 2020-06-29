<?php
session_start();
if(isset($_SESSION['unameadm'])){
    echo $_SESSION['unameadm'];
}
?>