<?php
//Task 1:

//Write a PHP code to read the content of a text file and display it on the webpage.

//Use the following template:



$file = "./data/file.txt";

// Open the file

$file=fopen($file, "r") or die("Unable to open file!");
//$user_data = file_get_contents($file);

// Read the content of the file
$data=fgets($file);

// Close the file
fclose($file);

// Display the content

echo $data;
//var_dump($user_data);
?>
<?php
//Task 2: .

//Write a PHP code to append new data to an existing text file.

//Use the following template:


$file = "./data/file.txt";

$data = " Good bye ";

 // Open the file in append mode
 $file=fopen($file, "a") or die("Unable to open file!");

// Write the data to the file
fwrite($file, $data);
// Close the file
fclose($file);

?>