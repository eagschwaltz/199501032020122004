
	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/jquery-2.1.4.min.js"></script>

	<!-- <![endif]-->

	<!--[if IE]>
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<![endif]-->
	<script type="text/javascript">
		if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>assets/ace-master/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
	</script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/bootstrap.min.js"></script>
	
	<!-- page specific plugin scripts -->

	<!--[if lte IE 8]>
	<script src="assets/js/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/jquery-ui.custom.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/chosen.jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/spinbox.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/bootstrap-datepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/bootstrap-timepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/daterangepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/jquery.knob.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/autosize.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/jquery.inputlimiter.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/jquery.maskedinput.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/bootstrap-tag.min.js"></script>
	
	<!--datatables-->
		
		<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/buttons.flash.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/dataTables.select.min.js"></script>
		
	
	<!-- ace scripts -->
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/ace-elements.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ace-master/assets/js/ace.min.js"></script>
	
	
	
	
	
	
	<!-- inline scripts related to FORM INPUT FILE in add_file.php -->
		<script type="text/javascript">
			jQuery(function($) {
				
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				
				$('#id-input-file-4').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				//$('#id-input-file-4')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);
				
				$('#id-input-file-5').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				//$('#id-input-file-5')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);
			
				$('#id-input-file-6').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				//$('#id-input-file-6')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);
			
				$('#id-input-file-7').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				//$('#id-input-file-7')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);
			
				// scrollables
				$('.scrollable').each(function () {
					var $this = $(this);
					$(this).ace_scroll({
						size: $this.attr('data-size') || 100,
						//styleClass: 'scroll-left scroll-margin scroll-thin scroll-dark scroll-light no-track scroll-visible'
					});
				});
				$('.scrollable-horizontal').each(function () {
					var $this = $(this);
					$(this).ace_scroll(
					  {
						horizontal: true,
						styleClass: 'scroll-top',//show the scrollbars on top(default is bottom)
						size: $this.attr('data-size') || 500,
						mouseWheelLock: true
					  }
					).css({'padding-top': 12});
				});
				
				$(window).on('resize.scroll_reset', function() {
					$('.scrollable-horizontal').ace_scroll('reset');
				});
			

				(function() {
					//restore widget order
					var container_list = ace.data.get('demo', 'widget-order', true);
					if(container_list) {
						for(var container_id in container_list) if(container_list.hasOwnProperty(container_id)) {
			
							var widgets_inside_container = container_list[container_id];
							if(widgets_inside_container.length == 0) continue;
							
							for(var i = 0; i < widgets_inside_container.length; i++) {
								var widget = widgets_inside_container[i];
								$('#'+widget).appendTo('#'+container_id);
							}
			
						}
					}
				
					//restore widget state
					var widgets = ace.data.get('demo', 'widget-state', true);
					if(widgets != null) {
						for(var id in widgets) if(widgets.hasOwnProperty(id)) {
							var state = widgets[id];
							var widget = $('#'+id);
							if
							(
								(state == 'shown' && widget.hasClass('collapsed'))
								||
								(state == 'hidden' && !widget.hasClass('collapsed'))
							) 
							{
								widget.widget_box('toggleFast');
							}
							else if(state == 'closed') {
								widget.widget_box('closeFast');
							}
						}
					}
					
					
					$('#main-widget-container').removeClass('invisible');
					
					
					//reset saved positions and states
					$('#reset-widgets').on('click', function() {
						ace.data.remove('demo', 'widget-state');
						ace.data.remove('demo', 'widget-order');
						document.location.reload();
					});
				
				})();
			
				
			
			});
		</script>
		
		<!-- inline scripts related to FORM INPUT FILE in add_file.php -->
		
		

		
		