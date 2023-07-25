<!doctype html>
<html lang="en">
	
<body class="no-skin">
	
	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a class="active">Dashboard</a>
					</li>							
				</ul><!-- /.breadcrumb -->
			</div>
			
			<div class="page-content">
				<div class="page-header">
					<h1>
					Dashboard 
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						daftar atribut
					</small>
					
					<button class="btn btn-minier btn-yellow pull-right" onclick="history.back(-1)">
						<i class="ace-icon fa fa-arrow-left"></i>
							kembali
					</button>
					</h1>

				</div><!-- /.page-header -->
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div class="row">
							<div class="col-sm-12">
								<div class="profile-user-info profile-user-info-striped">
									<div class="profile-info-row">
										<div class="profile-info-name"> Nama  </div>
										<div class="profile-info-value">
											<span class="editable" id="pihak1"><?=$viewdata->id?></span>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> File pihak </div>
										<div class="profile-info-value">
											<div class="col-xs-10 col-sm-2" id="file">
												<a href="<?php echo base_url().'C_controller/linkfile/'.$file->kakel ?>" target="_blank">Kartu Keluarga</a>
											</div>
											<div class="col-xs-10 col-sm-2" id="file">
												<a href="<?php echo base_url().'C_controller/linkfile/'.$file->ktp_pihak1 ?>" target="_blank">KTP <?php echo $data->nama_pihak1?></a>
											</div>
											<div class="col-xs-10 col-sm-3" id="file">
											<?php if($file->ktp_pihak2 != NULL){?>
											<a href="<?php echo base_url().'C_controller/linkfile/'.$file->ktp_pihak2 ?>" target="_blank">KTP <?php echo $data->nama_pihak2?></a>
											<?php
													}else{
														echo "KTP pihak 2 tidak ada";
													}
											?>
											</div>
											<div class="col-xs-10 col-sm-2" id="file">
												<a href="<?php echo base_url().'C_controller/linkfile/'.$file->user_file ?>" target="_blank"><?php if($data->jenis_perkara==1){echo "Akta Cerai";}else{echo "Penetapan";} ?></a>
											</div>
											<div class="col-xs-10 col-sm-2" id="file">
											<?php if($file->sptjm!= NULL){?>
												<a href="<?php echo base_url().'C_controller/linkfile/'.$file->sptjm?>" target="_blank">SPTJM</a>
											<?php
													}else{
														//echo "SPTJM";
													}
											?>
												
											</div>
										
											
										</div>
									</div>

								</div>
								
							</div><!-- /.col -->

							<div class="vspace-6-sm"></div>

									

								<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
						
						
								
								<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
						
				</div>
			</div>
		</div>
	</div>


</body>

		

		
		
		

</html>