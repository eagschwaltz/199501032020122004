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
					Form Edit Data User
					
					</h1>
				</div><!-- /.page-header -->
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<?php echo form_open_multipart('C_controller/update_user/'.$data->id_user, ['class'=>'form-horizontal'])?>
							<div class="form-group">
								<label class="col-sm-2"  for="form-field-1"> Username </label>
								<div class="col-sm-4">
									<input type="text" id="username" name="username" value="<?=$data->username ?>" class="col-xs-10 col-sm-12" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2"  for="form-field-1"> Password</label>
								<div class="col-sm-4">
									<input type="password" id="password" name="password" class="col-xs-10 col-sm-12" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2"  for="form-field-1"> Instansi </label>
								<div class="col-sm-4">
									<select class="form-control" id="form-field-select-1" name="instansi">
										<?php foreach ($instansi as $ins){?>
											<option value="<?php echo $ins->id_instansi?>"><?php echo $ins->nama_instansi?></option>
										<?php }?>
									</select>
								</div>
							</div>
							
								<div class="clearfix form-actions">
									<div class="col-md-offset-3 col-md-9">
										<button class="btn btn-info" type="submit" name="btnUdt">
											<i class="ace-icon fa fa-check bigger-110"></i>
											Update
										</button>
										&nbsp; &nbsp; &nbsp;
										<button class="btn" type="button" onclick="window.history.back();"name="btnUdtBtl">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											Batal
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