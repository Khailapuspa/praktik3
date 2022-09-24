<?php
$conn=mysqli_connect("localhost","root","","nebrazka");
//Cek Koneksi
if (mysqli_connect_error()){
    echo"Koneksi database gagal".mysqli_connect_error();
}
// else {
    // echo"Koneksi database berhasil";
// }
?>