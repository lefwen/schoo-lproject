 <?php
 // Random number between 1 and 10
 $randomNumber = rand(1, 10);
 // Random word from an array of words
 $words = array("apple", "banana", "orange");
 $randomWord = $words[rand(0, count($words) - 1)];
 // Print the result
 echo "The random number is: $randomNumber\n";
 echo "The random word is: $randomWord";
 ?>