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
// get the sides from the textfields
$perimeterBase = $_POST['perimeterBase'];
$perimeterASide = $_POST['perimeterASide'];
$perimeterCSide = $_POST['perimeterCSide'];

	// calculate the perimeter
	$perimeter= $perimeterBase + $perimeterASide + $perimeterCSide
?>

<h3>Perimeter of Triangle:</h3>
The perimeter of the triangle is <?php echo "$perimeter" ?>cm