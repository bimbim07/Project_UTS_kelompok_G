<?php
 // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
 // $_POST itu method di formnya
 if(isset($_POST['register'])){

 // untuk mengoneksikan dengan database dengan memanggil file db.php
 include('../db.php');
 // tampung nilai yang ada di from ke variabel
 // sesuaikan variabel name yang ada di registerPage.php disetiap input
 $cekin = $_POST['cekin'];
 $cekout = $_POST['cekout'];
 $jumlah = $_POST['jumlah'];
 $dewasa = $_POST['dewasa'];
 $anak = $_POST['anak'];
 $kasur = $_POST['kasur'];
 $tipe = $_POST['tipe'];
 // Melakukan insert ke databse dengan query dibawah ini
 $query = mysqli_query ($con,
 "INSERT INTO kamar(cekin, cekout, jumlah, dewasa, anak,kasur,tipe)
 VALUES
 ('$cekin', '$cekout', '$jumlah', '$dewasa', '$anak', '$kasur', '$tipe')")
 or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

 if($query){
 echo
 '<script>
 alert("Kamar Berhasil Dipesan"); window.location = "../page/listMahasiswaPage.php"
 </script>';
 }else{
 echo
 '<script>
 alert("Gagal Pesan Kamar");
 </script>';
 }

 }else{
 echo
 '<script>
 window.history.back()
 </script>';
 }
?>