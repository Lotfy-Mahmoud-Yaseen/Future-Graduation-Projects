<?php
    error_reporting(0);
    include "H.php";
    $conn = mysqli_connect('localhost', 'root', '', 'fgp');
    // if($conn){
    //     echo 'success';
    // }else{
    //     echo 'Fail';
    // }
    if(!$conn){ echo 'Error' . mysqli_connect_error(); }

    $teamLID =     $_POST['teamLID'];
    $proName =      $_POST['proName'];    
    $proFramwork =  $_POST['proFramwork'];
    $teamLPhone =   $_POST['teamLPhone'];
    $ass_ID =       $_POST['ass_ID'];
    $m1_ID =        $_POST['m1_ID'];
    $m2_ID =        $_POST['m2_ID'];
    $m3_ID =        $_POST['m3_ID'];
    $intro =        $_POST['intro'];
    
    // Creating Team
    if(isset($_POST['submit'])){
        // Fetch and Comparison ID`s as a Student.
        $sql321 = "SELECT stu_ID FROM student";
        $result321 = mysqli_query($conn, $sql321);
        if (mysqli_num_rows($result321) > 0) {
            while($row = mysqli_fetch_assoc($result321)) {
                if($row["stu_ID"] == $teamLID){
                    $one = true;
                }
                if($row["stu_ID"] == $ass_ID){
                    $two = true;
                }
                if($row["stu_ID"] == $m1_ID){
                    $three = true;
                }
                if($row["stu_ID"] == $m2_ID){
                    $fure = true;
                }
                if($row["stu_ID"] == $m3_ID){
                    $five = true;
                }
            }
        }

        // How make team 
        if($stuID == $teamLID){
            $LID = true;
        }
        
        // Excution
        if($one == true AND $two == true AND $three == true
        AND $fure == true AND $five == true AND $LID == true){
            $sql = "INSERT INTO project(teamLID, proName, proFramwork, teamLPhone, intro) 
            VALUES('$teamLID', '$proName', '$proFramwork', '$teamLPhone','$intro')";
            mysqli_query($conn, $sql);

            $sql2 = "UPDATE student SET teamLID = $teamLID
            WHERE stu_ID = $teamLID";
            mysqli_query($conn, $sql2);
    
            $sql3 = "UPDATE student SET teamLID = $teamLID
            WHERE stu_ID = $ass_ID";
            mysqli_query($conn, $sql3);
    
            $sql4 = "UPDATE student SET teamLID = $teamLID
            WHERE stu_ID = $m1_ID";
            mysqli_query($conn, $sql4);
    
            $sql5 = "UPDATE student SET teamLID = $teamLID
            WHERE stu_ID = $m2_ID";
            mysqli_query($conn, $sql5);
            
            $sql6 = "UPDATE student SET teamLID = $teamLID
            WHERE stu_ID = $m3_ID";
            mysqli_query($conn, $sql6);
            // Socsessfull Popup
            echo "<div class='Completion'>
                <img src='../../icons/checked.png' alt=''> 
                <h1>Successfull :)</h1>
                <p>Successfully Team Creation</p>
                <a href='Projects.php'><button type'submet' id=''> Cancel</button></a>
            </div>";
        }else{
            // filed Popup
            echo "<div class='Completion'>
                <img src='../../icons/cancel.png' alt=''> 
                <h1>Sorry :(</h1>
                <p>Data are Wrong !</p>
                <a href='Projects.php'><button type'submet' id=''> Cancel</button></a>
            </div>";
        }
    } 

    // Some About
    // $sql3210 = "SELECT stu_ID, teamLID FROM student WHERE stu_ID = $stuID";
    // $result3210 = mysqli_query($conn, $sql3210);
    // if ($row["teamLID"] != 'NULL') {        
    //     include "nn.php";
    //     // while($row = mysqli_fetch_assoc($result3210)) {
    //     //     if($row["teamLID"] != 'NULL'){
    //     //         include "nn.php";
    //     //     }
    //     // }
    // }

    // Add And Update GitHub Link
    $gitLink=   $_POST['gitLink'];
    if(isset($_POST['submit1'])){
        $gL = "UPDATE project SET gitLink='$gitLink' WHERE teamLID= $stuID";
        mysqli_query($conn, $gL);
    }

    // Upload Pro
    $Pro =     $_POST['Pro'];
    if(isset($_POST['Upload1'])){
        $Up = "UPDATE project SET Pro='$Pro' WHERE teamLID= $stuID";
        mysqli_query($conn, $Up);
    }
    // Upload Pre
    $Pre =     $_POST['Pre'];
    if(isset($_POST['Upload2'])){
        $Up1 = "UPDATE project SET Pre='$Pre' WHERE teamLID= $stuID";
        mysqli_query($conn, $Up1);
    }
    // Upload Dis
    $Dis =     $_POST['Dis'];
    if(isset($_POST['Upload3'])){
        $Up2 = "UPDATE project SET Dis='$Dis' WHERE teamLID= $stuID";
        mysqli_query($conn, $Up2);
    }
    // Upload book
    $book =     $_POST['book'];
    if(isset($_POST['Upload4'])){
        $Up3 = "UPDATE project SET book='$book' WHERE teamLID= $stuID";
        mysqli_query($conn, $Up3);
    }

?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../Style/proTeam2.css">
    <link rel="stylesheet" href="../Style/proGit5.css">
    <link rel="stylesheet" href="../Style/proUpload.css">
</head>

<body>
    <!-- About Page -->
    <label class="add">
        <strong style="font-size: 30px;">Hi:</strong> dont create a team if you dont sure about any information
        cuse this will make a problime, First talk with your friends
        and when you are ready create it.
        <br>Aftre that you have to Upload The <strong style="font-size: 25px;">Proposel, Presentation, Discussion</strong> PDF files.
        <br>And you can Update PDF files and GitHub Link anytime.
        <br>Only team Leaders can upload and update PDF files and GitHub Link. 
        <br>And you have to Upload your project on <strong style="font-size: 25px;">GitHub</strong> and add the link here.
        <br>Hi: this is a guide for you to make a good Graduation book
        <br>You have to read <a href="About.html"><strong>About PDF</strong></a> and to build your Project on System Development life cycle <strong>(SDLC).</strong>
        <br>There are six chapters in the Graduation Book.<br>
            <strong>Chapter One:</strong> Contain The Book Introduction<br>
            <strong>Chapter Two:</strong> Contain The Project Planning, Analysis<br>
            <strong>Chapter Three:</strong> Contain The Project Designs, Code<br>
            <strong>Chapter Four:</strong> Contain Integration, Testing<br>
            <strong>Chapter Five:</strong> Contain Acceptance, installation, deployment<br>
            <strong>Chapter Six:</strong> Contain The Recommendations, Conclusion, Sources<br>
        When you Write the Chapter the Doctor will read it and give you feedback to do it right.
    </label>

    <!-- Buttons -->
    <div class="Upload">
        <button class="Cr" onclick="CrTeam()">Create Team</button>

        <button class="T" onclick="togglePOP()">
            <i class='bx bx-upload'></i>
            <span class="text nav-text">Proposel</span>
        </button>

        <button class="T" onclick="togglePOP1()">
            <i class='bx bx-upload'></i>
            <span class="text nav-text">Presentation</span>
        </button>

        <button class="T" onclick="togglePOP2()">
            <i class='bx bx-upload'></i>
            <span class="text nav-text">Discussion</span>
        </button>

        <button class="T" onclick="git()">
            <i class='bx bxl-github'></i>
            <span class="text nav-text">Project GitHub</span>
        </button>

        <button class="T" onclick="togglePOP3()">
            <i class='bx bx-book icon'></i>
            <span class="text nav-text">Upload Book</span>
        </button>
    </div>

        <!-- Creating Team -->
        <div class="popup" id="CrTeam-1">
            <div class="overlay"></div>
            <div class="CrTeam">
                <div class="close-btn" onclick="CrTeam()">&times;</div>
                <form action="Projects.php" method="POST">

                    <div class="title">Creating Team</div>

                    <div class="form">

                        <div class="inputfield">
                            <label>Team Leader ID</label>
                            <input type="text" name="teamLID" id="teamLID" class="input" required>
                        </div>

                        <div class="inputfield">
                            <label>Project Name</label>
                            <input type="text" name="proName" id="proName" class="input" required>
                        </div>

                        <div class="inputfield">
                            <label>Programing Framwork</label>
                            <input type="text" name="proFramwork" id="proFramwork" class="input" required>
                        </div>

                        <div class="inputfield">
                            <label>Team Leader Phone Number</label>
                            <input type="text" name="teamLPhone" id="teamLPhone" class="input" required>
                        </div>

                        <div class="inputfield">
                            <label>Assistant ID</label>
                            <input type="text" name="ass_ID" id="ass_ID" class="input" required>
                        </div>

                        <div class="inputfield">
                            <label>Member One ID</label>
                            <input type="text" name="m1_ID" id="m1_ID" class="input" required>
                        </div>

                        <div class="inputfield">
                            <label>Member Two ID</label>
                            <input type="text" name="m2_ID" id="m2_ID" class="input" required>
                        </div>

                        <div class="inputfield">
                            <label>Member Three ID</label>
                            <input type="text" name="m3_ID" id="m3_ID" class="input" required>
                        </div>

                        <div class="inputfield">
                            <label>Graduation Project Introduction</label>
                            <textarea class="textarea" type="text" name="intro" id="intro" required></textarea>
                        </div>

                        <div class="inputfield">
                            <input type="submit" name="submit" id="submit" Value="Create" class="btn" >
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Add Git -->
        <div class="Git" id="Git-1">
            <div class="overlay"></div>
            <div class="content">
                <div class="close-btn" onclick="git()">&times;</div>
                <form action="Projects.php" method="POST">
                    <h1>Project GitHub Link</h1>
                    <div class="inputfield">
                        <input type="url" name="gitLink" class="input" required>
                    </div>

                    <div class="inputfield">
                        <input type="submit" value="Add" name="submit1" class="btn">
                    </div>
                </form>
            </div>
        </div>

        <!-- Upload Pro -->
        <div class="POP" id="POP-1">
            <div class="over"></div>
            <div class="con">
                <div class="close-btn" onclick="togglePOP()">&times;</div>
                <!--  -->
                <h1 class="S">Proposel PDF</h1>
                <form action="Projects.php" method="POST">
                    <input type="File" name="Pro" value="SSS">
                    <input type="submit" class="Btn" name="Upload1" value="Upload1">
                </form>
            </div>
        </div>

        <!-- Upload Pre -->
        <div class="POP1" id="POP1-1">
            <div class="over1"></div>
            <div class="con1">
                <div class="close-btn" onclick="togglePOP1()">&times;</div>
                <!--  -->
                <h1 class="S">Presentation PDF</h1>
                <form action="Projects.php" method="POST">
                    <input type="File" name="Pre" value="SSS">
                    <input type="submit" class="Btn" name="Upload2" value="Upload1">
                </form>
            </div>
        </div>

        <!-- Upload Dis -->
        <div class="POP2" id="POP2-1">
            <div class="over2"></div>
            <div class="con2">
                <div class="close-btn" onclick="togglePOP2()">&times;</div>
                <!--  -->
                <h1 class="S">Discussion PDF</h1>
                <form action="Projects.php" method="POST">
                    <input type="File" name="Dis" value="SSS">
                    <input type="submit" class="Btn" name="Upload3" value="Upload1">
                </form>
            </div>
        </div>
        
        <!-- Upload Book -->
        <div class="POP3" id="POP3-1">
            <div class="over3"></div>
            <div class="con3">
                <div class="close-btn" onclick="togglePOP3()">&times;</div>
                <!--  -->
                <h1 class="S">Book PDF</h1>
                <h5>Upload or Update the book</h5>
                <form action="Projects.php" method="POST">
                    <input type="File" name="book" value="SSS">
                    <input type="submit" class="Btn" name="Upload4" value="Upload1">
                </form>
            </div>
        </div>        

    <!-- JavaScript Connection -->
    <script src="../Script/project.js"></script>
</body>
</html>