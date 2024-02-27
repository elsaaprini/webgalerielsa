<?php
session_start();
include 'koneksi.php';

$username =$_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi)