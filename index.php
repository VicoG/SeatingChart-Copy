

<body class="dashboard-page">

  <div id="main">

    <!-- Header -->
   <?php include "includes/header.php"; ?>
   <?php //include "includes/functions.php"; ?>

	<!-- Confirm Logged in -->
	<?php //confirm_logged_in(); ?>
	
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

    
<?php

	if($_GET['build'] == "list"){
		include "list.php";
		
	}else{
		include "build" . $_GET['build'] . ".php";
	}
?>	

</section>					
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
        <div class="modal-content">
		</div>
  </div>
</div>          


<?php include "includes/footer.php"; ?>

<script type="text/javascript">

$('[title]').each(function(){
	var roomNum = $(this).attr('title');
	var buildingNum= "<?php echo $_GET['build']; ?>"
	$(this).qtip({ // Grab some elements to apply the tooltip to
		content: {
			 //attr: 'data-original-title',
			text: 'Loading...', // The text to use whilst the AJAX request is loading
			ajax: {
				url: 'toolTip.php', // URL to the local file
				type: 'GET', // POST or GET
				data: {room: roomNum,
					   building: buildingNum
					   } // Data to pass along with your request
			}
		},
		position: {
			viewport: $('#maps'),
			adjust: {
           	 method: 'shift'
			},
			my: 'right center',
			at: 'left center',
			target: 'event'
						
		},
		 style: {
			classes: 'qtip-light qtip-tipped',
		},
		 show: {
            effect: function() {
                $(this).fadeTo(200, 1);
            }
        },
		hide: {
			effect: function() {
				$(this).slideUp();
			}
		}
	});
});
$('.qtip:visible').qtip('reposition');

$( document ).ready(function() {
    $('#myModal').on('hidden.bs.modal', function () {
          $(this).removeData('bs.modal');
    });
});

var printSVG = function(){
	var popUpAndPrint = function()
	{
		var container = $('#maps');
		var width = parseFloat(mySVG.getAttribute("width"))
		var height = parseFloat(mySVG.getAttribute("height"))
		var printWindow = window.open('', 'PrintMap',
		'width=' + width + ',height=' + height);
		printWindow.document.writeln($(container).html());
		printWindow.document.close();
		printWindow.print();
		printWindow.close();
	};
	setTimeout(popUpAndPrint, 500);
};

</script>


