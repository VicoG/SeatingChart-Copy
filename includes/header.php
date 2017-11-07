<?php ob_start() ?>
<!DOCTYPE html>

<html>



<head>

  <!-- Meta, title, CSS, favicons, etc. -->

  <meta charset="utf-8">
  <title>Seating Chart</title>
  <meta name="Steve DiStefano" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Font CSS (Via CDN) -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
	
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
	<!-- Tooltip CSS file -->
	<link type="text/css" rel="stylesheet" href="assets/jquery.qtip.css" />
	
	<!-- Admin Forms CSS -->
	<link rel="stylesheet" type="text/css"  media="all" href="assets/admin-tools/admin-forms/css/admin-forms.min.css">
	<link rel="stylesheet" type="text/css" href="assets/mods.css">
	
	
<style>
.qtip-tipped .qtip-content{
	font-size: 1.2em;
	color: black;
	font-weight: bold; 
}
</style>

</head>

<?php //require "includes/db.php";?>
<?php require "includes/session.php";?>


	
 <header class="navbar navbar-fixed-top navbar-shadow">

  <div class="navbar-branding">

	<a class="navbar-brand" href="home.php">
	  <b class="text-success">SEATING</b> Chart <sub> v3.1 </sub>
	</a>
	<span id="toggle_sidemenu_l" class="ad ad-lines"></span>
  </div>
	  
  <ul class="nav navbar-nav navbar-right">
	<li class="dropdown menu-merge">
	  <a href="##" class="dropdown-toggle fw600 p15" id="dropdownMenu1" data-toggle="dropdown">
		<span class="text-system ">  Welcome <?php echo htmlentities($_SESSION["username"]); ?></span>
		<span class="caret caret-tp hidden-xs"></span>
	  </a>
	  <ul class="dropdown-menu list-group dropdown-persist w250" role="menu" aria-labelledby="dropdownMenu1">
		<li class="list-group-item">
			<?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { 
				echo '<li><a href="admin.php"><span class="fa fa-tachometer text-system pl20" ></span><span class="sidebar-title text-system pl10"> Administrator MENU </span></a></li>';
			 } ?>
		</li>
		<li class="dropdown-footer">
		  <a href="logout.php">
		  <span class="fa fa-power-off pr5"></span> Logout </a>
		</li>
	  </ul>
	</li>
  </ul>
</header>