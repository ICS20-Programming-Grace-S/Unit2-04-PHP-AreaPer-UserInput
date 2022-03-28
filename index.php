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
    <title>Area of a Triangle in PHP</title>
  </head>
  <body>
    
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Area of a Triangle in PHP</h1>";
			echo "<center><h3> Calculate the area of a triangle.</h3><center>";
		?>

		<!-- form to get the base and height from the user -->
    <form action="./triangle.php" method="post" target="results">
      <label for=lblBase">Base (cm):</label>
      <input type="text" id="base" placeholder="Enter the base (cm)" name="base"><br><br>
      <label for="lblHeight">Height (cm):</label>
      <input type="text" id="height" placeholder="Enter the height (cm)" name="height"><br><br>
      <input type="submit" value="Calculate Area">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The area of the triangle is  " + $area + cm<sup>2</sup>
	    </iframe>
	</body>
</html>