<?php
 if(isset($_POST['edit'])){

 include('../db.php');
 $username = $_POST['username'];
 $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 $name = $_POST['name'];
 $npm = $_POST['npm'];
 $prodi = $_POST['prodi'];


 $query = mysqli_query ($con,
 "UPDATE users SET 
        username = '$username', 
        name = '$name',
        npm = '$npm', 
        prodi = '$prodi',
        password ='$password',
        WHERE id ='$id'");

 
 if($query){
 echo
 '<script>
 alert("Edit Success"); window.location = "../page/listMahasiswaPage.php"
 </script>';
 }else{
 echo
 '<script>
 alert("Edit Failed");
 </script>';
 }

 }else{
 echo
 '<script>
 window.history.back()
 </script>';
 }
?>