<?php
    include "koneksi.php";

    $username = $_POST['usernamelogin'];
    $password = md5($_POST['passwordlogin']);

    $query = "SELECT id_user, username, 'password', profil, email, birthday FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $cek = mysqli_num_rows($result);
    session_start();
    $profil = mysqli_fetch_assoc($result);
    $_SESSION['profil'] = $profil['profil'];

    session_start();
        $_SESSION['id'] = $profil['id_user']; // id
        $_SESSION['username'] = $profil['username']; // username
        $_SESSION['email'] = $profil['email']; // email
        $_SESSION['password'] = $_POST['password'];// pass
        $_SESSION['birthday'] = $profil['birthday']; // tgllahir

    if ($cek) {
        header("Location:loginRegis.php?error=user_login");
        ?>
    <?php    
    } else {
        header("Location:loginRegis.php?error=logingagal");
        ?>
    <?php
        echo mysqli_error($connect);
    }    
?>