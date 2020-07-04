<?php
include('config_mhs.php');
session_start();
if (isset($_SESSION['login_mhs'])) {
  $email = $_SESSION['email'];
} else {

  header('location: index.php?msg=not_login');
}
echo $email;
