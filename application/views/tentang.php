<!DOCTYPE html>
<html>
<head>	
	<title>GIGFIT</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

	<style type="text/css">
		body{
			font-family: Roboto;
		}
		.jumbotron{
			background-image: url(<?php echo base_url(); ?>assets/IMG/tendanpan.jpg);
			background-size: cover;
			background-position: 0 -100px;
			height: 300px;
			border-radius: 0px;
			margin-bottom: 0px;
			background-attachment: fixed;
		}
		.col{
			padding-top:70px;
			color: white;
		}
		.bg-primary{
			height: 80%;
		}
		.navbar-brand{
			font-weight: bold;
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
		.bg-primary{
				background-color: #396e6f !important;
		}
		#profil{
			border-width: 3px white solid;
			max-width: 250px;
			min-height: 200px;	
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
			.card{
				width: 50rem;
			}
			.btn{
				border-radius: 40px;
			}
			.bg-primary{
				background-color: #396e6f !important;
				height: 90%;
			}
			#profil:hover{
				transition: 0.3s;
				box-shadow: 2px 2px 2px 2px #182a2e	;
			}
		}

	</style>
</head>
<body>
<?php $this->load->view('navbar');?>

<div class="jumbotron">
	<div class="container">
		<div class="row">		
			<div class="col">
				<p><strong style="font-size: 50px;">Tentang Kami dan Panduan</strong></p>
			</div>
		</div>	
	</div>
</div>

<section style="background-color: #efefef">
	<div class="container">
		<div class="row pt-2 ">
			<div class="col">
			<p style="font-size: 25px; font-weight: bold; color: black;">GIGFIT</p>
			<p style="color: gray;">GIGFIT merupakan website yang dibuat untuk melakukan pelaporan dan pendataan kerusakan infrastruktur  dan fasilitas publik yang terjadi di sekitar masyarakat  supaya dapat memudahkan BPDB dalam melakukan pendataan.</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p style="font-size: 25px; font-weight: bold; color: black;">Cara Kerja</p>
				<p style="color: gray;">Dalam sistem web ini terdapat dua user, yaitu : Admin (BPDB) dan User (Masyarakat). User melakukan pendataan dari apa yang terjadi dilapangan mengenai kerusakan infrastruktur dan fasilitas publik secara suka rela. User yang akan melakukan registrasi dan login terlebih dahulu lalu mengisi format pendaatan yang akan dilaporkan seperti judul, deskripsi, tanggal, alamat/lokasi, dan unggah berkas. Dari sisi admin akan melakukan verifikasi apakah laporan tersebut diterima atau ditolak, lalu melakukan pengelompokan apakah kerusakan tersebut tergolong pada kesuakan yang ringan, sedang atau berat.</p>
			</div>
		
			</div>
			<div class="row">
				<div class="col">
					<p style="font-size: 25px; font-weight: bold; color: black;">Rincian Layanan</p>
					<p style="color: gray;">
						<ul style="color: gray;">
							<li>Judul pada format laporan diberikan</li>
							<li>Tanggal pada format laporan adalah tanggal menginput laporan tersebut</li>
							<li>Alamat pada format laporan adalah alamat tempat kerusakan tersebut berada</li>
							<li>Berkas bisa berupa foto dengan format jpeg,jpeg, png</li>
						</ul>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p style="font-size: 25px; font-weight: bold; color: black;">Level Kerusakan</p>
					<p style="color: gray;">
						<ul style="color: gray;">
							<li>Ringan</li>
							<p>Tingkatan kerusakan ringan terdiri dari kerusakan dengan luas 10-50 m² , kerusakan yang menyebabkan 10%-30% rusaknya infrastruktur/fasilitas publik, kerusakan dengan kerugian Rp500.000 - Rp1.000.000</p>
							<li>Sedang</li>
							<p>Tingkatan kerusakan ringan terdiri dari kerusakan dengan luas >1.000 m² , kerusakan yang menyebabkan 40%-65% rusaknya infrastruktur/fasilitas publik, kerusakan dengan kerugian Rp50.000.000 - Rp500.000.000</p>
							<li>Berat</li>
							<p>Tingkatan kerusakan ringan terdiri dari kerusakan dengan luas >10.000 m² , kerusakan yang menyebabkan 70%-100% rusaknya infrastruktur/fasilitas publik, kerusakan dengan kerugian >Rp500.000.000</p>
						</ul>
					</p>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col">
					<p style="font-size: 25px; font-weight: bold; color: black;">Kata Kunci</p>
					<table class="table-borderless" style="color: gray;">
						<tr>
							<td>Admin</td>
							<td>:</td>
							<td>Pengelola data dan sistem layanan</td>
						</tr>
						<tr>
							<td>User</td>
							<td>:</td>
							<td>Pengguna Layanan</td>
						</tr>
						<tr>
							<td>BPDB</td>
							<td>:</td>
							<td>Badan Penanggulangan Bencana Daerah</td>
						</tr>
						<tr>
							<td>Masyarakat</td>
							<td>:</td>
							<td>Individu yang hidup bersama untuk memperoleh kepentingan bersama pada suatu lingkugan (dalam sistem ini masyarakat adalah user)</td>
						</tr>
						<tr>
							<td>Insfrastruktur</td>
							<td>:</td>
							<td>Fasilitas-fasilitas fisik yang dikembangkan atau dibutuhkan oleh agen-agen publik untuk fungsi-fungsi pemerintahan untuk memfasilitasi tujuan-tujuan sosial dan ekonomi</td>
						</tr>
						<tr>
							<td>Fasilitas Publik </td>
							<td>:</td>
							<td>Sarana dan prasarana yang disediakan oleh pemerintah yang digunakan untuk kepentingan bersama dalam melaksanakan kegiatan sehari-hari</td>
						</tr>

					</table>
				</div>
			</div>
		</div>

	</div>
</section>
<section class="bg-primary justify-content-center">
	<div class="container p-0" >
		<div class="container-fluid text-center">
			<br>
			<p><strong><font color="white">TIM EMP</font></strong></p>
		<div class="row justify-content-center" style="margin-top: -60px; ">
		<div class="col justify-content-center ">
			<img id="profil" src="https://instagram.fcgk16-1.fna.fbcdn.net/vp/e297811a7dbc88118b0833dd91cb44af/5DC1B0FE/t51.2885-15/e35/43653367_543410486124558_3114722360144129502_n.jpg?_nc_ht=instagram.fcgk16-1.fna.fbcdn.net" class="rounded-circle mt-0" style="width: 200px; height: 180px;">
			<h4 class="mt-3" style="font-weight: bold;">Ihya Fathurrahman</h4>
			<p>17523126@students.uii.ac.id | @ihyaet</p>
		</div>
		<div class="col justify-content-center">
			<img id="profil" src="https://instagram.fcgk16-1.fna.fbcdn.net/vp/d785e326d4caef50a57fa3fb240ab599/5D84764C/t51.2885-15/e35/59356145_2227729724142896_3090851064454746546_n.jpg?_nc_ht=instagram.fcgk16-1.fna.fbcdn.net" class="rounded-circle mt-0" style="width: 200px; height: 180px;">
			<h4 class="mt-3" style="font-weight: bold;">Muhammad Arif Idris</h4>
			<p>17523127@students.uii.ac.id | @aaarif90</p>
		</div>
		<div class="col justify-content-center">
			<img id="profil" src="https://instagram.fcgk16-1.fna.fbcdn.net/vp/7996c4fb7effa60797e293ceba4ba654/5D885107/t51.2885-15/e35/46307855_261698954500275_7691956467388244782_n.jpg?_nc_ht=instagram.fcgk16-1.fna.fbcdn.net" class="rounded-circle mt-0" style="width: 200px; height: 180px	;">
			<h4 class="mt-3" style="font-weight: bold;">Fadel Muhammad</h4>
			<p>17523187@students.uii.ac.id | @fadell__</p>
		</div>
	</div>
	</div>
	</div>
</section>
<section id="kontak">
		<footer class="page-footer font-small blue pt-4">
			<div class="container">
		    <div class="container-fluid text-center text-md-left">
		      <div class="row">
		        <div class="col-md-6 mt-md-0 mt-3">
		          <h5 class="text-uppercase"><b>gigfit</b></h5>
		          <p>"Get Info Go Fix It"</p>
		          <p>Pastisipasi anda sangat kami harapakan dan kami tunggu.</p>
		        </div>
		        <hr class="clearfix w-100 d-md-none pb-3">
		        <div class="col-md-3 mb-md-0 mb-3">

		          </div>

		          <div class="col-md-3 mb-md-0 mb-3 text-md-right">
		            <h5 class="text-uppercase"><b>Kontak dan Alamat</b></h5>
		            <ul class="list-unstyled">
		              <li>
		               <p>Jalan Kaliurang KM 14.5, Sleman, Yogyakarta</p>
		              </li>
		              <li>
		                <p>(0274)138009</p>
		              </li>
		              <li>
		                <p>support.admin@gigfit.com</p>
		              </li>
		            </ul>
		          </div>
		      </div>
		    </div>
			</div>
		    <!-- Copyright -->
		    <div class="footer-copyright text-center py-3">© 2018 GIGFIT</div>
		    <!-- Copyright -->
  </footer>
</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/15.1.2/smooth-scroll.polyfills.min.js"></script>
	<script>
		//smoothscroll
		  var scroll = new SmoothScroll('a[href*="#"]');
	
			
 	</script>      

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