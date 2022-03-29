<?php
	// get the base and height from the textfields
	$base = $_POST['base'];
	$height = $_POST['height'];

	// calculate the area
	$area = $base * $height / 2
?>
<h3>Area of Triangle:</h3>
The area of the triangle is <?php echo "$area" ?>cm<sup>2</sup>.

<?php

// get the base and height from the textfields
$perBase = $_POST['perimeterASide'];
$perASide = $_POST['perimeterASide'];
$perBSide = $_POST['perimeterBSide'];

	// calculate the area
	$perimeter = $perBase + $perAside + $perBside
?>
<h3>Area of Triangle:</h3>
The perimeter of the triangle is <?php echo "$perimeter" ?>cm