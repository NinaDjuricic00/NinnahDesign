
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Izdavanje svečanih odela</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E">
  <link rel="stylesheet" href="../css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <style>
   .logout{
       margin-top:80px;
       margin-bottom:300px;
   }

  </style>
</head>




<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="banner">

        <div class="topnav" id="myTopnav">
            <a href="../index.php" class="active"><img src="../img/logoo.png" alt="Logo" class="logo"></a>
              <a href="../index.php" class="navbar">Početna</a>
              <a href="../view/ponuda.php" class="navbar">Ponuda</a>
              <a href="../view/kontakt.php" class="navbar">Kontakt</a>
              <a href="../login/login.php" class="navbar" onclick="document.getElementById('loginModal').style.display='block'" style="width:auto; ">Login</a>
              <a href="#" class="navbar" onclick="document.getElementById('registerModal').style.display='block'" style="width:auto;">Registracija</a>

              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars fa-2x"></i>
            </a>
        </div>
    </div>

<div class="logout">
    <h1 style="text-align:center"> <?php echo "Korisnik vec postoji"; ?></h1> 
    <p class="text-center">Pokusajte ponovo, kliknite<a href="register.php"><em> ovde</em></a></p>
</div>      
  
<!--FOOTER-->

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
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>   
                    </div>
                </div>
              </div>
            </section>
          </div>
          <div
               class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">© 2022 Copyright:<a class="text-white"              href="../index.php">NinnahDesign.rs</a>
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


