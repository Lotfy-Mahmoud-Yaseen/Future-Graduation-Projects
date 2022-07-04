<?php
    include "H.php";
?>
<!DOCTYPE html>
<html lang="en">

<head> <link rel="stylesheet" href="../Style/team9.css"> </head>

<body>

<!-- Project Information -->
<div class="proInfo">
    <?php
    echo "<hr>"."<h2>Graduation Project Information</h2>" . "<hr>";

    // ASS
    $Q1 = "SELECT * FROM project JOIN student ON student.teamLID = project.teamLID 
    WHERE $stuID = student.stu_ID;";
    $result1 = mysqli_query($conn, $Q1);
    $resultCheck1 = mysqli_num_rows($result1);
    if ($resultCheck1 > 0){
        while ($row = mysqli_fetch_assoc($result1)){
            echo "<strong>Project Name:</strong>" . " " . $row['proName']. "<br>" . 
            "<strong>Framwork:</strong>" . " " . $row['proFramwork'] . "<br>" . 
            "<strong>GitHub Link:</strong>" . " " . $row['gitLink'] . "<br>" .
            "<strong>Introduction:</strong>" . "<br>" . $row['intro'] . "<hr>";
        }
    }
    ?>
</div>

<!-- Members Information -->
<div class="Memb">
    <?php 
    echo "<hr><h2>Team Leader Info</h2><hr>";
    $Qq1 = "SELECT * FROM project JOIN student ON student.teamLID = project.teamLID 
    WHERE $stuID = student.stu_ID";
    $resultq1 = mysqli_query($conn, $Qq1);
    $resultCheckq1 = mysqli_num_rows($resultq1);
    if ($resultCheckq1 > 0){
        while ($row = mysqli_fetch_assoc($resultq1)){
        $Gold = $row['teamLID'];
        
        // Team Leader Info
        $Qq123 = "SELECT * FROM project JOIN student ON student.teamLID=project.teamLID
        WHERE $Gold = student.teamLID AND $Gold = student.stu_ID";
        $resultq123 = mysqli_query($conn, $Qq123);
        $resultCheckq123 = mysqli_num_rows($resultq123);
        if ($resultCheckq123 > 0){
            while ($row = mysqli_fetch_assoc($resultq123)){
            echo $row['name']."<br>"."ID: ".$row['stu_ID']."<br>".
            "Phone: ".$row['teamLPhone'];
        }
        }
        
        // Members Info
        echo "<hr><h2>Members Info</h2><hr>";
        $Qq12 = "SELECT * FROM student WHERE $Gold = teamLID AND $Gold != stu_ID";
        $resultq12 = mysqli_query($conn, $Qq12);
        $resultCheckq12 = mysqli_num_rows($resultq12);
        if ($resultCheckq12 > 0){
            while ($row = mysqli_fetch_assoc($resultq12)){
            echo $row['name']."<br>"."ID: ".$row['stu_ID']."<br>";
        }
        echo "<hr>";
        }
    }
    }
    ?>
</div>

<!-- Download Buttons  -->
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

</body>

</html>