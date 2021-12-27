<?php 
    session_start();
?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="styleCSS/styleProfil.css">
        </head>
    </html>
    <body>
        <div class="container">
            <div class="main">
                <div class="topbar">
                    <a href="sessionLogout.php">Logout</a>
                    <a href="homeLogin.php">Home</a>
                </div>  
            <div class="row">
                <form action="prosesEdit.php" method="POST" enctype="multipart/form-data">
                    <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3" style="text-align: center;">MY PROFIL</h1>
                        <div class="card-body">
                            <div class="row"style="justify-content: left;">
                                <div class="card-body">
                                <?php 
                                    $src = $_SESSION['profil'];
                                ?>
                                    <img src="<?php echo $src?>" class="rounded-circle" width="180" height="180">
                                    <input type="file" name="file" placeholder="profil" value = "<?php echo $src?>">
                                </div>
                                <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Username</h5>
                        </div>
                    <input type="text" name="id_user" value="<?php echo $_SESSION['id']?>" style="display:none;">
                    <div class="col-md-9 text-secondary">
                        <input type="text" value ="<?php echo $_SESSION['username']?>" name="username" placeholder="Username">
                    </div>
                    </div>
                    <hr>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Email</h5>
                        </div>
                    
                    <div class="col-md-9 text-secondary">
                        <input type="text" value ="<?php echo $_SESSION['email']?>" name="email" placeholder="Email">
                    </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h5>Password</h5>
                        </div>
                    
                    <div class="col-md-9 text-secondary">
                        <input type="password" value ="<?php echo $_SESSION['password']?>" name="password">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h5>Birthday</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        <input type="date" value ="<?php echo $_SESSION['birthday'] ?>" name="birthday" placeholder="Birthday">
                    </div>
                </div>
                <br>
            <div class="text-right mt-3 gap-3"> 
                <input type="submit" class = "btn btn-primary" value="save">
            <div class="mt-3">
            </form>
        </div>
    </body>
</html>