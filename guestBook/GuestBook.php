<?php
//Include header file
//include('includes/head.html');

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['loggedin'])) {

    //Store the page that I'm currently on in the session
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    //Redirect to login
    //header("location: adminLogin.php");
}
include('includes/head.html');
?>

<body>
<div class="container">
<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
    <div class="container">

        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#myTogglerNav"
                aria-controls="myTogglerNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="#" class="navbar-brand">My GuestBook</a>

        <div class="collapse navbar-collapse" id="myTogglerNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="GuestBook.php">Home</a>
                <a class="nav-item nav-link active" href="adminLogin.php">Admin</a>
            </div><!-- navbar -->
        </div><!-- collapse -->

    </div><!-- container -->
</nav><!-- nav -->
</div>
<div id="main" class=" container container-fluid">
    <div class="jumbotron jumbotron-fluid"> <!-- intro -->
        <div class="container container-fluid">
            <h1 class="display-4">My GuestBook</h1>
            <p class="lead">This page will allow you to select which scenario that we met and under what circumstances.</p>
        </div>
    </div> <!-- end of header intro-->

    <div class="w-auto mx-auto justify-content-center" id="formContainer">

    <form id="guestBookForm" method="post" action="confirmation.php" >
        <fieldset class="form-group" id="contactInfo">
            <legend>Contact Info</legend>

            <!--Name -->
            <div class="form-group form-row">

                <div class="form-group col-md-4">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                    <span class="text-danger d-none" id="err-fname">Please enter a first name</span>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                <div class="form-group col-md-4">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                    <span class="d-none text-danger" id="err-lname">Please enter a last name</span>
                </div>

            </div>


            <!-- Company/Job -->
            <div class="form-group form-row">

                <div class="col-md-4">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company">
                    <span class="d-none text-danger" id="err-company">Please enter your company name name</span>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                <div class="col-md-4">
                    <label for="jobTitle">Job Title</label>
                    <input type="text" class="form-control" id="jobTitle" name="jobTitle">
                    <span class="d-none text-danger" id="err-jobTitle">Please enter a job title</span>
                </div>

            </div>


            <!-- Phone Number -->
            <div class="form-group form-row">

                <div class="col-md-4">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" maxlength="10">
                    <span class="d-none text-danger" id="err-phone">Please enter a phone number</span>
                </div>

            </div>

            <!-- Email Address -->
            <div class="form-group form-row">

                <div class="col-md-8">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" id="email" name="email">
                    <span class="d-none text-danger" id="err-email">Please enter an email</span>
                </div>

            </div>

            <!-- LinkedIn -->
            <div class="form-group form-row">

                <div class="col-md-8">
                    <label for="LinkedIn"> LinkedIn</label>
                    <input type="text" class="form-control" id="LinkedIn" name="LinkedIn" >
                    <span class="d-none text-danger" id="err-LinkedIn">Please make sure your LinkedIn start with http and end with .com</span>
                </div>

            </div>

        </fieldset>

        <fieldset class="form-group" >
            <legend>How did we met?</legend>
            <div class="form-group form-row">
                <div class="col-md-6">

                    <select class="form-control" id="reason" name="reason" >

                        <option value='none'>Select Your Choice</option>
                        <option value='School'>School</option>
                        <option value='Co-worker'>Co-worker</option>
                        <option value='Meetup'>Meetup</option>
                        <option value='Job Fair'>Job Fair</option>
                        <option value='Event'>Event</option>
                        <option value='Other' >Other</option>
                        <option value='Not Met'>We haven't met yet!</option>

                    </select>

                    <span class="d-none text-danger" id="err-reason">Please choose a reason</span>
                </div>

            </div>
            <div class="form-group d-none" id="other">
                <label for="otherReason">Other, please specify </label>
                    <textarea class="form-control" id="otherReason" type="text" name="otherReason" rows="3" placeholder="comment..."></textarea>
            </div>

        </fieldset>


        <div class="checkbox">
            <label for="addMe"><input type="checkbox" id="addMe" name="addMe" onclick="check()" value="addMe"> Please add me to your mail list!</label>
        </div>


        <div id="hidden" class="d-none">
            <p class="choose">Please choose an email format:</p>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="method"
                       id="html" value="html" >
                <label class="form-check-label" for="html">
                    HTML
                </label>

                &nbsp; &nbsp; &nbsp;

                <input class="form-check-input" type="radio" name="method"
                       id="text" value="text" >
                <label class="form-check-label" for="text">
                    Text
                </label>
            </div>

        </div>

        <fieldset>
            <div class="form-group form-row">

                <!-- Form Submit Button -->
                <div class="formSubmit col-auto" id="submit">
                    <input type="submit" id="submitButton" value="Submit">
                </div>

            </div>
        </fieldset>

    </form>
    </div>
</div>

<div class="container-fluid">
    <footer>

    </footer>
</div>

<!--script-->
<script src="scripts/jquery.min.js"></script>
<script src="scripts/popper.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/scripts.js"></script>

</body>

