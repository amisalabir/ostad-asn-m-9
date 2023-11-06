<?php
/*
Problem Statement
Write a program to create a function that takes two arguments: the original price and the discount percentage as integers and returns the final price after the discount.

Input
The input consists of two integers: the original price and the discount.

Output
The output will print the final price after discount which will be a float number.

Constraints
*/
    fscanf(STDIN,"%d %d", $a, $b);

    function discountPrice(int $x, int $y){
        
        $reducedPrice = $x*($y/100);
        echo "Price: ".number_format( $x-$reducedPrice, 2 );
        
    }
    
    discountPrice($a,$b);
?>
<?php
/*
Problem Statement
Suppose, you work in a toy car workshop, and your job is to build toy cars from a collection of parts. Each toy car needs 4 wheels, 1 car body, and 2 figures of people to be placed inside. Write a program which will calculate how many complete toy cars can be made, given the total number of wheels, car bodies and figures available.

Input
The input consists of three integers: number of wheels, car bodies, figures.

Output
The output will print the number of cars.
*/
   
    fscanf(STDIN,"%d %d %d", $a, $b, $c);
    function toyMade($wheels,$body,$figures){
        $wheel = 4;
        $figure = 2;
        $toyByWheel = floor($wheels/$wheel);
        $toyByFigure = floor($figures/$figure);
        return min($toyByWheel,$body,$toyByFigure);
    }
    echo toyMade($a,$b,$c);