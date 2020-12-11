<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <title>Kebiasaan</title>
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

            <li class="nav-item active">
              <a class="nav-link" href="{{ route('activity') }}">Kebiasaan<span class="sr-only">(current)</span></a>
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
        <div class="row justify-content-center">
          <div class="card col-md-12"><br><br>
            <div class="card-header">Aktivitas
              <a href="tambah" class="btn btn-success btn-sm btn-flat pull-right"> + Tambah</a>
            </div>

            <div class="card-body">
              <table id="tbl_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
              <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Aktivitas</th>
                  <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                @foreach($aktivitas as $a)
                <tr>
                  <td>{{ $a->No }}</td>
                  <td>{{ $a->tanggal }}</td>
                  <td>{{ $a->aktivitas }}</td>
                  <td>
                      <a href="edit/{{ $a->No }}" class="btn btn-sm btn-primary">Edit</a>
				              <a href="hapus/{{ $a->No }}" class="btn btn-sm btn-danger">Hapus</a>
                      @csrf 
                      @method('DELETE')
                  </td>
              </tr>
              @endforeach
              </table>
            </div>
          </div>
        </div>
</div>

        <!-- Footer -->
<footer class="page-footer font-small bg-secondary text-light sticky-position fixed-bottom">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> Whitezone</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>