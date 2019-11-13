<!DOCTYPE html>
<html>
<head>
	<title>Buat Post</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: Roboto;
		}
		.col{
			padding-top: 300px;
			color: white;
		}
		h1{
			color: white;
		}
		.bg-primary{
			background-image:url(<?php echo base_url(); ?>assets/IMG/6.jpg);
			background-size: cover;
			padding-top: 90px;
			margin-bottom: 0px;
			padding-bottom: 0px;
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
		.navbar-brand{
			font-weight: bold;
		}
		#judul, #alamat, #desk, #tgl, #upfil, #desk-lap, #pelapor{
			background-color: transparent;
			border-top-width: 0px;
			border-left-width: 0px;
			border-right-width: 0px;
			color: white;
			font-size: 18px;
			width: 400px;
			border-radius: 0px;
		}
		#judul placeholder{
			background-color: white;
		}
		#pelapor{
			border-bottom-width: 0px;
		}
		input::placeholder{
			color: white;
			opacity: 0.9;
		}
		textarea desk{
			background-color: transparent;
			background-color: white;
		}
		.row{
			margin-top: 30px;
		}
		@media (min-width: 992px){
			.nav-link{
				text-transform: uppercase;
				margin-right: 20px;
				color: #a5a5a5 !important;
			}
			.nav-link:hover{
				color: #396e6f !important;
			}
			.bg-primary{
				margin-top: -76px;
				height: 100vh;
			}
			.btn{
			border-radius: 40px;
			}
			#pelapor{
				border-bottom-width: 0px;
			}
		}

	</style>
</head>
<body>
<?php $this->load->view('navbar');?>
<section class="bg-primary">
	<div class="container">
		<div class="row justify-content-center" style="padding-top: -50px;">
			<h1>Buat Laporan</h1>
		</div>
		<form action="<?php echo base_url(). 'laporan/input'; ?>" method="post">
		<div class="row text-left">
			<div class="col-lg-6">
					<input type="hidden" id="pelapor" name="pelapor" class="form-control" readonly value="<?php echo $this->session->userdata('ses_nama');?>">
			</div>
		</div>
		<div class="row text-left" style="" style="margin-top: -50px;">
			<div class="col-lg-6">
					<label id="judul">Judul</label>
					<input type="text" id="judul"  name="judul" placeholder="Judul" class="form-control"><br/>
					<br>
			</div>
			<div class="col-lg-6">
				<label id="tgl">Tanggal</label>
				<input type="date" name="tanggal" class="form-control" id="tgl">
				<br>
			</div>
			<div class="col-lg-6">
					<label id="desk-lap">Deskripsi</label>
					<textarea class="form-control" id="desk" name="deskripsi" placeholder="Tuliskan disini..."></textarea>
					<br>			
			</div>
			<div class="col-lg-6">
					<label id="alamat">Alamat</label>
					<input type="text" id="alamat" name="alamat" placeholder="Alamat kejadian kerusakan" class="form-control">
					<br>
			</div>
			<div class="col-lg-6">
				<label id="upfil">Unggah Berkas</label>
    			<div class="file-field">
        			<div class="btn btn-primary btn-sm float-left"> 
            			<input name="media" type="file">
        			</div>
    			</div>
    			<br>
			</div>
			<div class="col-lg-6" padding="20px">
				<br>
				<button class="btn btn-primary mb-4" type="submit">Kirim</button>
			</div>	
	</div>
</form>
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