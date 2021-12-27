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
                    <a href="Editprofil.php">Edit Profil</a>
                    <a href="homeLogin.php">Home</a>
            
            </div>  
            <div class="row">
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3" style="text-align: center;">MY PROFIL</h1>
                        <div class="card-body">
                            <div class="row"style="justify-content: center;">
                                <div class="card-body">
                                <?php 
                                    $src = $_SESSION['profil'];
                                ?>
                                    <img src="<?php echo $src?>" class="rounded-circle" width="180" height="180"> 
                                    <div class="mt-3">
                                <div class="card-body">

                            <p></p>
                        <div class="row">
                            <div class="col-md-3">
                            <h5>Username</h5>
                        </div>
                    
                    <div class="col-md-9 text-secondary">
                    <?php echo $_SESSION['username']; ?>
                    </div>
                    </div>
                    <hr>
                    
                    <div class="row">
                        <div class="col-md-3">
                        <h5>Email</h5>
                    </div>
                    
                    <div class="col-md-9 text-secondary">
                    <?php echo $_SESSION['email']; ?>
                    </div>
                    </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h5>Birthday</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                    <?php echo $_SESSION['birthday']; ?>
                    </div>
                    
                </div>
            </div>
        </div>
            </div>
            </div>
        </div>
    </body>
</html>