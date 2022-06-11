<?php
    $conn = mysqli_connect('localhost', 'root', '', 'fgp');
    include "H.php";
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
        <link rel="stylesheet" href="../Style/team.css">

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
        $Q = "SELECT * FROM project WHERE teamLID OR ass_ID OR m1_ID OR m2_ID OR m3_ID = $stuID;";
        $result = mysqli_query($conn, $Q);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
            echo "Team Leader ID:" . " " . $row['teamLID'] . "<br>" . 
            "Project Name:" . " " . $row['proName']. "<br>" . 
            "Framwork:" . " " . $row['proFramwork'] . "<br>" . 
            "Team Leader Phone:" . " " . $row['teamLPhone'] . "<br>" . 
            "Assistant ID:" . " " . $row['ass_ID'] . "<br>" . 
            "Member ID:" . " " . $row['m1_ID'] . "<br>" . 
            "Member ID:" . " " . $row['m2_ID'] . "<br>" . 
            "Member ID:" . " " . $row['m3_ID']  . "<br>" . 
            "Introduction:" . " " . $row['intro'];
        }
        }   
    ?>
</div> 

        <!-- JavaScript Connection -->
        <script src="../Script/script.js" async defer></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>