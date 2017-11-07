<?php require "includes/db.php";?>



<!-- Start: Sidebar -->

<ul class="nav sidebar-menu ">
	<li class="sidebar-label pt20">Menu</li>
	<li class="active">
	<a href="home.php"><span class="glyphicon glyphicon-home"></span><span class="sidebar-title">HOME</span></a>
	</li>
	<li class="active">
	<a href="lists.php">
	  <span class="glyphicon glyphicon-book"></span>
	  <span class="sidebar-title">Employee's By List</span>
	</a>
	</li>
	<li class="active"><a type="button" class="btn btn-system mt10" onclick="printSVG()"><i class="fa fa-print" aria-hidden="true"></i> PRINT ROOM</a></li>
</ul>


       	<ul class="nav sidebar-menu"><!-- Start: Building Menu -->
			<li class="sidebar-label"><h4 class="text-system ">BUILDINGS</h4></li>
            
			
            <!-- Start: 153 Nav -->
            <li>
                <a class="accordion-toggle  href="#">
                    <span class="fa fa-building-o"></span>
                    <span class="sidebar-title">Building: 153</span>
                    <span class="caret"></span>
                </a>
            	<ul class="nav sub-nav">              		                                                                                
                    <li><a href="index.php?build=153_1"><i class="fa fa-angle-double-right"></i> Floor: 1</span></a></li>
                    <li><a href="index.php?build=153_2"><i class="fa fa-angle-double-right"></i> Floor: 2</span></a></li>
            	</ul>                
     		</li>
			
            <!-- Start: Sample Nav -->
            <li>
                <a class="accordion-toggle  href="#">
                    <span class="fa fa-building-o"></span>
                    <span class="sidebar-title">Building: Sample</span>
                    <span class="caret"></span>
                </a>
				<ul class="nav sub-nav">              		                                                                                
                    <li><a href=""><i class="fa fa-angle-double-right"></i> Floor: 1</span></a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i> Floor: 2</span></a></li>    
            	</ul>                
     		</li>

            <!-- Start: 181 Nav -->
            <li>
                <a class="accordion-toggle  href="#">
                    <span class="fa fa-building-o"></span>
                    <span class="sidebar-title">Building: Sample</span>
                    <span class="caret"></span>
                </a>
            	<ul class="nav sub-nav">              		                                                                                
                    <li><a href=""><i class="fa fa-angle-double-right"></i> Floor: 1</span></a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i> Floor: 2</span></a></li>
            	</ul>              
     		</li>
			<li><!-- Start: B218 Nav -->
                <a class="accordion-toggle  href="#">
                    <span class="fa fa-building-o"></span>
                    <span class="sidebar-title">Building: Sample</span>
                    <span class="caret"></span>
                </a>
            	<ul class="nav sub-nav">              		                                                                                
					<li><a href=""><i class="fa fa-angle-double-right"></i> Floor: 1</span></a></li>
					<li><a href=""><i class="fa fa-angle-double-right"></i> Floor: 2</span></a></li>
 				</ul>                
     		</li>  

			<li></li>
			<li></li>
			<li></li>
			<li class="copyright text-muted">&nbsp; &nbsp; &nbsp;&nbsp;Copyright &copy; Steve DiStefano 2016</li>        
			</ul><!-- End:  Nav -->
            
         





