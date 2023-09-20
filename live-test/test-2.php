<?php 
//1. Create a PHP script using a loop to print all even numbers between 1 and 10.
for($x=1; $x<=10;$x++){

    if($x % 2 == 0){
        echo "$x <br>";
    }
}

//2. Declare a function named 'greet' that takes one parameter, 'name'. The function should print a greeting message with the name passed to it when it is called.
 
function greet($name){

    echo "<br>Hello $name !";
}

greet("Kazi");

//3. Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.
function factorial($x){
    if($x == 0){
        return 1;
    }
    return $x * factorial($x - 1);
}
$n=5;
$fact = factorial($n);

echo "<br>Factorial of $n = $fact";


//4 . Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.

$num = 10;  
echo "<br>Function to print fibonacci series: up to 10:";  
echo "<br>";
/* function for fibonacci series. */  
function series($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (series($num-1) + series($num-2));  
}   
}  
/* Call Function. */  
for ($i = 0; $i <$num; $i++){  
echo series($i);  
echo "<br>";  
}  

