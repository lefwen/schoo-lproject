<?php
// Define an array of colors
$colors = array("red", "green", "blue", "yellow");

// Get a random color from the array
$randomColor = $colors[array_rand($colors)];

// Display the random color
echo $randomColor;
?>