<?php
//memanggil file koneksi.php
include "koneksi.php";
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$level="user";//level otomatis diisi user pd saat registrasi
//format acak password harus sama dengan proses_login.php
$pengacak="p3ng4c4k";
$password_acak=md5($pengacak.md5($password).$pengacak);
$kirim=$_POST['kirim'];
//proses kirim data ke database MYSQL
if($kirim){
$query="INSERT INTO tb_user VALUES
('','$username','$password_acak','$level')";
$hasil=mysqli_query($conn,$query);
Header ("location:index.html");
}else{
echo "Registrasi User Gagal!";
}
?>