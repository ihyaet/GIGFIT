<!DOCTYPE html>
<html>
<head>	
	<title>BPDB</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

	<style type="text/css">
	body{
		font-family: Roboto;
	}
	.jumbotron{
		background-image: url(<?php echo base_url(); ?>assets/IMG/admin.jpg);
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
	.jumbotron img{
		border: 5px solid white;
	}
	h1{
		font-weight: bold;
		color: white;
	}
	.bg-primary{
		height: 80vh;
	}
	.navbar-brand{
		font-weight: bold;
	}
	.btn{
		border-radius: 40px;
	}
	.bg-primary{
		background-image:url(<?php echo base_url(); ?>assets/IMG/lapor.jpg);
		background-size: cover;
		background-attachment: fixed;
	}
	.ask{
		padding-top: 10px
		color: white;
		font-size: 40px;
	}
	.footer-copyright{
		background-color: #74483d;
		color: white;
	}
	.card{
		box-shadow: 1px 1px 1px 1px #bdc3c7;
		border-width: 0px;
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
			margin-top: -76px
		}
		.card{
			width: 50rem;
		}
		.btn{
			border-radius: 40px;
		}
		thead{
			background-color: #396e6f;
			color: white;
		}
		.modal-body {
			position: relative;
			overflow-y: auto;
			max-height: 400px;
			padding: 15px;
		}
	}

</style>
</head>
<body>
	<?php $this->load->view('navbar');?>

	<div class="jumbotron text-center">
		<div class="row">		
			<div class="col">
				<br>
				<img src="<?php echo base_url(); ?>assets/IMG/bpdb.png" class="rounded-circle" style="height: 200px; width: 200px;">
				<br>
				<br>
				<h1><?php echo $this->session->userdata('ses_username');?></h1>
				<p><?php echo $this->session->userdata('ses_email') ;?> </p>
			</div>
		</div>	
	</div>


	<section>
		<div class="container">
		<div class="row pt-4 justify-content-center">
				<a href="<?php echo base_url().'dinas'?>"><button class="btn btn-secondary text-center">Data Distribusi</button></a>
		</div>
			<div class="row pt-5 pb-5 justify-content-center">
				<table class="table table-striped table-bordered table-hover ">
					<thead class="text-center">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Judul</th>
							<th scope="col">Pelapor</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Level Kerusakan</th>
							<th scope="col">Status</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php foreach (array_reverse($laporan) as $lap ) {?>
							<tr class="text-center">	
								<td><?php echo $no++ ?></td>
								<td><?php echo $lap-> judul ?></td>
								<td><?php echo $lap-> pelapor ?></td>
								<td><?php echo $lap-> tanggal ?></td>
								<td><?php echo $lap-> level_kerusakan ?></td>
								<td>
								<?php if ($lap->status=="") { ?>
									<?php echo "Belum diproses"?>
								<?php } else { ?>
									<?php if ($lap->status=="Diterima") { ?>
										<font color="green"><?php echo $lap->status?></font>
									<?php } else {?>
										<font color="red"><?php echo $lap->status?></font>
									<?php } ?>
								<?php } ?>
								</td>
								<td>
									<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#lihat<?=$lap->id_laporan;?>">Lihat Lengkap</button>
									<?php if ($lap->status=="") { 
					    			?>

									<button type="button" class="btn btn-success" data-toggle="modal" data-target="
									#verif<?=$lap->id_laporan;?>">Verifikasi</button>

								<?php }  ?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>

	<footer>
		<div class="footer-copyright text-center py-3">© 2018 GIGFIT</div>
	</footer>

	<!-- Modal Lihat-->
	<?php foreach ($laporan as $lap ) {?>

		<div class="modal fade" id="lihat<?=$lap->id_laporan;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #396e6f; color: white;">
						<h5 class="modal-title" id="exampleModalLongTitle">
							<font style="color: white;"><?php echo $lap->judul?></font>
						</h5>
					</div>
					<div class="modal-body">
						<p><b>Tanggal:</b> <?php echo $lap->tanggal?></p>
						<p><b>Pelapor:</b> <?php echo $lap->pelapor?></p>
						<p class="card-text"><label><b>Deskripsi</b></label> <br><?php echo $lap-> deskripsi ?></p>
						<p><b>Alamat:</b> <?php echo $lap->alamat?></p>
						<p><img src="<?php echo $lap-> tanggal ?>" class="rounded float-left" alt="..."></p>
						<p><b>Level Kerusakan:</b> <?php echo $lap->level_kerusakan?></p>
						<p><b>Status:</b> <?php echo $lap->status?></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

<!-- Verifikasi -->
<?php foreach ($laporan as $lap ) {?>
		<div class="modal fade" id="verif<?=$lap->id_laporan;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #396e6f; color: white;">
						<h5 class="modal-title" id="exampleModalLongTitle">
							<font style="color: white;"><?php echo $lap->judul?></font>
						</h5>
					</div>
					<div class="modal-body">
						<p><b>Tanggal:</b> <?php echo $lap->tanggal?></p>
						<p><b>Pelapor:</b> <?php echo $lap->pelapor?></p>

						<form method="post" action="<?php echo base_url().'olah/verif'; ?>">
							<input type="hidden" id="id_laporan"  name="id_laporan" placeholder="" class="form-control" value="<?php echo $lap->id_laporan?>">
						<p><b>Level Kerusakan</b></p>
						<p>
							<div class="input-group mb-3" >
								<select class="custom-select" name="level_kerusakan">
									<option selected>--</option>
									<option value="Ringan">Ringan</option>
									<option value="Sedang">Sedang</option>
									<option value="Berat">Berat</option>
								</select>
							</div>
						</p>
						<p><b>Status</b></p>
						<p>
							<div class="input-group mb-3">
								<select class="custom-select" name="status">
									<option selected>Pilih</option>
									<option value="Diterima">Diterima</option>
									<option value="Ditolak">Ditolak</option>
								</select>
							</div>
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>


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