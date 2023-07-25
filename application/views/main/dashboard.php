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
						daftar transaksi
					</small>
					</h1>
				</div><!-- /.page-header -->
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div class="row">
							<div class="col-sm-12">
								<div class="tabbable">
									<ul class="nav nav-tabs" id="myTab">
										<li class="active">
											<a data-toggle="tab" href="#home">
												<i class="green ace-icon fa fa-home bigger-120"></i>
													rekrutmen
											</a>
										</li>
									</ul>
									<div class="tab-content">
										<div id="home" class="tab-pane fade in active">
											<div class="row">
												<div class="col-xs-12">
													<div class="clearfix">
														<div class="pull-right tableTools-container"></div>
													</div>
														<div class="table-header">
															data peserta rekrutmen
														</div>
														<!-- div.table-responsive -->
														<!-- div.dataTables_borderWrap -->
														<div>
															<table id="dynamic-table" class="table table-striped table-bordered table-hover">
																<thead>
																	<tr>
																		<th class="center">Nomor</th>
																		<th>Nama</th>
																		<th>NIP</th>
																		<th>Satuan Kerja</th>
																		<th class="hidden-480">Posisi</th>
																		<th>
																			<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
																			waktu
																		</th>
																		<th>Action</th>
																	</tr>
																</thead>
																<tbody>
																	<?php
																	$no=1;
																	if( ! empty($view_data)){
																		foreach($view_data as $key=>$value){
																			foreach($value as $data){
																			
																		?>
																	<tr>
																		<td class="center"> <?php echo $no++;?> </td>
																		<td><?=$data->nama?></td>
																		<td><?=$data->nip?></td>
																		<td><a href="#"><?=$data->satuan_kerja?></a></td>
																		<td><?=$data->posisi_yang_dipilih?></td>
																		<td class="hidden-480">
																			<?=$data->timestamp?>
																		</td>
																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="red" href="<?=site_url('Maincontrol/details/'.$data->id)?>">
																					<i class="ace-icon fa fa-info-circle bigger-130"></i>
																				</a>
																			</div>

																			</td>
																	</tr>
																		<?php 
																			
																		}
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
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table-itsbat')
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
			
				var myTable2 = 
				$('#dynamic-table')
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