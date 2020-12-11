<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

	<title>Tambah Aktivitas</title>
</head>
<body>

	<div class="row justify-content-center">
		<div class="card col-md-12">
			<div class="card-header">Aktivitas</div>

			<div class="card-body">
				<form action="store" method="post">
					{{ csrf_field() }}

				<div class="modal-body">
				<div class="form-group"><label class="col-lg-3 control-label">Aktivitas</label>
					<div class="col-lg-12">
						<input type="text" name="aktivitas" placeholder="Aktivitas" class="form-control">
					</div>	
				</div>

				<div class="form-group"><label class="col-lg-3 control-label">Tanggal</label>
					<div class="col-lg-12">
						<input type="text" name="tanggal" id="date" placeholder="Tanggal" class="form-control">
					</div>
				</div>
				</div>

				<div class="modal-footer">
					<a href="{{ route('activity') }}" class="btn btn-danger" data-dismiss="modal">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('#date').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
			});
		});
	</script>
</body>
</html>