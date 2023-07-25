<body class="login-layout">
	<div class="main-container">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">SINKARGA</span>
									<span class="white" id="id-text2">Payakumbuh</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Sistem Integrasi Kartu Keluarga</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Silahkan input Username dan Password
											</h4>

											<div class="space-6"></div>

											<?php echo form_open('Login/proses_login')?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="username" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<button type="submit" name="loginBtn"class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											<?php echo form_close()?>
											
											<?php if($this->session->flashdata('pesan')==TRUE){?>
											<div class="social-or-login center">
												<span class="bigger-110">Kesalahan</span>
													<div class="alert alert-danger">
														<button type="button" class="close" data-dismiss="alert">
															<i class="ace-icon fa fa-times"></i>
														</button>
														<strong>
														<i class="ace-icon fa fa-times"></i>
														</strong>

														<?php echo $this->session->flashdata('pesan');?>
														<br />
													</div>
													
											</div>
											<?php } ?>
											<div class="space-6"></div>

											</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
										<!-- i forgot my password here-->
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->








	</div>

</body>
  
 