<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Grace S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Area and Perimeter of a Triangle in PHP</title>
  </head>
  <body>
    
		<!-- PHP echo to print the html to the page -->
    <?php 
			echo "<h1>Area and Perimeter of a Triangle in PHP</h1>";
			echo "<center><h3> Calculate the area of a triangle.</h3><center>";
		?>
    <center><h3><?php echo "A = bxh/2.";?></h3><center>
      
      <center><h3><?php echo "Calculate the perimeter of a triangle.";?></h3><center>
        <center><h3><?php echo "P = a+b+c.";?></h3><center>

		<!-- Form to get the base and height from the user -->
    <form action="./triangle.php" method="post" target="areaResults">
      <label for="aBase">Base (cm):</label>
      <input type="text" id="base" placeholder="Enter the base (cm)" name="base"><br><br>
      <label for="aHeight">Height (cm):</label>
      <input type="text" id="height" placeholder="Enter the height (cm)" name="height"><br><br>
      <input type="submit" value="Calculate Area"><br>

        
      <!-- Form to the the base and two sides from user input.-->
        <label for="perBase"><br>Base (cm):</label>
        <input type="text" id="perimeterBase" placeholder="Enter the base (cm)" name="perimeterBase"><br><br>
        <label for=aSide">A Side (cm):</label>
        <input type="text" id="perimeterASide" placeholder="Enter the A side (cm)" name="perimeterASide"><br><br>
        <label for=cSide">C Side (cm):</label>
        <input type="text" id="perimeterCSide" placeholder="Enter the C side (cm)" name="perimeterCSide"><br><br>
        <input type="submit" value="Calculate Perimeter">
      </form>
          
        <!-- iframe for the results to show on the web page. -->
			<iframe id="areaResults" name="areaResults">			
				The area of the triangle is  " + $area + cm<sup>2</sup>
        The perimeter of the triangle is  " + $perimeter + cm
	    </iframe>
	</body>
</html>