<?php
//Task 1: Variable
echo "Task 1: Variable: Age = ";
$age=37;
echo $age;
echo "<br>";

//Task 2: Constant
echo "Task 2: Constant(PI): ";
define("PI",3.14159);
echo PI;
echo "<br>";


//Task 3: Printing Output
echo "Task 3: Printing Output: ";
echo "\n Hello, welcome to the world of PHP programming!";
echo "<br>";


//Task 4: Arithmetic Operations
echo "Task 4: Arithmetic Operations: Calculation of [((20 + 5) * 3) / 4)]: ";
$result=((20 + 5) * 3) / 4;
echo $result;
echo "<br>";

//Task 5: Conditional Operators
echo "Task 5: Conditional Operators (Assigned Numeber 75): ";
$marks=75;
if($marks>=60 && $marks<=80){
    echo "Passed";
}
else{
    echo "Failed";
}

$result=10 + 5  - 3 * 4;
echo $result;
?>