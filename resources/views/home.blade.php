
<?php
$url = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($url,true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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
    <!--Font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <title>Whitezone</title>
    
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
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Beranda<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('activity') }}">Kebiasaan</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('tips') }}">Tips</a>
            </li>

          </ul>
          <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
          
          <img class="ml-2" src="img/user.svg" class="login">
        </div>
      </nav>

      <div class="container">
          <div class="container-fluid col-md-12 text-center">

         <!--Status-->
      <div class="row mt-4">
        <div class="col-md-3">
          <div class="card badge-danger p-3 md-5 shadow">
            <div class="card-body">
              <h4 class="card-title">
                <i class="fas fa-frown-open    "></i> Positif
              </h4>
              <p class="card-text"><?= $data[0]['positif'] ?></p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card badge-warning p-3 md-5 shadow">
            <div class="card-body">
              <h4 class="card-title">
                <i class="far fa-meh    "> </i> Dirawat
              </h4>
              <p class="card-text"><?= $data[0]['dirawat'] ?></p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card badge-primary p-3 md-5 shadow ">
            <div class="card-body">
              <h4 class="card-title">
                <i class="fas fa-smile    "></i> Sembuh
              </h4>
              <p class="card-text"><?= $data[0]['sembuh'] ?></p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card badge-dark p-3 md-5 shadow">
            <div class="card-body">
              <h4 class="card-title">
                <i class="fas fa-sad-tear    "></i> Meninggal
              </h4>
              <p class="card-text"><?= $data[0]['meninggal'] ?></p>
            </div>
          </div>
        </div>
      </div>

      <!--Profile-->
     
      <div class="card text-left mt-5 col-md-5 mx-auto shadow">
        <img class="mx-auto shadow rounded-circle mt-1" src="img/user.svg" alt="account" width="250" height="250">
        <div class="card-body">
          <h4 class="card-title">Nama</h4>
          <p class="card-text"><i class="fas fa-map-marker-alt    "></i></i> Lokasi</p>
         
        </div>
        <button type="button" href="https://www.google.com/maps/@2.0125999,98.9797639,17z" class="btn btn-primary mx-auto mb-3 shadow "><i class="fas fa-compass    "></i> Cek Lokasi</button>
      
      </div>

        <div class="card mt-5 col-md-5 mx-auto shadow m-4">
        <iframe class="shadow mx-auto mt-2 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.3571135965844!2d98.97976391460688!3d2.0125998985328026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e6e457b98659d%3A0x9e2c0c610a0d0ab2!2sHKBP%20Hutagalung%20Harean!5e0!3m2!1sid!2sid!4v1606802071512!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>


            

         </div>
    </div>

    <!-- Footer -->
<footer class="page-footer font-small bg-secondary text-light position-sticky">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> Whitezone</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>