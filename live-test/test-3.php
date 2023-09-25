<?php
// Task 1: Create an associative array called $student with the following key-value pairs:

$student=array('name' => 'Alice', 'age' => 22, 'grade' => 'A');
// Print the age of the student.
echo $student['age']."\n";

// Task 2: Create an associative array called $student with the key-value pairs:
$student=array('name' => 'Alice', 'age' => 22, 'grade' => 'A');
// Check if the 'grade' key exists in the array using array_key_exists() and print the result.
if(array_key_exists("grade", $student)) {
    echo "Key 'grade' exists in the array.";
}
 
// Task 3:Create an array called $numbers with values 100, 200, 50, 40, 50.
$numbers=array(100, 200, 50, 40, 50);
// Use a foreach loop to print each value in the array.
foreach($numbers as $key=>$value){
    echo "$value \n";
}

 
// Task 4: Create an array called $names with values 'Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', ‘Moni’.
$names=array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');
// Use the array_filter() function to filter names that start with the letter 'M'.
// Print the filtered names.
$filterVar = null;
function filterFunction($v) {
    global $filterVar;

    if (substr($v,0,1) == $filterVar) {
        return $v;
    }
}
$filterVar = 'M';
$filteredNames = array_filter($names,'filterFunction');
print_r($filteredNames);
 

// Task 5: Create a string variable $originalString with the value 'Hello, World!'.
$originalString="Hello World!";

// Use the strrev() function to reverse the string.
$reverseString=strrev($originalString);
// Print the reversed string.
echo $reverseString;