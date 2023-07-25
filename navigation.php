<!-- Navigation  -->
<body class="hold-transition skin-seagulls sidebar-mini wrapper">

 <header class="hold-transition main-header">
		<a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>B4T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Gapura</b>B4T</span>
    </a>
			<nav class="navbar navbar-static-top">
			 <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
	   <div class="navbar-custom-menu">
	   <ul class="nav navbar-nav">
	   
	   
	   
	   <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Gapura Team
                  <small><?php echo $this->session->userdata('nama');?></small>
                </p>
              </li>
              <!-- Menu Body -->
				<!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="<?php echo site_url('Login/logout');?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          </ul>
	   </div>
	   
	   
	   
	   
	   
	   
		</nav>
</header>

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Gapura</p>
          <p><i class="fa fa-circle text-success"></i> Online</p>
        </div>
      </div>
      
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($this->uri->segment(1)=="Tamu"){echo "active";}?>">
          <a href="<?=site_url('Tamu')?>">
            <i class="fa fa-book"></i> <span>Data Tamu</span>
          </a>
        </li>
	    <li class="<?php if($this->uri->segment(1)=="User"){echo "active";}?>">
          <a href="<?=site_url('User')?>">
            <i class="fa fa-users"></i> <span>Data User</span>
          </a>
        </li>
	    <li class="<?php if($this->uri->segment(1)=="Spot"){echo "active";}?>">
          <a href="<?=site_url('Spot')?>">
            <i class="fa fa-spotify"></i> <span>Spot</span>
          </a>
        </li>
	   
	   
	   <!--
	   <li>
	   <a href="#"><i class="fa fa-circle-o text-red"></i> <span>Data Tamu</span></a>
	   </li>
        <li>
		<a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Data User</span></a>
		</li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Spot</span></a>
		</li>
		-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 
</body>
