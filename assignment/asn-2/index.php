<?php 
/* Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also. */

echo "<h1>Task 1:</h1>";
echo "Finding Even Number using function & for loop :<br>"; 
$x=1; $y=20;
function evenNumberFor($x,$y){
    for($x;$x<=$y;$x++){
        if($x%2==0){
            echo $x;
            if($x==$y){
                echo ".";
            }else{
                echo ",";
            }
        }
    }
}

evenNumberFor($x,$y);

echo "<br>Finding Even Number using function & Do Loop :<br>"; 
function evenNumberDo($x,$y){
    do{
        if($x%2==0){
            echo $x;
            if($x==$y){
                echo ".";
            }else{
                echo ",";
            }
        } 
        $x++;
    } while($x<=$y);
}

evenNumberDo($x,$y);

echo "<br>Finding Even Number using function & Do-While Loop :<br>"; 
function evenNumberWhile($x,$y){
    while($x<=$y){
        if($x%2==0){
            echo $x;
            if($x==$y){
                echo ".";
            }else{
                echo ",";
            }
        } 
        $x++;
    } 
}

evenNumberWhile($x,$y);

/* Task 2: Skip Multiples of 5
Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
loop encounters a multiple of 5, it should skip that number using the continue statement and
continue to the next iteration.
 */
echo "<h1>Task 2:</h1>";
echo "Skipping multiples of 5 in loop from given range :<br>"; 
$x=1; $y=50;

for($x;$x<=$y; $x++){

    if($x%5==0){
        continue;
    }
    echo "$x \n";

}

/* 
Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement. */
echo "<h1>Task 3:</h1>";
echo "Break on Condition in 10 Fibonacci numbers :<br>";
$count = 10;  
$num1=1; 
$num2=0; 
for($i=0;$i<$count;$i++){
echo " $num2 ".PHP_EOL;
$temp=$num1+$num2;  
$num1=$num2;  
$num2=$temp; 
if($num2>100){
    break;
}	
}

/* Task 4: Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function. */

echo "<h1>Task 4:</h1>";
echo "Fibonacci Series printing up to 15 Number using a Function :<br>";

$num = 15;  
function fiboSeries($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (fiboSeries($num-1) + fiboSeries($num-2));  
}   
}  

/* Call Function. */  
for ($i = 0; $i <$num; $i++){  
echo fiboSeries($i);  
echo " ";  
}  