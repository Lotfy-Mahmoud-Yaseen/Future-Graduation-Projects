<?php
    include "H.php";
    $conn = mysqli_connect('localhost', 'root', '', 'fgp');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/sidebar.css">
    <link rel="stylesheet" href="../Style/team1.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!----======== Page Title ======== -->
    <title>Future Graduation Projects</title>
</head>

<body>
        <!-- The Left Bar -->
        <nav class="sidebar close">
            <!-- Menu Header  -->
            <header>
                <div class="image-text">
                    <span class="image">
                    <img src="../../icons/FutureLogo.png" alt="">
                </span>

                    <div class="text logo-text">
                        <span class="name">Future</span>
                        <span class="profession">GraduationProjects</span>
                    </div>
                </div>
                <!--  -->
                <i class='bx bx-chevron-right toggle'></i>
                <!--  -->
            </header>

            <!-- Menu Center & Bottom -->
            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">

                        <!-- Home -->
                        <li class="nav-link">
                            <a href="home.php">
                                <i class='bx bx-home-alt icon'></i>
                                <span class="text nav-text">Home</span>
                            </a>
                        </li>

                        <!-- Team -->
                        <li class="nav-link">
                            <a href="team.php">
                                <i class='bx bx-user icon'></i>
                                <span class="text nav-text">Team</span>
                            </a>
                        </li>

                        <!-- Projects -->
                        <li class="nav-link">
                            <a href="Projects.php">
                                <i class='bx bx-code-alt icon'></i>
                                <span class="text nav-text">Project</span>
                            </a>
                        </li>

                        <!-- About -->
                        <li class="nav-link">
                            <a href="About.html">
                                <i class='bx bx-message-alt-detail icon'></i>
                                <span class="text nav-text">About</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- bottom Menu -->
                <div class="bottom-content">
                    <li class="">
                        <a href="logout.php">
                            <i class='bx bx-log-out icon'></i>
                            <span class="text nav-text">Logout</span>
                        </a>
                    </li>

                    <li class="mode">
                        <div class="sun-moon">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                        <span class="mode-text text">Dark mode</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
                </div>
            </div>
        </nav>
    

<!-- Getting Data -->
<div class="Data">
    <?php
    echo "<h2>Graduation Project Team Information</h2>";
    // Leader
    $Q = "SELECT * FROM project JOIN promembers ON promembers.teamLID = project.teamLID 
    WHERE $stuID = promembers.teamLID;";
    $result = mysqli_query($conn, $Q);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
        echo "<strong>Team Leader ID:</strong>" . " " . $row['teamLID'] . "<br>" . 
        "<strong>Project Name:</strong>" . " " . $row['proName']. "<br>" . 
        "<strong>Framwork:</strong>" . " " . $row['proFramwork'] . "<br>" . 
        "<strong>Team Leader Phone:</strong>" . " " . $row['teamLPhone'] . "<br>" . 
        "<strong>Assistant ID:</strong>" . " " . $row['ass_ID'] . "<br>" . 
        "<strong>Member ID:</strong>" . " " . $row['m1_ID'] . "<br>" . 
        "<strong>Member ID:</strong>" . " " . $row['m2_ID'] . "<br>" . 
        "<strong>Member ID:</strong>" . " " . $row['m3_ID']  . "<br>" . 
        "<strong>GitHub Link:</strong>" . " " . $row['gitLink'] . "<br>" .
        "<strong>Introduction:</strong>" . " " . $row['intro'];
        }
    }
    // ASS
    $Q1 = "SELECT * FROM project JOIN promembers ON promembers.teamLID = project.teamLID 
    WHERE $stuID = promembers.ass_ID;";
    $result1 = mysqli_query($conn, $Q1);
    $resultCheck1 = mysqli_num_rows($result1);
    if ($resultCheck1 > 0){
        while ($row = mysqli_fetch_assoc($result1)){
            echo "<strong>Team Leader ID:</strong>" . " " . $row['teamLID'] . "<br>" . 
            "<strong>Project Name:</strong>" . " " . $row['proName']. "<br>" . 
            "<strong>Framwork:</strong>" . " " . $row['proFramwork'] . "<br>" . 
            "<strong>Team Leader Phone:</strong>" . " " . $row['teamLPhone'] . "<br>" . 
            "<strong>Assistant ID:</strong>" . " " . $row['ass_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m1_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m2_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m3_ID']  . "<br>" . 
            "<strong>GitHub Link:</strong>" . " " . $row['gitLink'] . "<br>" .
            "<strong>Introduction:</strong>" . " " . $row['intro'];
        }
    }

    // m1
    $Q2 = "SELECT * FROM project JOIN promembers ON promembers.teamLID = project.teamLID 
    WHERE $stuID = promembers.m1_ID;";
    $result2 = mysqli_query($conn, $Q2);
    $resultCheck2 = mysqli_num_rows($result2);
    if ($resultCheck2 > 0){
        while ($row = mysqli_fetch_assoc($result2)){
            echo "<strong>Team Leader ID:</strong>" . " " . $row['teamLID'] . "<br>" . 
            "<strong>Project Name:</strong>" . " " . $row['proName']. "<br>" . 
            "<strong>Framwork:</strong>" . " " . $row['proFramwork'] . "<br>" . 
            "<strong>Team Leader Phone:</strong>" . " " . $row['teamLPhone'] . "<br>" . 
            "<strong>Assistant ID:</strong>" . " " . $row['ass_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m1_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m2_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m3_ID']  . "<br>" . 
            "<strong>GitHub Link:</strong>" . " " . $row['gitLink'] . "<br>" .
            "<strong>Introduction:</strong>" . " " . $row['intro'];
        }
    }

    // m2
    $Q3 = "SELECT * FROM project JOIN promembers ON promembers.teamLID = project.teamLID 
    WHERE $stuID = promembers.m2_ID;";
    $result3 = mysqli_query($conn, $Q3);
    $resultCheck3 = mysqli_num_rows($result3);
    if ($resultCheck3 > 0){
        while ($row = mysqli_fetch_assoc($result3)){
            echo "<strong>Team Leader ID:</strong>" . " " . $row['teamLID'] . "<br>" . 
            "<strong>Project Name:</strong>" . " " . $row['proName']. "<br>" . 
            "<strong>Framwork:</strong>" . " " . $row['proFramwork'] . "<br>" . 
            "<strong>Team Leader Phone:</strong>" . " " . $row['teamLPhone'] . "<br>" . 
            "<strong>Assistant ID:</strong>" . " " . $row['ass_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m1_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m2_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m3_ID']  . "<br>" . 
            "<strong>GitHub Link:</strong>" . " " . $row['gitLink'] . "<br>" .
            "<strong>Introduction:</strong>" . " " . $row['intro'];
        }
    }

    // m3
    $Q4 = "SELECT * FROM project JOIN promembers ON promembers.teamLID = project.teamLID 
    WHERE $stuID = promembers.m2_ID;";
    $result4 = mysqli_query($conn, $Q4);
    $resultCheck4 = mysqli_num_rows($result4);
    if ($resultCheck4 > 0){
        while ($row = mysqli_fetch_assoc($result4)){
            echo "<strong>Team Leader ID:</strong>" . " " . $row['teamLID'] . "<br>" . 
            "<strong>Project Name:</strong>" . " " . $row['proName']. "<br>" . 
            "<strong>Framwork:</strong>" . " " . $row['proFramwork'] . "<br>" . 
            "<strong>Team Leader Phone:</strong>" . " " . $row['teamLPhone'] . "<br>" . 
            "<strong>Assistant ID:</strong>" . " " . $row['ass_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m1_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m2_ID'] . "<br>" . 
            "<strong>Member ID:</strong>" . " " . $row['m3_ID']  . "<br>" . 
            "<strong>GitHub Link:</strong>" . " " . $row['gitLink'] . "<br>" .
            "<strong>Introduction:</strong>" . " " . $row['intro'];
        }
    }

        // New Talk
        $Q5 = "SELECT * FROM student JOIN promembers ON promembers.teamLID = student.teamLID 
        WHERE $stuID = student.stu_ID;";
        $result5 = mysqli_query($conn, $Q5);
        $resultCheck5 = mysqli_num_rows($result5);
        if ($resultCheck5 > 0){
            while ($row = mysqli_fetch_assoc($result5)){
                echo "<strong>Team Leader Name:</strong>" . " " .$row['name'] ;
            }
        }
    ?>
</div> 

<!-- Buttons -->
<div class="Download">
    <button class="T">
        <i class='bx bx-download'></i>
        <span class="text nav-text">Proposel</span>
    </button>

    <button class="T">
        <i class='bx bx-download'></i>
        <span class="text nav-text">Presentation</span>
    </button>

    <button class="T">
        <i class='bx bx-download'></i>
        <span class="text nav-text">Discussion</span>
    </button>

    <button class="T">
        <i class='bx bx-download'></i>
        <span class="text nav-text">Graduation Book</span>
    </button>
</div>


    <!-- JavaScript Connection -->
    <script src="../Script/script.js" async defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>