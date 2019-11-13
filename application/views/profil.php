	<!DOCTYPE html>
	<html>
	<head>	
		<title>Profil</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

		<style type="text/css">
			body{
				font-family: Roboto;
			}
			.jumbotron{
				background-image:url(<?php echo base_url(); ?>assets/IMG/profil.png);
				background-size: cover;
				background-position: 0 -100px;
				border-radius: 0px;
				margin-bottom: 0px;
				background-attachment: fixed;
			}
			.col{
				padding-top:70px;
				color: white;
			}
			h1{
				font-weight: bold;
				color: white;
			}
			.jumbotron img{
				border: 5px solid white;
			}
			.bg-primary{
				height: 80vh;
			}
			.navbar-brand{
				font-weight: bold;
			}
			.bg-primary{
				background-image::url(<?php echo base_url(); ?>assets/IMG/lapor.jpg);
				background-size: cover;
				background-attachment: fixed;
			}
			.ask{
				padding-top: 10px
				color: white;
				font-size: 40px;
			}
			.btn{
				border-radius: 40px;
			}
			.footer-copyright{
				background-color: #74483d;
				color: white;
			}
			.card{
				border-width: 0px
				min-width: 400px;
			}
			.form-control{
				width: 400px;
			}
			#judul, #alamat, #desk, #tgl, #upfil{
				padding-bottom: 5px;
				width: 350px;
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
				.jumbotron{
					margin-top: -76px;
				}
				.btn{
					border-radius: 40px;
				}
				.card{
					width: 50rem;
				}
				.card:hover{
					transition: 0.3s;
					box-shadow: 2px 2px 2px 2px #bdc3c7;
				}
				#judul, #alamat, #desk, #tgl, #upfil{
					width: 400px;
				}
			}

		</style>
	</head>
	<body>

	<?php $this->load->view('navbar');?>

	<div class="jumbotron text-center">
			<div class="row">		
				<div class="col">
					<img src="https://image.flaticon.com/icons/svg/149/149071.svg" class="rounded-circle" style="height: 200px; width: 200px;">
					<br>
					<br>
					<h1><?php echo $this->session->userdata('ses_nama') ;?></h1>
					<p><?php echo $this->session->userdata('ses_email') ;?> | <?php echo $this->session->userdata('ses_no_hp') ;?></p>
				</div>
			</div>	
	</div>

	<section style="background-color: #efefef;">


		<div class="container">
			<div class="row pt-4 pb-3 justify-content-center">
					<a href="<?php echo base_url().'post'?>"><button class="btn btn-danger text-center">Buat Laporan</button></a>
			</div>
			<?php $namap =$this->session->userdata('ses_nama');
			foreach (array_reverse($laporan) as $lap) {
			if ($lap->pelapor ==  $namap) {
				?>
			<div class="row pt-1 pb-3 justify-content-center">
					<div class="card mb-1" style="min-width: 400px;">
						  <div class="card-header text-center" style="background-color: #396e6f; color: white;">
						   <b> <?php echo $lap->judul ?></b>
						  </div>
						  <ul class="list-group list-group-flush">
						  	<li class="list-group-item text-muted"><?php echo $lap->tanggal?></li>
						     <li class="list-group-item"><p class="card-text"><?php echo $lap-> deskripsi ?></p></li>
						     <li class="list-group-item text-left">
						     	Status: 
						     	<?php if ($lap->status=="") { ?>
									<font style="color: grey;"><?php echo "Diproses"?></font>
								<?php } else { ?>
								    <?php if ($lap->status=="Diterima") { ?>
										<font color="green"><?php echo $lap->status?></font>
									<?php } else {?>
										<font color="red"><?php echo $lap->status?></font>
									<?php } ?>
								<?php } ?>
						     </li>
						    <li class="list-group-item text-right">
						    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buka<?=$lap->id_laporan;?>">Buka</button>
						    	<?php if ($lap->status=="") {?>
						    		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit<?=$lap->id_laporan;?>">Edit</button>
						    	<a href="<?php echo base_url(). 'profil/hapus/'.$lap->id_laporan; ?>" class="btn btn-danger" onclick="return confirm('Apa anda yakin?')">Hapus</a>
						    	<?php } ?>
						    	
						    </li>
						  </ul>
					</div>	
			</div>
		<?php }} ?>
		</div>

	</section>

	<footer >
		<div class="footer-copyright text-center py-3">© 2018 GIGFIT</div>
	</footer>


	<!-- modal_edit -->

	<?php $namap =$this->session->userdata('ses_nama');
			foreach ($laporan as $lap) {
			if ($lap->pelapor ==  $namap) {
		
			?>
			
	<div class="modal fade " id="edit<?=$lap->id_laporan;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header" style="background-color: #396e6f; color: white;">
	        <h5 class="modal-title" id="exampleModalLabel"><font style="color: white;">Edit Laporan</font></h5>
	        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>-->
	        </button>
	      </div>
	      <div class="modal-body ml-4">
	      	<div class="row text-left" style="" style="margin-top: -50px;">

	      		<form method="post" action="<?php echo base_url(). 'profil/update'; ?>">
	      			<p>
					<input type="text" id="judul"  name="judul" placeholder="Judul" class="form-control" 
					value="<?php echo $lap->judul?>">

				</p>
				<p>
					<input type="hidden" id="id_laporan"  name="id_laporan" placeholder="" class="form-control" 
					value="<?php echo $lap->id_laporan?>" >
				</p>
				<p>
					<input type="date" name="tanggal" class="form-control" id="tgl" value="<?php echo $lap->tanggal?>">	
				</p>
				<p>
					<textarea class="form-control" id="desk" style="height: 200px;" name="deskripsi" placeholder="Tuliskan disini..." ><?php echo $lap-> deskripsi ?></textarea>
				</p>
				<p>	
					<input type="text" id="alamat" name="alamat" placeholder="Alamat kejadian kerusakan" class="form-control" value="<?php echo $lap-> alamat?>" >
				</p>
				<img  id="gambar" class="picture" src="<?php $lap->media ?>">
				<p>
	    			<div class="file-field" style="margin-top: -40px;">
	        			<div class="btn btn-primary btn-sm float-left"> 
	            			<input name="media" type="file">
	        			</div>
	    			</div>
				</p>
		</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
	      	</form>
	    </div>
	  </div>
	</div>
		<?php }} ?>

	<!-- modal_buka-->
	<?php $namap =$this->session->userdata('ses_nama');
			foreach ($laporan as $lap) {
			if ($lap->pelapor ==  $namap) {
			
			?>
			
	<div class="modal fade" id="buka<?=$lap->id_laporan;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header" style="background-color: #396e6f; color: white;">
	        <h5 class="modal-title" id="exampleModalLabel"><font style="color: white;"><?php echo $lap->judul?></font></h5>
	        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>-->
	        </button>
	      </div>
	      <div class="modal-body ml-4">

	      	<div class="row" style="" style="margin-top: -50px;">
	      		<ul class="list-group list-group-flush">
					<li class="list-group-item text-muted"><b>Tanggal:</b> <?php echo $lap->tanggal?></li>
				     <li class="list-group-item"><p class="card-text"><label><b>Deskripsi</b></label> <br><?php echo $lap-> deskripsi ?></p></li>
				     <li class="list-group-item text-left"><b>Alamat:</b> <?php echo $lap->alamat?></li>
				     <p><img src="<?php echo $lap->media ?>" class="rounded float-left" alt="..."></p>
				    <li class="list-group-item text-left"><b>Status:</b> <?php echo $lap->status?></li>
			  </ul>
		</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
	      </div>
	      	</form>
	    </div>
	  </div>
	</div>
		<?php }} ?>



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