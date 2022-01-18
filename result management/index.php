<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="p-3">
    <form name="Student" method="POST" action="studentdbs.php">
        <div class="container">
            <div class="row">

            <!-- </div> -->
        <!-- </div> -->
        <div class="col-sm-4">
            <h2 class="bg-secondary font-weight-bold text-white"><b>Course Information</b></h2>
            <hr class="mb-3">
        <!-- </div> -->
        <table border=20 class="btn-secondary display-8 font-weight-bold">
            <tr>
                <td>Course ID:</td><td><select name="courseid" id="iCourseid" style="width: 200px; margin:2px; text-align:right">
                    <option value="space"></option>
                    <option value="STEM">STEM04954</option>
                    <option value="Legal Studies">LS905865</option>
                    <option value="Medical Science">Med290045</option>
                    <option value="Education">Edu390045</option>
                    <option value="Business">Bus490045</option>
                    <option value="Management">Man590045</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Faculty:</td><td><select name="faculty" id="iFaculty" style="width: 200px; margin:2px; text-align:right">
                    <option value="space"></option>
                    <option value="STEM">Science Technology Engineering & Maths</option>
                    <option value="Legal Studies">Law School</option>
                    <option value="Medical Science">Medical School</option>
                    <option value="Hospitality">Social Science</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>School:</td><td><select name="school" id="iSchool" style="width: 200px; margin:2px; text-align:right">
                    <option value="space"></option>
                    <option value="BTS">Business Information</option>
                    <option value="ComputerScience">Computer Science</option>
                    <option value="Maths">Maths</option>
                    <option value="SoftwareEng">Software Engineering</option>
                    <option value="Games">Computer Games</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Attendance:</td><td><select name="attendance" id="iAttendance" style="width: 200px; margin:2px; text-align:right">
                    <option value="space"></option>
                    <option value="fulltime">Full Time</option>
                    <option value="parttime">Part Time</option>
                    <option value="distance">Distance</option>
                    <option value="sandwich">Sandwich Programme</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Academic_Year</td><td><select name="academic" id="iAcademic" style="width: 200px; margin:2px; text-align:right">
                    <option value="space"></option>
                    <option value="2018-2019">2018 - 2019</option>
                    <option value="2019-2020">2019 - 2020</option>
                    <option value="2020-2021">2020 - 2021</option>
                    <option value="2021-2022">2021 - 2022</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Year Level</td><td><select name="yearlevel" id="iYearLevel" style="width: 200px; margin:2px; text-align:right">
                    <option value="space"></option>
                    <option value="Zero">Year 0</option>
                    <option value="parttime">Year 1</option>
                    <option value="distance">Year 2</option>
                    <option value="sandwich">Year 3</option>
                    <option value="sandwich">Year 4</option>
                    <option value="sandwich">Year 5</option>
                    </select>
                </td>
            </tr>
        </table>
        <br>

        <table border=20 class="btn-secondary display-8 font-weight-bold">
            <tr><td>Course Tutor:</td><td><input type="text" name="tutor" id="iTutor" style="width: 200px; text-align:right" value=" "></td></tr>

            <tr><td>Course_Code:</td><td><input type="text" name="coursecode" id="iCoursecode" style="width: 200px; text-align:right" value=" "></td></tr>

            <tr><td>Course_Title:</td><td><input type="text" name="coursetitle" id="iCoursetitle" style="width: 200px; text-align:right" value=" "></td></tr>

            <tr><td>Undergraduate:</td><td><input type="text" name="undergraduate" id="iUndergraduate" style="width: 200px; text-align:right" value=" "></td></tr>

            <tr><td>Postgraduate:</td><td><input type="text" name="postgraduate" id="iPostgraduate" style="width: 200px; text-align:right" value=" "></td></tr>

            <tr><td>Research:</td><td><input type="text" name="research" id="iResearch" style="width: 200px; text-align:right" value=" "></td></tr>
        </table>
        </div>
        <br>

        <div class="col-sm-4">
            <h2 class="bg-secondary font-weight-bold text-white"><b>Student Details</b></h2>
            <hr class="mb-3">
                <table border=20 class="btn-secondary display-8 font-weight-bold">
                
                   <tr><td>Student_ID:</td><td><input type="text" name="StudentID" id="playerxid" style="width:200px; text-align:right" value=" "></td></tr>
                   
                   <tr><td>Title:</td><td><select name="title" id="iTitle" style="width:200px; text-align:right">
                        <option value="space"></option>
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Doctor">Dr</option>
                        <option value="Professor">Prof</option>
                        <option value="Rev">Rev</option>
                        <option value="Captain">Capt</option>
                </select></td></tr>

                <tr><td>Firstname:</td><td><input type="text" name="firstname" id="ifirstname"
                placeholder="firstname" style="width:200px; text-align:right" value=" " required></td></tr>

                <tr><td>Surname:</td><td><input type="text" name="surname" id="isurname"
                placeholder="surname" style="width: 200px; text-align:right" value=" " required></td></tr>

                <tr><td>Date_of_Birth:</td><td><input type="text" name="dateofbirth" id="idob"
                style="width:200px; text-align:right" value=" "></td></tr>

                <tr><td>Gender:</td><td><input type="radio" name="gender" id="gender" value="m">Male
                <input type="radio" name="gender" value="f">Female</td></tr>
                </table>
                <br>

                <table border=20 class="btn-secondary display-8 font-weight-bold">

                    <tr><td>Address:</td><td><input type="text" name="address" id="iAddress"
                    style="width: 200px; text-align:right" value=" "></td></tr>                

                    <tr><td>Email:</td><td><input type="text" name="email" id="iEmail"
                    style="width: 200px; text-align:right" value=" "></td></tr> 
                    
                    <tr><td>Telephone:</td><td><input type="text" name="telephone" id="itelephone"
                    style="width: 200px; text-align:right" value=" "></td></tr>  

                    <tr><td>Mobile:</td><td><input type="text" name="mobile" id="imobile"
                    style="width: 200px; text-align:right" value=" "></td></tr>
                    
                    <tr><td>Emeg_Contact:</td><td><input type="text" name="econtact" id="icontact"
                    style="width: 200px; text-align:right" value=" "></td></tr>
                    
                    <tr><td>Relationship:</td><td><input type="text" name="relationship" id="irelationship"
                    style="width: 200px; text-align:right" value=" "></td></tr> 
                </table>
                <br>
        </div>
        <div class="col-sm-4">
            <h2 class="bg-secondary font-weight-bold text-white"><b>Qualification Grades</b></h2>
            <hr class="mb-3">
            <table border=20 class="btn-secondary display-8 font-weight-bold">

                <tr><td>Games:</td><td><input type="text" name="games" id="iGames"
                style="width:200px; text-align:right" value=" "></td></tr>

                <tr><td>Animation:</td><td><input type="text" name="animation" id="iAnimation"
                style="width:200px; text-align:right" value=" "></td></tr>

                <tr><td>IT Business:</td><td><input type="text" name="business" id="iBusiness"
                style="width:200px; text-align:right" value=" "></td></tr>

                <tr><td>Software Testing:</td><td><input type="text" name="softwaretesting" id="iSoftware"
                style="width:200px; text-align:right" value=" "></td></tr>

                <tr><td>Object Oriented:</td><td><input type="text" name="objectoriented" id="iObject"
                style="width:200px; text-align:right" value=" "></td></tr>

                <tr><td>Computer_System:</td><td><input type="text" name="computersystems" id="iComputer"
                style="width:200px; text-align:right" value=" "></td></tr>

            </table>
            <br>

            <table border=20 class="btn-secondary display-8 font-weight-bold">

                <tr><td>Project x 2:</td><td><input type="text" name="project" id="iProject"
                style="width:200px; text-align:right" value=" "></td></tr>

                <tr><td>Total Score:</td><td><input type="text" name="totalscore" id="iTotalscore"
                style="width:200px; text-align:right" value=" "></td></tr>

                <tr><td>Overall Average:</td><td><input type="text" name="average" id="iAverage"
                style="width:200px; text-align:right" value=" " ></td></tr>

                <tr><td>Classification:</td><td><input type="text" name="classify" id="iClassify"
                style="width:200px; text-align:right" value=" " ></td></tr> 

                <tr><td>
                    <input type="button" value="Reset" onClick="btnclear()"
                    style="width:140px; height:54px; font-size:60; border-radius:8px" class="btn-warning"></td>

                    <td><input type="Submit" value="Academic Grade" onClick="btnResult()"
                    style="width:200px; height:54px; border-radius:8px" class="btn-success"></td>
                </tr>
            </table>
            <br>
        </div>
</div>
</div>
        <center>
            <h3 class="display-5 font-weight-bold text-white bg-secondary">Student Result Management System</h3>
        </center>
    </form>
</body>
</html>