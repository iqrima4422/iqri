<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Account</title>
	<link rel="stylesheet" href="styleCSS/styleDrop.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="jquery-3.6.0.js"></script>
    <script>
        var i = 0;
        $(document).ready(function() {
            $('.slidertitle, #slider img').hide();
            showNextImage();
            setInterval('showNextImage()', 3000);
        });

        function showNextImage() {
            i++;
            $('#sliderImage' + i).appendTo('#slider').fadeIn(400).delay(2000).fadeOut(400);
            if(i == 3) {
                i = 0;
            }
        }
    </script>
</head>
<body>
<div class="wrapper">
	<div class="navbar">
		<div class="logo">
			<a href="#">ADIZ SCIENTIFIC CALCULATOR</a>
		</div>
		<div class="nav_right">
			<ul>
				<li class="nr_li dd_main">
					<?php 
						$src = $_SESSION['profil'];
					?>
					<img src="<?php echo $src?>" alt="profile_img">
					<div class="dd_menu">
						<div class="dd_left">
							<ul>
								<li><i class="fa fa-user"></i></li>
								<li><i class="far fa-edit"></i></li>
								<li><i class="fas fa-sign-out-alt"></i></li>
							</ul>
						</div>
						<div class="dd_right">
							<ul>
								<li><a href="profil.php">Profile</a></li>
								<li><a href="editProfil.php">Edit</a></li>
								<li><a href="sessionLogout.php">Logout</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="content">
	<section class="profil">
		<div id="slider">
		    <img id="sliderImage1" src="img/calculator1.png">
			<img id="sliderImage2" src="img/calculator2.png">
			<img id="sliderImage3" src="img/calculator3.png">
		</div>
		<div class="profil-content">
			<h1>What Is a Scientific Calculator?</h1><br>
			<h4>Scientific calculator is a calculator designed to help you calculate science, 
				engineering, and mathematics problems. It has way more buttons than your standard calculator 
				that just lets you do your four basic arithmetic operations of addition, subtraction, multiplication, 
				and division.
            </h4><br>
            <a href="kalkulator.php" class="action-btn">Calculator</a>
		</div>
	</section>
</div>
<script>
	var dd_main = document.querySelector(".dd_main");

	dd_main.addEventListener("click", function(){
		this.classList.toggle("active");
	})
</script>
</body>
</html>