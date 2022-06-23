<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descripton" content="its only for Future Academy Students, come on to make your Graduation Project">
    <meta name="google-signin-client_id" content="315658434996-sjeqbem2vk2786dm0d7bfr03gr91k4ln.apps.googleusercontent.com">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="..\Style\style.css">
    <link rel="stylesheet" href="..\Style\sidebar.css">
    <link rel="stylesheet" href="..\Style\post.css">
    <!-- <link rel="stylesheet" href="../Style/Main.css"> -->
    <link rel="stylesheet" href="..\Style\mm.css">

    <!----===== Boxicons CSS FontAweome ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!----======== Page Title ======== -->
    <title>Future Graduation Projects</title>
</head>

<body>
    <!-- Future Academy -->
    <h1 class="lol">Future Graduation Project`s</h1>
    <dl class="lol1">
        <dt>HI :)</dt>
        <dd>This website only for:
            <BR>
            <a href="https://www.futureacademyegypt.com/ar/home">Future Academy</a> Students who have registered the Graduation Project subject, please Login with your Academic Gmail.</dd>
    </dl>

    <div class="fuimg">
        <img src="../../icons/160_11024748.png" alt="Backgraund">
    </div>
    <div class="backG-image"></div>

    <!-- Login Form -->
    <form action="login.php" method="post">
        <div class="container">
            <center>
                <div class "login-box">
                    <h1> login</h1>
                </div>

                <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
                <?php } ?>

                <div class="inputs">
                    <input type="text" name="uname" required>
                    <label>Username</label>
                </div>

                <div class="inputs">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>

                <!-- <br> -->
                <div class="btn">
                    <input type="submit" value="Login In">
                    <br>
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                </div>
            </center>
        </div>
    </form>

    <!-- Show User Data -->
    <div class="data">
        <!-- <p>Name</p> -->
        <p id="name"></p>
        <img id="image" class="rounded-circle" width="50" height="50" />
        <!-- <p>Email</p> -->
        <p id="email"></p>
    </div>


    <!-- Creating Post -->
    <div class="container123">
        <center>
            <div class="inputs">
                <input type="text" onclick="togglepopup()">
            </div>
            <div class="popup" id="popup-1">
                <div class="overlay"></div>
                <div class="content">
                    <!-- Popup Content -->
                    <div class="container2">
                        <div class="wrapper">
                            <section class="post">
                                <header>Create Post</header>
                                <a href="Home.html">
                                    <i class='bx bx-message-rounded-x'></i>
                                </a>
                                <form action="#">
                                    <div class="content">
                                        <img src="../../icons/logo.png" alt="logo">
                                        <div class="details">
                                            <p>CodingNepal</p>
                                            <div class="privacy">
                                                <i class="fas fa-user-friends"></i>
                                                <span>Friends</span>
                                                <i class="fas fa-caret-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea placeholder="What's on your mind, CodingNepal?" spellcheck="false" required></textarea>
                                    <div class="theme-emoji">
                                        <img src="../../icons/theme.svg" alt="theme">
                                        <img src="../../icons/smile.svg" alt="smile">
                                    </div>
                                    <div class="options">
                                        <p>Add to Your Post</p>
                                        <ul class="list">
                                            <li><img src="../../icons/gallery.svg" alt="gallery"></li>
                                            <li><img src="../../icons/tag.svg" alt="gallery"></li>
                                            <li><img src="../../icons/emoji.svg" alt="gallery"></li>
                                            <li><img src="../../icons/mic.svg" alt="gallery"></li>
                                            <li><img src="../../icons/more.svg" alt="gallery"></li>
                                        </ul>
                                    </div>
                                    <button>Post</button>
                                </form>
                            </section>
                            <section class="audience">
                                <header>
                                    <div class="arrow-back"><i class="fas fa-arrow-left"></i></div>
                                    <p>Select Audience</p>
                                </header>
                                <div class="content">
                                    <p>Who can see your post?</p>
                                    <span>Your post will show up in News Feed, on your profile and in search results.</span>
                                </div>
                                <ul class="list">
                                    <li>
                                        <div class="column">
                                            <div class="icon"><i class="fas fa-globe-asia"></i></div>
                                            <div class="details">
                                                <p>Public</p>
                                                <span>Anyone on or off Facebook</span>
                                            </div>
                                        </div>
                                        <div class="radio"></div>
                                    </li>
                                    <li class="active">
                                        <div class="column">
                                            <div class="icon"><i class="fas fa-user-friends"></i></div>
                                            <div class="details">
                                                <p>Friends</p>
                                                <span>Your friends on Facebook</span>
                                            </div>
                                        </div>
                                        <div class="radio"></div>
                                    </li>
                                    <li>
                                        <div class="column">
                                            <div class="icon"><i class="fas fa-user"></i></div>
                                            <div class="details">
                                                <p>Specific</p>
                                                <span>Only show to some friends</span>
                                            </div>
                                        </div>
                                        <div class="radio"></div>
                                    </li>
                                    <li>
                                        <div class="column">
                                            <div class="icon"><i class="fas fa-lock"></i></div>
                                            <div class="details">
                                                <p>Only me</p>
                                                <span>Only you can see your post</span>
                                            </div>
                                        </div>
                                        <div class="radio"></div>
                                    </li>
                                    <li>
                                        <div class="column">
                                            <div class="icon"><i class="fas fa-cog"></i></div>
                                            <div class="details">
                                                <p>Custom</p>
                                                <span>Include and exclude friends</span>
                                            </div>
                                        </div>
                                        <div class="radio"></div>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>

    <!-- Buttom Content -->
    <div class="Contant123">
        <p>
            You Welcome in our website we hope a good Graduation Project to you and your team.
            <br>Enjoy and make some knowledge and experience for your carrer.
            <br>After you end your Graduation Project please give us feedback.
        </p>
    </div>

    <!-- JavaScript Connection -->
    <script src="../Script/script.js" async defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>