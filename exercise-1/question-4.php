<?php 
	
// require_once('vendor/autoload.php'); 

// Create an ImagickDraw object 
$draw = new \ImagickDraw(); 

// Set the opacity of image 
$draw->setStrokeOpacity(1); 

// Set the color of image 
$draw->setStrokeColor('Green'); 

// Set the stroke width 
$draw->setStrokeWidth(4); 

// Set the fill color 
$draw->setFillColor('Red'); 

// Array contains points 
$points = [ 
	['x' => 50 * 6, 'y' => 10 * 5], 
	['x' => 20 * 7, 'y' => 50 * 5], 
	['x' => 60 * 8, 'y' => 50 * 5], 
	['x' => 70 * 3, 'y' => 15 * 5], 
]; 

// Draw the polygon with gicen points 
$draw->polygon($points); 

// Create an Imagick object 
$image = new \Imagick(); 

// Ctrate an image of given size 
$image->newImage(500, 300, 'white'); 

// Set the image format 
$image->setImageFormat("png"); 

// Draw the image 
$image->drawImage($draw); 

header("Content-Type: image/png"); 

// Display the output image 
echo $image->getImageBlob(); 
?> 

