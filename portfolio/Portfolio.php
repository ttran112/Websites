
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Reset CSS -->
    <link rel="stylesheet" href="styles/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles/styles.css">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <!-- Title -->
    <title>My Portfolio</title>
    <link rel="icon" type="image/jpg" href="images/portfolio.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!-- Container Start -->
<div class="container-fluid px-0" id="main">


    <!-- Navbar Container -->
    <div class="container-fluid m-0 p-0" id="nav-container">

        <!-- Navbar  -->
        <div class="container-fluid m-0 p-0" id="navigation">

            <!-- Nav -->
            <nav class="navbar fixed-top bg-dark navbar-dark navbar-expand-lg m-0" id="navbar">
                <a class="navbar-brand" href="#">Thanh D Tran</a>

                <!-- Toggler Button for smaller screens -->

                <button class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        value="menu">
                    <span class="navbar-toggler-icon"></span>

                    Menu
                </button>

                <!-- Div to contain the navigation menu in the toggler -->
                <div class="collapse navbar-collapse pl-5" id="navbarSupportedContent">

                    <!-- Nav Bar Links -->
                    <ul class="navbar-nav">
                        <!-- Home anchor -->
                        <li class="nav-item">
                            <a class="nav-link" href="Portfolio.php">
                                <i class="fa fa-home" style="font-size:20px; color: lightgray;"></i>
                                <span data-toggle="collapse" data-target=".navbar-collapse.show">Home</span>
                            </a>
                        </li>
                        <!--Link to Resume-->
                        <li class="Resume">
                            <a class="nav-link" href="../resume/MyResume.html">
                                <i class="fa fa-file" style="font-size:20px; color: lightgray;"></i>
                                <span data-toggle="collapse" data-target=".navbar-collapse.show">Resume</span>
                            </a>
                        </li>

                        <!--Link to LinkedIn-->
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linkedin.com/in/thanh-tran-2b20451b8/">
                                <i class="fa fa-linkedin" style="font-size:20px; color: lightgray;"></i>
                                <span data-toggle="collapse" data-target=".navbar-collapse.show">LinkedIn</span>
                            </a>
                        </li>

                        <!--Link to GuestBook-->
                        <li class="nav-item">
                            <!--<a class="nav-link" href="../classProfolio/guestBook/GuestBook.php">-->
                                <a class="nav-link" href="GuestBook.php">

                                <i class="fa fa-book" style="font-size:20px; color: lightgray;"></i>

                                <span data-toggle="collapse" data-target=".navbar-collapse.show">GuestBook</span>
                            </a>
                        </li>
                        <!--Link to Admin-->
                        <li class="nav-item" id="admin">
                            <a class="nav-link" href="Login.php">
                                <i class="fa fa-user" style="font-size:20px; color: lightgray;"></i>
                                <span data-toggle="collapse" data-target=".navbar-collapse.show">Admin</span>
                            </a>
                        </li>

                    </ul>

                </div>

            </nav>

        </div>

    </div>
    <!--Some basic info about myself-->
    <div class="container-fluid m-0 px-0 pt-5" >
        <header>
            <img class="background" src="images/software.jpg" alt="" />

        </header>
        <aside>
            <img class="bio" src="images/bio-image.jpg" alt="" />
        </aside>
        <main>
            <p id="intro"><strong>Thanh D Tran</strong><br>
                Future Software Developer, Web Design, Data Analyst<br>
                Seatle, Washington</p>
        </main>
        <!--Example of a project display-->
        <article class="container">
                <div class="row ">
                    <div class="col-8">
                        <p>This is the first project that I and my teammate work together to build for a client. It's contain html css for styles.
                            Javascript for function and validation. We also create database to store input data using SQL/PHP
                        The website also require sever validation using PHP</p>
                    </div>
                    <div class="col-4">
                        <a href="https://software-avengers.greenriverdev.com/"><img src="images/OutReach.png" alt=""  style="float: right; width: 100%; height: auto"></a>
                    </div>

                </div>
            </article>
    </div>
    <!--footer with some false link img icon-->
    <footer>
        <p>Made by: Thanh D Tran</p>
        <div id="social">
            <a href="#"><img id="insta-icon" src="images/instagram-icon.png" alt="" /></a>
            <a href="#"> <img id="fb-icon" src="images/facebook-icon.png" alt="" /></a>
            <a href="#"><img id="twitter-icon" src="images/twitter-icon.png" alt="" /></a>
        </div>
    </footer>

</div>
<script src="scripts/jquery.slim.min.js"></script>
<script src="scripts/popper.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
</body>
</html>