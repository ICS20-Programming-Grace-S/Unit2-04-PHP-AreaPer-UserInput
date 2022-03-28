<?php
	// get the base and height from the textfields
	$base = $_POST['base'];
	$height = $_POST['height'];

	// calculate the area
	$area = $base * $height / 2
?>
<h3>Results:</h3>
The area of the triangle is <?php echo "$area" ?>cm<sup>2</sup>.