<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: Roboto;
		}
		.bg-primary{
			background-image: url(<?php echo base_url(); ?>assets/IMG/3.jpg);
			background-size: cover;
			background-attachment: fixed;
			background-position: 0 -100px;
			height: 100vh;
			padding-top: 20px;
			margin-bottom: 0px;
			padding-bottom: 0px;
		}
		.row{
			color: white;
			margin-top: 60px;
		}
		#email, #password, #nama, #no_telp, #id_user{
			background-color: transparent;
			border-top-width: 0px;
			border-left-width: 0px;
			border-right-width: 0px;
			color: white;
			font-size: 18px;
			width: 400px;
			border-radius: 0px;
		}
		.btn-primary{
			background-color: #f9ca24;
			border-color: #f9ca24;
		}
		.btn-primary:hover{
			background-color: #f0932b;
			border-color: #f0932b;
		}
		.btn{
			border-radius: 40px;
		}
		
	</style>
</head>
<body>

<section class="bg-primary" id="lapor">
	<div class="container">
		<div class="row text-center">
			<div class="col">
				<form action="<?php echo base_url(). 'daftar/signup'; ?>" method="post">
				<h1>Daftar</h1>
				<br>
				<br>
				<input type="text" name="nama" id="nama" value="" placeholder="nama">
				<br>
				<br>
				<br>
				<input type="tel" name="no_telp" id="no_telp" value="" placeholder="no telp/hp">
				<br>
				<br>
				<br>
				<input type="email" name="email" id="email" value="" placeholder="email">
				<br>
				<br>
				<br>
				<input type="password" name="password" id="password" value="" placeholder="password">
				<br>
				<br>
				<br>
				<a href="<?php echo base_url().'daftar/signup'?>">
				<button class="btn btn-lg btn-primary">Daftar</button>
			</form>	
			</div>
		</div>
	</div>
</section>

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