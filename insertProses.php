<?php
    include "koneksi.php";
   
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password= md5($_POST['password']);
    $birthday = $_POST['birthday'];
    $file = $_FILES['profil']['name'];
    $namafile = "img/";
    $filedb = $namafile . $file;
    $tmp_files = $_FILES['profil']['tmp_name'];
  
    $sql= "INSERT INTO user(username, email, password, birthday, profil)
    VALUES ('$username', '$email', '$password', '$birthday', '$filedb')";
      
    move_uploaded_file($tmp_files, $filedb);

    $contohusername = mysqli_real_escape_string($connect, $_POST['usernamelogin']);
    $raw_password = md5($_POST['passwordlogin']);
    $contohpassword = mysqli_real_escape_string($connect, $raw_password);
    $data="SELECT username, password from user WHERE username='$contohusername' and password='$contohpassword'";
    $selectData=mysqli_query($connect, $data);
      
    if(mysqli_num_rows($selectData) > 0) {
    header("Location:loginRegis.php?error=user_registered");
        
    } else {
        if(mysqli_query($connect, $sql)) {
            header("Location:loginRegis.php?error=user_success");
        } else {
            echo "Database gagal ditambahkan<br>".mysqli_error($connect);
            mysqli_close($connect);
        }   
    }
?>