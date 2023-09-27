<?php
//Task 4: Multidimensional Array
/* Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. */
$studentGrades = [
    'Student_1' => ['Math' => 81, 'English' => 91, 'Science' => 75],
    'Student_2' => ['Math' => 85, 'English' => 78, 'Science' => 95],
    'Student_3' => ['Math' => 75, 'English' => 85, 'Science' => 85],
];

function calculateGradesAverage( $studentGrades ) {

    foreach ($studentGrades as $student => $grades ) {
         $total = array_sum( $grades );
        $count = count( $grades );
        $average=number_format((float)$total/$count, 2, '.', '');      
       
            $gpa=null;
            $letterGrade="";
            if($average>=80){ 
                $letterGrade="A "; 
               $gpa=4.00;
            }
            else if($average>=70 && $average<80){ 
                $letterGrade="A-"; 
                $gpa=3.50;
                
            }
            else if($average>=60 && $average <70){ 
                $letterGrade="B+"; 
                $gpa=3.25;
                
            }
            else if($average>=50 && $average <60){ 
                $letterGrade="B"; 
                $gpa=3.00;
               
            }
            else {
                $letterGrade="F"; 
                $gpa=0;   
            }
        
        echo "$student :\n";
        foreach($grades as $subject => $number){
            
                    $subjectGpa=null;
                    $subjectLetterGrade="";
                    if($number>=80){ 
                        $subjectLetterGrade="A "; 
                        $subjectGpa=4.00;
                    }
                    else if($average>=70 && $average<80){ 
                        $subjectLetterGrade="A-"; 
                        $subjectGpa=3.50;
                        
                    }
                    else if($average>=60 && $average <70){ 
                        $subjectLetterGrade="B+"; 
                        $subjectGpa=3.25;
                        
                    }
                    else if($average>=50 && $average <60){ 
                        $subjectLetterGrade="B"; 
                        $subjectGpa=3.00;
                    
                    }
                    else {
                        $subjectLetterGrade="F"; 
                        $subjectGpa=0;   
                    }
            echo "$subject => Marks:  $number, GP: $subjectGpa, LG: $subjectLetterGrade \n";
            
        }

        echo "Average : $average, GPA: $gpa, Grade: $letterGrade\n";
        
    }
}

// Call the function to calculate and print average grades
calculateGradesAverage($studentGrades);
