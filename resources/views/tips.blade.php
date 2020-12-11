<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Tips</title>

     <!-- Latest compiled and minified CSS -->
     <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">
            <img class="img-logo" src="img/logo2.png" alt="#">
            Whitezone
        </a>
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Beranda</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('activity') }}">Kebiasaan</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="{{ route('tips') }}">Tips<span class="sr-only">(current)</span></a>
            </li>

          </ul>
          <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
          
          <img class="ml-2" src="img/user.svg" class="login">
        </div>
      </nav>

      <div class="container">
          <div class="container-fluid col-md-9 text-center">
              <img class="img" src = "img/who.png"><br><br>
          </div>
          
       <!--Corousell-->
    <div class="card mx-auto col-md-8 p-5 m-4">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h3>Jaga tangan Anda tetap bersih</h3><br><br>
  
            <p>Cuci tangan anda secara teratur setidaknya 40 detik dengan sabun dan air hangat atau gunakan antiseptik berbasis alkohol. Ini membantu membunuh kuman yang mungkin ada ditangan anda.</p>
            
          </div>
          <div class="carousel-item">
            <h3>Hindari menyentuh mata, hidung, dan mulut Anda.</h3><br><br>
  
            <p>Tangan menyentuh banyak permukaan dan bisa terkena virus. Setelah terkontaminasi, tangan dapat memindahkan virus ke mata, hidung, atau mulut Anda. Dari sana, virus bisa masuk ke tubuh Anda dan menginfeksi Anda.</p>

          </div>
          <div class="carousel-item">
            <h3>Tutupi mulut dan hidung Anda dengan siku atau tisu yang tertekuk saat batuk atau bersin.</h3><br><br>
  
            <p>Kemudian segera buang tisu bekas ke tempat sampah tertutup dan cuci tangan Anda. Dengan mengikuti 'kebersihan pernapasan' yang baik, Anda melindungi orang-orang di sekitar Anda dari virus yang menyebabkan pilek, flu, dan COVID-19.</p>
          </div>

          <div class="carousel-item">
            <h3>Bersihkan dan disinfeksi permukaan lingkungan.</h3><br><br>
  
            <p>Bersihkan dan disinfeksi permukaan secara berkala terutama yang sering disentuh, seperti gagang pintu, keran, dan layar ponsel.
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


    </div>


    <!-- Footer -->
<footer class="page-footer font-small bg-secondary text-light">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> Whitezone</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>