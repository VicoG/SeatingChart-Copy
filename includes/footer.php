	
      <!-- Begin: Page Footer -->
      <footer id="content-footer" class="affix">
        <div class="row">
          <div class="col-md-11">
			
            <ul class="list-inline">
			  <li style="background-color:rgba(230, 195, 0,.5); border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;">CEO</li>
			  <li style="background-color: maroon; border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;">Act.</li>
			  <li style="background-color:rgba(255, 192, 203,.7); border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;"><i class="fa fa-file-text-o" ></i> Copy</li>
			  <li style="background-color: light blue; border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;">Empty</li>
			  <li style="background-color: rgba(128,128,128,.9); border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;">Open Area</li>
			  <li style="background-color: rgba(255, 26, 26,.7); border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;" >Admin</li>
			  <li style="background-color: rgba(0, 128, 0,.7); border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;"><i class="fa fa-wrench"></i> Help</li>
			  <li style="background-color: rgba(0, 0, 255, .8); border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;"><i class="fa fa-archive-o"></i> Sales</li>
			  <li style="background-color: rgba(255, 255, 26,.8); border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;">CFO</li>
			  <li style="background-color: rgba(255, 173, 51,.8); border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;"><i class="fa fa-exchange"></i> Stuff</li>
			  <li style="background-color: rgba(153, 0, 153,.8); border-radius: 2em; border: .1em solid grey; width:6em; text-align:center;"><i class="fa fa-laptop"></i> IT</li>
			</ul>
          </div>
		 
          <div class="col-md-1 text-right">
            <a href="#content" class="footer-return-top">
              <span class="fa fa-arrow-up"></span>
            </a>
          </div>
        </div>
      </footer><!-- End: Page Footer -->
    </section><!-- End: Content-Wrapper -->
  </div><!-- End: Main -->
  
  <?php
  //close DB connection
  if(isset($conn)){
	  mysqli_close($conn);
  }
  ?>
  
  <!-- BEGIN: PAGE SCRIPTS -->
	
	<!-- jQuery -->
	<script src="assets/jquery/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.qtip.js"></script>
	<script src="vendor/plugins/magnific/jquery.magnific-popup.js"></script>
	
	
	<!-- Theme Javascript -->
	<script src="assets/js/utility/utility.js"></script>
	<script src="assets/js/demo/demo.js"></script>
	<script src="assets/js/main.js"></script>
	<!--  PrintArea 
	<script src="vendor/PrintArea/jquery.printarea.js"></script>
	<script src="vendor/PrintArea/jquery.printarea.css"></script>-->
	
	
	<!-- JQuery Tooltip -->
	<script type="text/javascript" src="assets/js/jquery.qtip.js"></script>
	<!-- Data Tables -->
	 <link href="vendor/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
	 <link href="vendor/plugins/datatables/media/css/dataTables.plugins.css" rel="stylesheet" type="text/css">
	<script src="vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>
	<script src="vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
	
<script type="text/javascript">
 
	/*$('a[title]').qtip({ // Grab some elements to apply the tooltip to
		content: {
			text: false,
		},
		position: {
			  my: 'top left',
			  at: 'bottom right' // Offset it slightly from under the mouse
		},
		style: {
			tip: {
            corner: true,
            width: 24
			}
		}
	})*/
	

</script>

<script type="text/javascript">

  jQuery(document).ready(function() {
    "use strict";
  
    // Init Theme Core    
    Core.init();
  

    });

    // Init Admin Panels on widgets inside the ".admin-panels" container

    $('.admin-panels').adminpanel({
      grid: '.admin-grid',
      draggable: true,
      preserveGrid: true,
      // mobile: true,
      onStart: function() {
        // Do something before AdminPanels runs
      },

      onFinish: function() {
        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');
      },

      onSave: function() {
        $(window).trigger('resize');
      }
    });

    var highColors = [bgSystem, bgSuccess, bgWarning, bgPrimary];

  </script><!-- END: PAGE SCRIPTS -->


</body>



</html>