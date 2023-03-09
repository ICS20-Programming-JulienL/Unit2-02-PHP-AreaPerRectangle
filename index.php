<!DOCTYPE html>
<html lang="en">
	<head>
    <!--Meta Data-->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Julien Lamoureux">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
    <title>Area & Perimeter of Rectangle in PHP</title>
	</head>
	<body>
    <!--Header and Text-->
    <h1><?php echo 'Area & Perimeter of a Rectangle'; ?></h1>
    <!--Variables-->
		<?php 
			$length = 6;  
		 	$width = 12; 
			echo "<p>The rectangle has the sides $length cm and $width cm.</p>"; ?>		
		<?php 
		 echo "<p>The area of a rectangle with dimensions $length cm x $width cm = " . ($length * $width) . "cm<sup>2</sup></p>";  
		  ?>  
    <?php 
		 echo "<p>The perimeter of a rectangle with dimensions $length cm x $width cm = " . ($length * 2 + 2 * $width) . "cm</p>";  
		  ?>  
	</body>
</html>