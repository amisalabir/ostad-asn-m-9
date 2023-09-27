<?php
//Task 1: String Manipulation
/*  Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:  */
$text="The quick brown fox jumps over the lazy dog.";

//Convert the string to all lowercase.
function textlower($text){
    
    echo "Lower Case: ".strtolower($text)."\n";
    //Replace "brown" with "red" in the string.
    $search = "brown";
    $replace = "red";
    $newString = str_replace($search,$replace,$text);
    echo "String Replaced: ".$newString;

}

textlower($text);