
<div class="container">
<div class="box">
	<div class="box-inner">
		<div class="box-header well">
			<h2>Selamat Datang di E-Pilketos SMPN 17 MALANG</h2>
		</div>
		<div class="box-content">
			<h1><strong>Silahkan Pilih Salah Satu Ketua Osis Di Bawah!</strong></h1>
			<hr/>
			<br/><br/>
			<div class="row">
				<?php
					foreach($datacalon as $loaddata) {
				?>
					<div class="col-lg-4">
						<div class="box">
							<div class="box-inner">
								<div class="box-header well">
									<h2 class="text-center"> Pilihan Nomor : <?php echo $loaddata['no']; ?>     Nama : <?php echo $loaddata['nama']; ?> </h2>
								</div>
								<div class="box-content">
									<img width="100%" height="400" src="<?php echo base_url(); ?>asset/img/<?php echo $loaddata['photo']; ?>"/></br/><br/>
									<?php
										$form_attribute	= array(
											'methode'	=> 'post',
											'class'		=> 'form-horizontal'
										);
										echo form_open('user/vote', $form_attribute);
									?>
									<?php 
										$form_attribute	= array(
											'type'		=> 'hidden',
											'name'		=> 'nisn',
											'class'		=> 'form-control',
											'value'		=> $loaddata['nisn']
										);
										echo form_input($form_attribute);
									?>
									<?php 
										$form_attribute	= array(
											'type'		=> 'hidden',
											'name'		=> 'username',
											'class'		=> 'form-control',
											'value'		=> $username
										);
										echo form_input($form_attribute);
									?>
									<button class="btn btn-primary" style="width: 100%;">Pilih Nomor <?php echo $loaddata['no']; ?></button>
									<?php 
										echo form_close();
									?>
								</div>
							</div>
						</div>
					</div>
				<?php 
					} 
				?>
			</div>
		</div>
	</div>
</div>
</div>