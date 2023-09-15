<!doctype html>
<html lang="us">

<head>
    <meta charset="utf-8">
    <title>Task 3: Grade Calculator</title>
    <link href="../../jquery-ui/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/style.css">
</head>

<body>

    <div class="top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="text-center">
                        <u>
                            <h2>Grade Calculator</h2>
                        </u>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <form method="post" action="">
                    <div class="row">
                        <div class="col text-center">
                            <label for="bengali">
                                <h5>Bengali</h5>
                            </label>
                            <hr>
                            <input type="number" name="bengali" class="form-control" placeholder="Enter mark">
                        </div>
                        <div class="col text-center">
                            <label for="english">
                                <h5>English</h5>
                            </label>
                            <hr>
                            <input type="number" name="english" class="form-control" placeholder="Enter mark">
                        </div>
                        <div class="col text-center">
                            <label for="math">
                                <h5>Math</h5>
                            </label>
                            <hr>
                            <input type="number" name="math" class="form-control" placeholder="Enter mark">
                        </div>
                    </div>
                    <div class="text-center submit" id="">
                        <button type="submit" class="btn btn-primary">Get Result</button>
                    </div>

                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['bengali'])) {
                        echo " <div id=\"result\">";
                        $total=0;
                        $totalPoint=0;
                        $letterGrade=array(); 
                        $gradePoint=array();

                        foreach ($_POST as $key => $value) {
                            //echo "$key=$value";
                            if($value>=80){ 
                                $letterGrade[$key] = "A"; 
                                $gradePoint[$key] = 4; 
                                $totalPoint=$totalPoint+4;
                            }
                            else if($value>=70 && $value <80){ 
                                $letterGrade[$key] = "B"; 
                                $gradePoint[$key] =3.5; 
                                $totalPoint=$totalPoint+3.5;
                            }
                            else if($value>=60 && $value <70){ 
                                $letterGrade[$key] = "C"; 
                                $gradePoint[$key] = 3; 
                                $totalPoint=$totalPoint+3;
                            }
                            else if($value>=50 && $value <60){ 
                                $letterGrade[$key] = "D"; 
                                $gradePoint[$key] = 2; 
                                $totalPoint=$totalPoint+2;
                            }
                            else {
                                $letterGrade[$key] = "F"; 
                                $gradePoint[$key] = 0; 
                                $totalPoint=$totalPoint+0;
                            }
   
                            $total=$total+$value;
                            
                        }
                     
                        $average=number_format((float)$total/3, 2, '.', '');
                        $gpa=number_format((float)$totalPoint/3, 2, '.', '');
                        $grade="";
                        // Letter Grade Evaluaton on Average

                        if($average>=80){ 
                            $grade = "A"; 
                          
                        }
                        else if($average>=70 && $average<80){ 
                            $grade  = "B"; 
                            
                        }
                        else if($average>=60 && $average <70){ 
                            $grade  = "C"; 
                            
                        }
                        else if($average>=50 && $average <60){ 
                            $grade  = "D"; 
                           
                        }
                        else {
                            $grade  = "F"; 
                           
                        }

                        $gradeSheet = <<<GRADESHEET
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered" width="100%">
                       <tbody>
                          <tr>
                             <td>Roll No</td>
                             <td>OSTAD-1256</td>
                             <td>Registration No</td>
                             <td> [N/A] </td>
                          </tr>
                          <tr>
                             <td>Name of Student</td>
                             <td colspan="3">KAZI SALA UDDIN</td>
                          </tr>
                          <tr>
                             <td>Course:</td>
                             <td colspan="3"> Web Development with PHP & Laravel</td>
                          </tr>
                          <tr>
                             <td>Result :</td>
                             <td>GPA = $gpa </td>
                             <td>Average</td>
                             <td>$average</td>
                          </tr>
                          <tr>
                             <td>Grade :</td>
                             <td> $grade </td>
                             <td>Total Marks</td>
                             <td><span id="i_name">$total</span></td>
                          </tr>
                       </tbody>
                    </table>
                    <div class="alert alert-info text-center" id="err_msg" style="display:none"></div>
                    <div class="text-center">
                       <h4>Subject-Wise Grade/Marks</h4>
                    </div>
                    <table class="table table-striped table-bordered" width="100%">
                       <thead class="btn-success">
                          <tr>
                             <th>Subject Code</th>
                             <th>Subject Name</th>
                             <th>Marks</th>
                             <th>Letter Grade</th>
                             <th>Grade Point</th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td class="cent-align">101</td>
                             <td><span class="code_101">BANGLA</span></td>
                             <td class="text-center"> $_POST[bengali] </td>
                             <td class="text-center"> $letterGrade[bengali] </td>
                             <td class="text-center"> $gradePoint[bengali] </td>
                          </tr>
                          <tr>
                             <td class="cent-align">102</td>
                             <td><span class="code_102">ENGLISH</span></td>
                             <td class="text-center"> $_POST[english] </td>
                             <td class="text-center"> $letterGrade[english] </td>
                             <td class="text-center"> $gradePoint[english] </td>
                          </tr>
                          <tr>
                             <td class="cent-align">103</td>
                             <td><span class="code_103">MATHEMATICS</span></td>
                             <td class="text-center"> $_POST[math] </td>
                             <td class="text-center"> $letterGrade[math] </td>
                             <td class="text-center"> $gradePoint[math] </td>
                          </tr>
                       </tbody>
                    </table>
                    <div class="divpadding"></div>
                 </div>

GRADESHEET;
                        echo $gradeSheet;
                        echo " </div>";
                    } ?>



            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <footer id="footer">
        <div class="container footer">
            <div class="row">
                <div class="col-md-12 text-center">

                    <a href="../../index.php">Home</a>

                </div>
            </div>
        </div>
    </footer>

    <script src="../../jquery-ui/external/jquery/jquery.js"></script>
    <script src="../../jquery-ui/jquery-ui.js"></script>

</body>

</html>