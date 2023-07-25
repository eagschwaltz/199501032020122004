<!doctype html>
<html lang="en">
	
<body class="no-skin">
	
	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a class="active">Daftar User</a>
					</li>							
				</ul><!-- /.breadcrumb -->
			</div>
			
			<div class="page-content">
				<div class="page-header">
					<h1>
					User/Pengguna 
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						daftar User
					</small>
					</h1>
				</div><!-- /.page-header -->
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div class="row">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
											<div class="table-header">
												data pihak perceraian
											</div>
											<!-- div.table-responsive -->
											<!-- div.dataTables_borderWrap -->
											<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th class="center">Nomor</th>
															<th>Username</th>
															<th>Nama Instansi</th>
															<th>Alamat Instansi</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
													<?php
														$no=1;
															if( ! empty($data)){
																foreach($data as $d){
																?>
														<tr>
															<td class="center"> <?php echo $no++;?> </td>
															<td><?=$d->username?></td>
															<td width="35%"><?=$d->nama_instansi?></td>
															<td width="40%"><?=$d->alamat_instansi?></a></td>
															<td>
																<div class="hidden-sm hidden-xs action-buttons">
																	<a class="green" href="<?=site_url('C_controller/edit_user/'.$d->id_user)?>">
																		<i class="ace-icon fa fa-pencil bigger-130"></i>
																	</a>
																	<a class="red" href="<?=site_url('C_controller/delete_user/'.$d->id_user)?>" onclick="return confirm('Apakah Anda yakin akan menghapus data?')">
																		<i class="ace-icon fa fa-trash-o bigger-130"></i>
																	</a>
																	<a class="red" href="<?=site_url('C_controller/profile/'.$d->id_user)?>">
																		<i class="ace-icon fa fa-info-circle bigger-130"></i>
																	</a>
																</div>
																<div class="hidden-md hidden-lg">
																	<div class="inline pos-rel">
																		<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																			<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																		</button>
																		<ul>
																			<li>
																				<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																					<span class="blue">
																						<i class="ace-icon fa fa-search-plus bigger-120"></i>
																					</span>
																				</a>
																			</li>

																			<li>
																				<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																					<span class="green">
																						<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																					</span>
																				</a>
																			</li>

																			<li>
																				<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																					<span class="red">
																						<i class="ace-icon fa fa-trash-o bigger-120"></i>
																					</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
																		
															</td>
														</tr>
														<?php 
																		
															}
														}
														?>

													</tbody>
												</table>
												<div align="center">
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

		

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('#dynamic-table').DataTable();
			});
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-tabl')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				
				
				
				
				
				
				
				
				
			
				////
			
				
				
				
				
				
				
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				
				
				
			
			
				<!-- $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) { -->
					<!-- e.stopImmediatePropagation(); -->
					<!-- e.stopPropagation(); -->
					<!-- e.preventDefault(); -->
				<!-- }); -->
				
				
				
				
				
			
				/********************************/
				
				
				
				
				
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
		
		
		
		

</html>