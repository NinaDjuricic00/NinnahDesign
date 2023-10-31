<?php

include("config.php");
session_start();	
		
		
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$lozinka = mysqli_real_escape_string($conn, $_POST['lozinka']);
			
	            $sql = "select count(korisnikID) from nina2_korisnici where email = '$email' and lozinka = '$lozinka'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			//	$active = $row['active'];
				
				$count = mysqli_num_rows($result);
				
				if($count == 1){
				//	session_register("email");
					$_SESSION['login_user'] = $email;
					header("location: ../odlogujse/ninnahdesigno.php");
				}
        }	

?>



<html lang="en">
<head>
  <title>Izdavanje svečanih odela</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E">
  <link rel="stylesheet" href="../css/registracija.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  
</head>
<body>

    <!--HEADER, NAVBAR-->

    <div class="banner">
    <h1 class="kontakt">Uloguj se</h1>
        <div class="topnav" id="myTopnav">
            <a href="../index.php" class="active"><img src="../img/logoo.png" alt="Logo" class="logo"></a>
              <a href="../index.php" class="navbar">Početna</a>
              <a href="../view/ponuda.php" class="navbar">Ponuda</a>
              <a href="../view/kontakt.php" class="navbar">Kontakt</a>
              <a href="#" class="navbar" onclick="document.getElementById('loginModal').style.display='block'" style="width:auto; ">Login</a>
              <a href="registracija.php" class="navbar" onclick="document.getElementById('registerModal').style.display='block'" style="width:auto;">Registracija</a>

              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars fa-2x"></i>
            </a>
        </div>
    </div>



 <br><br><br><br><br> 
<!-- Container (Contact Section) -->
<div class="kontakt-naslov">
      <h4>Uloguj se!</h4>
  </div>

  <div class="kontakt-forma">
      <form id="kontakt-forma" method="post" action="login.php">
        <input type="text" id="email" name="email" class="unos" placeholder="Email" required>
          <br>
          <input  type="password" id="lozinka" name="lozinka" class="unos" placeholder="Lozinka" required>
          <br>
            <input type="submit" class="unos potvrdi" value="Uloguj se">
      </form>
      <p class="text-center">Ukoliko nemate nalog kliknite<a href="registracija.php"><em> ovde</em></a></p>
  </div>
    <br><br><br><br><br><br><br><br><br>   



<!-- Footer -->
<div class="container-xxl" id="fot">
        <footer>
          <div class="container p-4 pb-0">
            <section class="">
              <div class="row">
                <div class="col-md-10 col-lg-2 col-xl-2 mx-auto mt-3" id="slika">
                    <img src="../img/logoo.png" alt="Logo" width="150">
                </div>
      
                <hr class="w-100 clearfix d-lg-none" />
      
                <!-- RADNO VREME -->

                <div class="col-md-10 col-lg-2 col-xl-2 mx-auto mt-3" id="radno-vreme">
                  <h6 class="text-uppercase mb-lg-4 font-weight-bold">Radno vreme</h6>   
                  <p>
                    <a class="text-white">Ponedeljak - petak 8h-18h</a>

                  </p>
                  <p>
                    <a class="text-white">Subota 8h-14h</a>
                  </p>
                  <p>
                    <a class="text-white">Nedelja neradna</a>
                  </p>
                </div>

                <hr class="w-100 clearfix d-lg-none" />
                <hr class="w-100 clearfix d-lg-none" />
      
                <!-- KONTAKT -->
                
                <div class="col-md-10 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Kontakt</h6>
                  <p><i class="fas fa-envelope mr-3"></i> info@ninnah.rs</p>
                  <p><i class="fa fa-mobile" ></i> 069 / 32 - 82 - 358</p>
                  <p><i class="fa fa-phone"></i> 011 / 12 - 95 -1 83</p>
                </div>

                <hr class="w-100 clearfix d-lg-none" />

                <!--ZAPRATITE NAS-->

                <div class="col-md-10 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Zapratite nas</h6>
                    <div class="soc-links">
                      <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
                      <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
              </div>
            </section>
          </div>
          <div
               class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">© 2022 Copyright:<a class="text-white" href="../../../index.html">NinnahDesign.rs</a>
          </div>
        </footer>
      </div>

    <!--JS ZA NAVBAR RESPONZIVNOST-->

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
              x.className += " responsive";
            } else {
              x.className = "topnav";
            }
        }
    </script>






</body>
</html>


