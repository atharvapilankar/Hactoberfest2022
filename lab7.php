<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Registration Form</title>

        <!-- Using Internal Styling -->
        <style>
                *{
                        margin:0;
                }

                .title__wrapper{
                        border: 2px solid black;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        padding: 20px;
                        border-radius: 20px;
                        margin-bottom: 20px;
                        margin-top: 25px;
                        width: 800px;
                        margin-left: 350px;
                        background-color: #f6f6f6;
                        box-shadow: 4px 8px #005580;
                }

                .title__wrapper > h1{
                        color: darkblue;
                }

                .form__wrapper{
                        /* border: 2px solid black; */
                        padding: 25px;
                }

                .content__wrapper{
                        padding: 30px;
                        display: inline-block;

                }

                .name__wrapper, .reg__wrapper, .year__wrapper, .dep__wrapper, .marks__wrapper{
                        margin-left: 40px;
                        margin-bottom: 30px;
                        border: 2px solid black;
                        padding: 15px;
                        background-color: whitesmoke;
                        border-radius: 28px;
                        box-shadow: 4px 6px  #005580;
                }

                .marks__wrapper{
                        display: inline-block;
                        justify-content: space-between;
                        margin-right: 60px;
                }

                .name__wrapper:hover, .reg__wrapper:hover, .year__wrapper:hover, .dep__wrapper:hover
                {
                        background-color: #b3e6ff;       
                }

                .name__wrapper > label, .reg__wrapper > label, .year__wrapper > label,
                .dep__wrapper > label, .marks__wrapper > label ,.marks__wrapper > p{
                        font-size: 20px;
                        font-weight: 800;
                        margin-right: 30px; 
                         
                }

                .marks__wrapper > p
                {
                        margin-bottom: 10px;
                }

                .content__wrapper{
                        display: flex;
                        float: left;
                }

                .button__wrapper{
                        margin-left: 600px;
                }

                .name__wrapper > input, .reg__wrapper>input, .year__wrapper>input,
                .dep__wrapper > select, .marks__wrapper > input
                {
                        background-color: whitesmoke;
                        border: none;
                        font-size: 15px;
                }

                #submit{
                        padding: 20px;
                        font-size: 20px;
                        font-weight: bold;
                        width: 200px;
                        border-radius: 40px;
                        box-shadow: 4px 6px #005580;
                }

                #submit:hover{
                        background-color: #b3e6ff;   
                }


        </style>
</head>

<!-- Body -->
<body style="background-color:  #66ccff">
        
        <!-- Title of the Webpage -->
        <div class="title__wrapper">
                <h1>Student Grade History Form</h1>
        </div>
        
        <!-- Form Wrapper -->
        <div class="form__wrapper">
                <form method="POST">
                        <!-- Container for the labels and inputs -->
                        <div class="content__wrapper">

                                <!-- Label for the name -->
                                <div class="name__wrapper">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" placeholder="Enter Name" name="name">
                                </div>

                                <!-- Label for the register number -->
                                <div class="reg__wrapper">
                                        <label for="reg">Register No. :</label>
                                        <input type="text" id="reg" placeholder="Enter Reg No." name = "reg">
                                </div>

                                <!-- Label for the Year -->
                                <div class="year__wrapper">
                                        <label for="year">Year:</label>
                                        <input type="text" id="year" placeholder="Enter Current Year " name="year">
                                </div>

                                <!-- Label for the department -->
                                <div class="dep__wrapper">
                                        <label for="dept">Department:</label>
                                        <select name="dept" id="dept">
                                                <option value="cse">CSE</option>
                                                <option value="ece">ECE</option>
                                                <option value="eee">EEE</option>
                                                <option value="civil">CIVIL</option>
                                        </select>
                                </div>
                        </div>

                        <!-- Marks wrapper -->
                        <div class="marks__wrapper">
                                        <p>Enter the marks:</p>

                                        <div class="marks__wrapper">
                                        <label for="m1">Marks1:</label>
                                        <input type="text" id="m1" placeholder="Out of 10" name="m1">
                                        </div>

                                        <div class="marks__wrapper">
                                        <label for="m2">Marks2:</label>
                                        <input type="text" id="m2" placeholder="Out of 10" name="m2">   
                                        </div>
                                        
                                        <div class="marks__wrapper">
                                        <label for="m3">Marks3:</label>
                                        <input type="text" id="m3" placeholder="Out of 10" name="m3">
                                        </div>
                                        
                                        <div class="marks__wrapper">
                                        <label for="m4">Marks4:</label>
                                        <input type="text" id="m4" placeholder="Out of 10" name="m4">
                                        </div>
                                        
                                        <div class="marks__wrapper">
                                        <label for="m5">Marks5:</label>
                                        <input type="text" id="m5" placeholder="Out of 10" name="m5">
                                        </div>
                                        
                                       <div class="marks__wrapper">
                                       <label for="m6">Marks6:</label>
                                        <input type="text" id="m6" placeholder="Out of 10" name="m6">
                                       </div>
                                        
                                        <div class="marks__wrapper">
                                        <label for="m7">Marks7:</label>
                                        <input type="text" id="m7" placeholder="Out of 10" name="m7">
                                        </div>
                                        
                                        <div class="marks__wrapper">
                                        <label for="m8">Marks8:</label>
                                        <input type="text" id="m8" placeholder="Out of 10" name="m8">
                                        </div>
                                        
                                        <div class="marks__wrapper">
                                        <label for="m9">Marks9:</label>
                                        <input type="text" id="m9" placeholder="Out of 10" name="m9">
                                        </div>
                                        
                                       <div class="marks__wrapper">
                                       <label for="m10">Marks10:</label>
                                        <input type="text" id="m10" placeholder="Out of 10" name="m10">    
                                        </div>
                        </div>

                        <!-- Button wrapper -->
                        <div class="button__wrapper">
                                <input type="submit" value="Calculate" name="submit" id="submit">
                        </div>
                        <br><br>

                        <!-- PHP -->
                        <?php
                        //Retrieve name from query string and store to a local variable

                        //Storing the name of the student
                        $nme = $_POST["name"];   

                        //Storing the reg no of the student
                        $reg = $_POST["reg"];  

                        //Storing the marks 0f the students.
                        $ma1 = intval($_POST["m1"]);

                        $ma2 = intval($_POST["m2"]);

                        $ma3 = intval($_POST["m3"]);

                        $ma4 = intval($_POST["m4"]);

                        $ma5 = intval($_POST["m5"]);

                        $ma6 = intval($_POST["m6"]);

                        $ma7 = intval($_POST["m7"]);

                        $ma8 =intval( $_POST["m8"]);

                        $ma9 = intval($_POST["m9"]);

                        $ma10 = intval($_POST["m10"]);


                        //Calculating and printing the total marks scored by the student.
                        $total = $ma1 + $ma2 + $ma3 + $ma4 + $ma5 + $ma6 + $ma7 + $ma8 + $ma9 + $ma10;
                        echo "<p style='color:#005580; text-align:center; font-size: 24px; font-weight:bold'>The total marks scored by $nme ($reg) is " . $total . "</p><br>";

                        
                        //Calculating and displaying the grade
                        if(($total) < 50) {
                                echo "<p style='color:#005580; text-align:center; font-size: 24px; font-weight:bold'>The Student has Falied!". "</p><br>";
                        } else if(($total) >= 50 and ($total) < 60) {
                                echo "<p style='color:#005580; text-align:center; font-size: 24px; font-weight:bold'>The Student has scored E Grade!". "</p><br>";
                        } else if(($total) >= 60 and ($total) < 70) {
                                echo "<p style='color:#005580; text-align:center; font-size: 24px; font-weight:bold'>The Student has scored D Grade!". "</p><br>";
                        } else if(($total) >= 70 and ($total) < 80) {
                                echo "<p style='color:#005580; text-align:center; font-size: 24px; font-weight:bold'>The Student has scored C Grade!". "</p><br>";
                        } else if(($total) >= 80 and ($total) < 90) {
                                echo "<p style='color:#005580; text-align:center; font-size: 24px; font-weight:bold'>The Student has scored B Grade!". "</p><br>";
                        } else if(($total) >= 90 and ($total) < 95) {
                                echo "<p style='color:#005580; text-align:center; font-size: 24px; font-weight:bold'>The Student has scored A Grade!". "</p><br>";
                        } else if(($total) >= 95) {
                                echo "<p style='color:#005580; text-align:center; font-size: 24px; font-weight:bold'>The Student has scored S Grade!". "</p><br>";
                        }

                        //Calculating and displaying the average marks of the student
                        $avg = $total/10;
                        echo "<p style='color:#005580; text-align:center; font-size: 24px; font-weight:bold'>The Average marks scored by $nme ($reg) is " . $avg . "</p><br>";
                        ?>      
                </form>  
        </div>    
</body>
</html>