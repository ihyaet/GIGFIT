<!DOCTYPE html>
<html>
<head>
	<title>Post Selesai</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: Roboto;
		}
		.jumbotron{
			height: 100vh;
			background-image:url(<?php echo base_url(); ?>assets/IMG/6.jpg);
			background-size: cover;
			border-radius: 0px;
			margin-bottom: 0px;
		}
		.col{
			padding-top: 200px;
			color: white;

		}
		p{
			font-size: 30px;
		}
		.btn{
			border-radius: 40px;
		}
		.btn-primary{
			background-color: #f9ca24;
			border-color: #f9ca24;
		}
		.btn-primary:hover{
			background-color: #f0932b;
			border-color: #f0932b;
		}
		.nav-link{
			color: white;
		}
		.nav-link:hover{
			color: grey;
		}
		.navbar-brand{
			font-weight: bold;
		}
	</style>
</head>
<body>


<div class="jumbotron">
	<div class="container">
		<div class="row text-center">
			<div class="col">
				<h1>Terima Kasih</h1>
				<p>Laporan Anda Akan Segera Diproses</p>
				<a href="<?php echo base_url().'profil'?>"class="nav-link"">	
				<button class="btn btn-primary">Selesai</button></a>
			</div>
		</div>
	</div>
</div>




<script
	  	src="https://code.jquery.com/jquery-3.3.1.min.js"
	 	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  	crossorigin="anonymous">
	</script>
	<script 
		src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>
	<script 
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
	</script>
	<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
	<script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</body>
</html>