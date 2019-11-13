<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light" id="mainNav">
	<div class="container">
		<a class="navbar-brand" href="<?php echo base_url().''?>"><img src="<?php echo base_url(); ?>assets/IMG/Logo.png" width="160px" height="50px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">

				<?php if($this->session->userdata('akses')=='1'):?>	
				<li class="nav-item"><a href="<?php echo base_url().'olah'?>" class="nav-link"><?php echo $this->session->userdata('ses_username');?></a></li>	
				<li class="nav-item"><a href="<?php echo base_url().'login_admin/logout'?>" class="nav-link">Keluar</a></li>	
				
				<?php elseif($this->session->userdata('akses')=='2'):?>
				<li class="nav-item"><a href="<?php echo base_url().'profil'?>" class="nav-link"><?php echo $this->session->userdata('ses_nama') ;?></a></li>
				<li class="nav-item">
					<a href="<?php echo base_url().'tentang'?>" class="nav-link scroll">Informasi</a>
				</li>
				<li class="nav-item">	
				<li class="nav-item"><a href="<?php echo base_url().'login_user/logout'?>" class="nav-link">Keluar</a></li>	

				<?php else:?>
				<li class="nav-item">
					<a href="#lapor" class="nav-link scroll">Lapor</a>
				</li>
				<li class="nav-item">
					<a href="#kontak" class="nav-link scroll">Kontak</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url().'tentang'?>" class="nav-link scroll">Informasi</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url().'daftar'?>" class="nav-link">Daftar</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url().'pilih'?>" nav-link masuk><button style="color: white !important; text-transform: uppercase;" class="btn btn-primary ">Masuk</button></a>
				</li>
				<?php endif;?>

			</ul>
		</div>
	</div>
</nav>

