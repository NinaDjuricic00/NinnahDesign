<html lang="en">
<head>
  <title>Iznajmljivanje svečanih odela</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

    <!--HEADER, NAVBAR-->

    <div class="banner">
        <video id="videopozadina" autoplay muted loop>
          <source src="./img/pocetnivideo.mp4" type="video/mp4">
        </video>
        <h1 class="leto"></h1>
        <div class="topnav" id="myTopnav">
            <a href="#" class="active"><img src="./img/logoo.png" alt="Logo" class="logo" width="350"></a>
              <a href="#" class="navbar">Početna</a>
              <a href="view/ponuda.php" class="navbar">Ponuda</a>
              <a href="view/kontakt.php" class="navbar">Kontakt</a>
              <a href="login/login.php" class="navbar" onclick="document.getElementById('loginModal').style.display='block'" style="width:auto; ">Login</a>
              <a href="login/registracija.php" class="navbar" onclick="document.getElementById('registerModal').style.display='block'" style="width:auto;">Registracija</a>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars fa-2x"></i>
            </a>
        </div>
    </div>

   
    <!--INFORMACIJE-->
    <div class="text" id="text">
      <p>Kada dodje vreme da treba da kupite odelo imate mnogo mogućnosti i razlicitih stilova. Može biti teško pronaći savrseno odelo. Ključno je znati            šta je najbolje za vašu građu ( slim fit odelo, odelo za punije ili  krupnije) odgovarajuće odelo ce učiniti  da se osećate lepo i samouvereno.           Ako pronađete model odela koji odgovara vašoj figuri osiguraćete da izledate odlicno bilo da Vam je potrebno odelo za poslovni sastanak ili                   venčanje.</p>
        
        <h3>Ninnah Design stranica za pronalaženje idealnog svečanog odela!</h3>

        <div class="videobudva">
            <video src="./img/video.mp4" autoplay muted loop></video>
        </div>
        <p>Oslobodite se mučnog traženja odela i iz udobnosti Vašeg doma, sa našeg sajta, iznajmite kvalitetnu haljinu, po niskim cenama. Dostupnost modela možete proveriti <a href="view/ponuda.php">OVDE</a> . </p>

        
        



</div>
    <!--FOOTER-->

      <div class="container-xxl" id="fot">
        <footer>
          <div class="container p-4 pb-0">
            <section class="">
              <div class="row">
                <div class="col-md-10 col-lg-2 col-xl-2 mx-auto mt-3" id="slika">
                    <img src="./img/logoo.png" alt="Logo" width="150">
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
