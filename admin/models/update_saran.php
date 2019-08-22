<?php
ob_start();
require_once('../config/+koneksi.php');

$conn = new Database("localhost","id10524213_lailla","pakarbalita123","id10524213_sistempakar");
$query= mysqli_query($conn, "SELECT * FROM saran_user") or die("Failed to query database".mysql_error());;

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_handphone = $_POST['no_handphone'];
$pesan = $_POST['pesan'];

mysql_connect("localhost","id10524213_lailla","pakarbalita123");
mysql_select_db("id10524213_sistempakar");
$query="INSERT INTO saran_user VALUES('','$nama','$email','$no_handphone','$pesan')";

$hasil = mysql_query($query);
if($hasil){
    echo "input berhasil";
}else{
    echo "input gagal";
}
?>