<section class="bg-primary" id="lapor">
	<div class="container">
		<div class="row text-center">
			<div class="col">	

				<?php if($this->session->userdata('akses')=='1'):?>		
					<p class="ask" style="word-spacing: 2px; letter-spacing: 2px;">Pengoloaan Data Yang Baik
					Akan Berdampak Kedepannya</p>
				<?php elseif($this->session->userdata('akses')=='2'):?>
					<p class="ask" style="word-spacing: 2px; letter-spacing: 2px;">Apakah anda melihat kerusakan infrastruktur?</p>
					<a href="<?php echo base_url().'post'?>"> 
					<button class="btn btn-lg btn-primary">Laporkan</button></a>
				<?php else:?>
					<p class="ask" style="word-spacing: 2px; letter-spacing: 2px;">Apakah anda melihat kerusakan infrastruktur?</p>
					<a href="<?php echo base_url().'daftar'?>"> 
					<button class="btn btn-lg btn-primary">Laporkan</button></a>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>