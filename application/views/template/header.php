    <!-- Header-->
    <header id="header" class="header" style="background-color:#ADD8E6">
    	<div class="top-left " style="display: flex; justify-content: flex-start; margin: 0; padding: 0;">
    		<div class="navbar-header">
			<a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
			<a href=""><br><br></a>
    			<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url() ?>assets/images/rtw.png" alt="Logo" width="320" height="25"></a>
    			
    		</div>
    	</div>
    	<div class="top-right">
    		<div class="header-menu">
    			<div class="header-left">

    				<!-- <div class="dropdown for-notification">
    					<button class="btn btn-secondary dropdown-toggle notification-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    						<i class="fa fa-bell"></i>
    						<span class="count bg-danger count-quantity"></span>
    					</button>
    					<div class="dropdown-menu notif-list" aria-labelledby="notification">
    					</div>
    				</div> -->

    			</div>

    			<div class="user-area dropdown float-right">
    				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					<img class="user-avatar rounded-circle" src="<?php echo base_url() ?>assets/images/admin.jpg" alt="User Avatar">
    				</a>
    				<div class="user-menu dropdown-menu">
    					<a class="nav-link" href="<?php echo base_url().'user/edit_user/' . $this->session->userdata('user_id'); ?>"><i class="fa fa- user"></i>My Profile</a>
    					<a class="nav-link" href="<?php echo base_url() ?>user/logout"><i class="fa fa-power -off"></i>Logout</a>
    				</div>
    			</div>

    		</div>
    	</div>
    </header>
    <!-- /#header -->
    <!-- Content -->
