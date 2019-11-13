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
			background-image: url(<?php echo base_url(); ?>assets/IMG/1.jpg);
			background-size: cover;
			border-radius: 0px;
			margin-bottom: 0px;
			height: 668px;
			background-attachment: fixed;
		}
		.col-md-5{
			padding-top:200px;
			color: white;
			font-size: 20px;
			text-align: center;
		}
		.col{
			padding-top:200px;
			color: white;
			font-size: 20px;
			word-spacing: 8px;
		}
		h1{
			font-weight: bold;
			color: white;
		}
		.bg-primary{
			height: 80vh;
		}
		.bg-primary{
			background-image: url(<?php echo base_url(); ?>assets/IMG/lapor.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		.ask{
			color: white;
			font-size: 40px;
		}
		.btn{
			border-radius: 40px;
		}
		.bg-primary{
			min-height: 680px;
		}
		.btn-primary{
			background-color: #f9ca24;
			border-color: #f9ca24;
		}
		.btn-primary:hover{
			background-color: #f0932b;
			border-color: #f0932b;
		}
		.footer-copyright{
			background-color: #74483d;
			color: white;
		}

		.page-scroll {
			animation: anim 1s cubic-bezier(1.000, 0.000, 0.000, 1.000);
			animation-fill-mode: scroll;
		}
		/*DESKTOP*/
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
			.carousel-inner{
				height: 80vh;
			}
			.ask{
				padding-top: 80px;
			}
		}
	</style>
</head>
<body>
	<?php $this->load->view('navbar');?>
	<div class="jumbotron" id="top">
		<div class="container">	
			<div class="row">		
				<div class="col-md-5">
					<h1>Apa itu GIGFIT?</h1>
						<p class="putama" style="word-spacing: 2px; letter-spacing: 2px;">GIGFIT merupakan website yang dibuat untuk melakukan pelaporan dan pendataan kerusakan infrastruktur  dan fasilitas 	publik yang terjadi di sekitar masyarakat supaya dapat memudahkan BPDB dalam melakukan pendataan</p>
				</div>
			</div>
		</div>	
	</div>

<section>
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"  >
		<ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  		</ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url(); ?>assets/IMG/slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url(); ?>assets/IMG/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url(); ?>assets/IMG/slide3.jpg" alt="Third slide" class="mt-6">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url(); ?>assets/IMG/slide4.jpg" alt="Fourth slide" class="mt-6">
    </div>
  </div>
</div>
</section>

<?php $this->load->view('section');?>

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
	<script src="assets/bootstrap/js/smooth-scroll.polyfills.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/15.1.2/smooth-scroll.polyfills.min.js"></script>
	
	<script>
		//smoothscroll
		  var scroll = new SmoothScroll('a[href*="#"]');
	
		//carousel
		  $('.carousel').carousel({
		   interval: 500
		  });

		 //scrollshow
			
 	</script>      


</body>
</html>