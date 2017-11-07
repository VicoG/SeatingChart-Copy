
<?php //require "includes/db.php";?>
<?php //require "includes/functions.php";?>

		
<?php

	$room= (string) $_GET["room"];
	$building= (string) $_GET["building"];
	$result= getToolTip($room, $building);
	$commentResults = getNotes($room, $building);
	
	echo 
	   '<h3 class="text-info text-center"> Room ' . $room . '</h3>';
	
while($row = mysqli_fetch_assoc($result)) { 
	echo
	    '<p class="text-center" style=" font-weight: bold; font-size: 1.2em">' .  $row["name"] . '</>';
		if($row["phone"] !=""){ echo '<h5> Phone: ' . $row["phone"] . '</h5>'; }
}
while($row = mysqli_fetch_assoc($commentResults)) { 
	if($row["tesa"] !=""){ echo '<p>TESA: ' . $row["tesa"] . '</p>';}
	if($row["notes"] !=""){ echo '<h4> Notes:</h4>
								 <p>' .  $row["notes"] . '</p>'; }
}

?>

