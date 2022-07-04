<?php
session_start();
error_reporting(0);
include "sidebar.php";
$LL = $_SESSION['name'];
$stuID = $_SESSION['id'];
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
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
    <link rel="stylesheet" href="../Style/Posts.css">
    <link rel="stylesheet" href="../Style/show9.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!----======== Page Title ======== -->
    <title>Future Graduation Projects</title>
</head>

<body>
    <!-- Creating Post -->
    <div class="container123">
        <h3 class="BB">
            <?php echo "<strong>".$LL."</strong>". " :"?>
        </h3>
        <center>
            <div class="inputs">
                <input type="text" onclick="togglepopup()">
            </div>

            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'fgp');
                    
                // Create Post
                $post1=   $_POST['post1'];
                $pName=   $_SESSION['name'];

                if(isset($_POST['Psubmit'])){
                    $P = "INSERT INTO posts(post1, pName) VALUES('$post1','$pName')";
                    
                    mysqli_query($conn, $P);
                }
            ?>
                <div class="popup" id="popup-1">
                    <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="togglePopup()">&times;</div>

                        <form action="home.php" method="POST">
                            <div>
                                <label>Create Post</label>
                                <br>
                                <textarea type="text" name="post1" id="post1" required></textarea>
                                <input type="submit" value="Add" name="Psubmit">
                            </div>
                        </form>
                    </div>
                </div>
        </center>
        <h4>click to share a post with your friends</h4>
    </div>

    <div class="Center">
        <!-- Show Post // Getting Data -->
        <?php
            $QQQ = "SELECT * FROM posts;";
            $result = mysqli_query($conn, $QQQ);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                echo "<div class='show'>"."<strong>" . $row['pName']. " :". "</strong>".
                "<br>".$row['post1']."<br>"."<hr>"
                ."<i class='bx bx-like' ></i>"
                ." 10 "
                ."<i class='bx bx-dislike' ></i>"
                ." 5 "
                // ."<i class='bx bxs-dislike' ></i>"
                // ."<i class='bx bxs-like' ></i>"
                ."<i class='bx bx-comment'></i>"
                ." 2 "
                ."</div>";} 
            }   
        ?>
    </div>

    <div class="im">
        <img src="../../icons/160_11024748.png" alt="Backgraund">
    </div>
    
    <!-- Name and Logout -->
    <h2 class="BBB">Hello,
        <?php
        echo $_SESSION['name']; 
        ?>
    </h2>

    <div class="AContant">
        You Welcome in our website we hope a good Graduation Project to you and your team.
        <br>Enjoy and make some knowledge and experience for your carrer.
        <br>After you end your Graduation Project please give us feedback.
    </div>

    <!-- JavaScript Connection -->
    <script src="../Script/script.js" async defer></script>
    <script src="../Script/Projects.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
?>