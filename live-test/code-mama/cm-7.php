<?php

// Substring Occurrences Counting

// Problem Statement
// Write a program to create a function that finds and counts all occurrences of a substring within a larger string. For instance, in the string "abababab," the substring "ab" appears four times.

// Input
// The input consists of two strings.

// Output
// The output will print the number of occurrences of a substring which will be an integer.


// list($string, $find) = explode(" ", trim(fgets(STDIN)));

$string = "abababab"; 
$find = 'ab';

function countSubstringOccurrences($string, $find)
{
    $count = 0;
    $offset = 0;

    while (($pos = strpos($string, $find, $offset)) !== false) {
        $count++;
        $offset = $pos + strlen($find);
    }

    return $count;
}

echo $count = countSubstringOccurrences($string, $find);

?>
<?php

// String Rotation

// Problem Statement
// Write a program in c++ to create a function that checks if one string is a rotation of another. For example, "waterbottle" is a rotation of "erbottlewat" because you can rotate it to get the original string.

// Input
// The input consists of two strings.

// Output
// The output will print either "True" or "False".


// list($firstString, $secondString) = explode(" ", trim(fgets(STDIN)));

$firstString = "waterbottle"; 
$secondString = "erbottlewat";


function isRotation($firstString, $secondString)
{
    // Check if the lengths of the two strings are the same
    if (strlen($firstString) != strlen($secondString)) {
        return false;
    }

    // Concatenate the first string with itself
    $concatenatedStr = $firstString . $firstString;

    // Check if the second string is a substring of the concatenated string
    if (strpos($concatenatedStr, $secondString) !== false) {
        return true;
    }

    return false;
}


if (isRotation($firstString, $secondString)) {
    echo "True";
} else {
    echo "False";
}