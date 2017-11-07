
<body class="dashboard-page">

  <div id="main">

    <!-- Header -->
   <?php include "includes/header.php"; ?>
   <?php include "includes/db.php"; ?>
   <?php include "includes/functions.php"; ?>

		<!-- Confirm Logged in -->
	<?php confirm_logged_in(); ?>
	
	
    <!-- Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">
    <!--Sidebar Left Content -->
	<div class="sidebar-left-content nano-content">
    	<?php include "includes/menu.php";?>
	      <!-- Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini ">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
      </div> <!-- End: Sidebar Left Content -->
    </aside><!-- End: Sidebar Left -->

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success pull-right">Logout Dropdown: <i class="fa fa-arrow-up" ></i></b> </h4>
			<h1><b class="text-success">Instruction Page: </b></h1>
        </div>
      </header><!-- End: Topbar -->
	
	

		
		<div class="panel-body p20" id="invoice-item">            
				<div class="row col-md-12  pt30 pb20">
				<h2><b class="text-success"><i class="fa fa-arrow-left" ></i> Navigation Area: </b></h2>
			</div>                
			<br />
		</div>
		<div class="panel-body p20" id="invoice-item">            
			<div class="row col-md-10 col-md-offset-1  pt10 ">
				<div class="row col-md-12 ">
				<h2><b class="text-info">Instructions: </b></h2>
				<ol class="text-info">
					<li><h3>Use the Navigation Menu on left to select the building and the floor.<h3></li>
					<li><h3>Rooms highlighted color represent occupant's department.<h3></li>
					<li><h3>Hover pointer over the room to see the room's information.<h3></li>
					<li><h3>Click the room to make changes to the occupant, department, or other information.<h3></li>
					<li><h3>Use the dropdown menu on the right to log out or access the Administrator's Page.<h3></li>
				</ol>
				</div>            
			</div>                
			<br />
		</div>	
		
		<div class="panel-body p10" id="invoice-item">            
			<div class="row col-md-10 col-md-offset-1  pt10 ">
				 <div class="row">                                        	
					<div class="col-md-6 col-md-offset-2">       
						<div class="alert alert-default mb30 mt50">               
							<h3 class="mt5">Note!</h3>
							<h4><ol>
									<li>Only one department can be assigned to a room.</li>
									<li>Departments, notes and TESA information are independent from occupants.</li>
									<li>When an occupant is removed from a room, departments, notes and TESA information remain until deleted seperately.</li>
									<li>Contact Steve DiStefano to add rooms or functionality issues at 4-5325</li>
								</ol>
							</h4>                                
						</div>
					</div>
				</div>
			</div>
		</div>	

			                
	 </section>
          


<?php include "includes/footer.php";?>



