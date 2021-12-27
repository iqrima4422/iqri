<?php 
    include 'koneksi.php';

    $id = $_POST['id_user'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $birthday = $_POST['birthday'];

    $dir = "img/";
    $picturePath = $_FILES['file']['name'];
    $path = $dir . $picturePath;
    $tmp_path = $_FILES['file']['tmp_name'];
    
    move_uploaded_file($tmp_path, $path);

    $query = "UPDATE user
    SET username='$username', email='$email', password ='$password', birthday = '$birthday', profil = '$path'
    WHERE id_user='$id'";
    
    $result = mysqli_query($connect, $query);

    if($result) {
        $query = "SELECT id_user, username, 'password', profil, email, birthday FROM user WHERE id_user = '$id'";
        $result = mysqli_query($connect, $query);
        $cek = mysqli_num_rows($result);
        session_start();
        $profil = mysqli_fetch_assoc($result);
        $_SESSION['profil'] = $profil['profil'];

        session_start();
            $_SESSION['id'] = $profil['id_user']; // id
            $_SESSION['username'] = $profil['username']; // username
            $_SESSION['email'] = $profil['email']; // email
            $_SESSION['password'] = $profil['passwordlogin']; // pass
            $_SESSION['birthday'] = $profil['birthday']; // tgllahir
        header("Location:profil.php");
    }
?>