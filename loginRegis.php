<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registrasi</title>
    <link rel="stylesheet" type="text/css" href="styleCSS/styleLogin.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
   <div class="wrapper">
      <div class="title-text">
            <div class="title login">
                Login Form
            </div>
            <div class="title signup">
                Sign Up Form
            </div>
      </div>
      <div class="form-container">
         <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Sign Up</label>
            <div class="slider-tab"></div>
         </div>
         <div class="form-inner">
            <form action="loginProses.php" class="login" method="post">
               <div class="field">
                    <input type="text" name="usernamelogin" placeholder="Username or Email" required>
               </div>
               <div class="field">
                    <input type="password"  name="passwordlogin" placeholder="Password" required>
               </div>
               <!-- <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div> -->
               <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" id='login' value="Login">
               </div>
               <div class="signup-link">
                    Not a member? <a href="">Sign Up now</a>
               </div>
            </form>
            <form enctype="multipart/form-data" method="POST" action="insertProses.php" class="signup">
               <div class="field">
                    <input type="text" name="username" placeholder="Username" required>
               </div>
               <div class="field">
                    <input type="text" name="email" placeholder="Email" required>
               </div>
               <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
               </div>
               <div class="field">
                    <input type="date" name="birthday" placeholder="Birthday" required>
               </div>
               <div class="field">
                    <input type="file" name="profil" placeholder="profil" required>
               </div>
               <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" id="register" value="Sign Up">
               </div>
            </form>
         </div>
      </div>
   </div>
</script>
   <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (()=> {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (()=> {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (()=> {
            signupBtn.click();
            return false;
        });
    </script>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    } else {
        $error = "";
    }
    if($error == "user_registered") {
    ?>
        <script>
            swal( {
                icon: "error",
                text: "Username sudah ada!",
            }).then(function() {
                window.location.href = "loginRegis.php";
            });
        </script>
    <?php
    } else if ($error=="user_success") {
    ?>
        <script>
            swal( {
                icon: "success",
                text: "Akun berhasil dibuat!",
            }).then(function() {
                window.location.href = "loginRegis.php";
            });
        </script>
    <?php
    } else if ($error == "user_login") {
    ?>
        <script>
            swal( {
                icon: "success",
                text: "Login Berhasil!",
            }).then(function() {
                window.location.href = "HomeLogin.php";
            });
        </script>
    <?php
    } else if ($error == "logingagal") {
    ?>
        <script>
            swal( {
                icon: "error",
                text: "Login Gagal!",
            }).then(function() {
                window.location.href = "loginRegis.php";
            });
        </script>
    <?php
    }
    ?>
</body>
</html>