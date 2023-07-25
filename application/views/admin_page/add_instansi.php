<!doctype html>
<html lang="en">
	
<body class="no-skin">
	
	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Dashboard</a>
					</li>							
					<li class="active">Tambah Data</li>
						</ul><!-- /.breadcrumb -->
			</div>
			
			<div class="page-content">
				<div class="page-header">
					<h1>
					Tambah Instansi
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
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
						<?php if($this->session->flashdata('pesan')==TRUE){?>
					<div class="alert alert-danger alert-dismissible fade in" role="alert">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<h4>Kesalahan</h4>
							<?php echo $this->session->flashdata('pesan');?>
					</div>
						<?php };?>
						<?php echo form_open_multipart('C_controller/add_instansi', ['class'=>'form-horizontal'])?>
							<div class="form-group">
								<label class="col-sm-2"  for="form-field-1"> Nama Instansi </label>
								<div class="col-sm-4">
									<input type="text" id="nama_instansi" name="nama_instansi" placeholder="Nama Instansi" class="col-xs-10 col-sm-12" required/>
								</div>
								
							</div>
							<div class="form-group">
								<label class="col-sm-2"  for="form-field-1"> Singkatan Instansi </label>
								<div class="col-sm-4">
									<input type="text"  id="singkat" name="singkat" placeholder="Singkatan Instansi" class="col-xs-10 col-sm-12" required/>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2"  for="form-field-1"> Alamat Instansi </label>
								<div class="col-sm-4">
									<textarea type="text" id="alamat" name="alamat" placeholder="Alamat Pihak Kedua" class="col-xs-10 col-sm-12" required/></textarea>
								</div>
							</div>
							
							<label class="col-sm-12">Upload Logo Instansi</label>
							<hr />
									<div class="row">
										<div class="col-sm-3">
											<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">Logo Instansi</h4>

													<div class="widget-toolbar">
														<a href="#" data-action="collapse">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>

														
													</div>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="form-group">
															<div class="col-xs-12">
																<input multiple="" type="file" id="id-input-file-3" name="logo" required/>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
		
									</div>

									<hr />
								
								<div class="clearfix form-actions">
									<div class="col-md-offset-3 col-md-9">
										<button class="btn btn-info" type="submit" name="btnAdd">
											<i class="ace-icon fa fa-check bigger-110"></i>
											Submit
										</button>
										&nbsp; &nbsp; &nbsp;
										<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											Reset
										</button>
									</div>
								</div>
														
						<?php echo form_close();?>
					</div>
			
				</div>
			</div>
	</div>


</body>

</html>