<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//redirect if form has not been submitted
if(empty($_POST)) {
    header("location: GuestBook.php");
}
//Set the time zone
date_default_timezone_set('America/Los_Angeles');

//Include  file
include ('includes/head.html');
require('includes/databaseCredential.php');
//require ('includes/GuestBookSeverValidation.php');
?>
<body>
    <div class="container" id="main ">
        <h2>Please Confirm Your Information</h2>

    <?php
    //echo "<h3>Invalid info</h3>";
    //echo "<p>Testing purpose</p>";
    $isValid = true;
    //Check first name
    //$fname = $_POST['fname'];
    /*if (validName($_POST['fname'])) {
        $fname = $_POST['fname'];
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            echo "<p>Invalid first name input</p>";
            $isValid = false;
        }
        elseif(empty($fname)) {
            echo "<p>First name is require</p>";
            $isValid = false;
        }
    }
    //check last name
    if (validName($_POST['lname'])) {
        $lname = $_POST['lname'];
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
            echo "<p>Invalid last name input</p>";
            $isValid = false;
        }
        elseif(empty($lname)) {
            echo "<p>Last name is require</p>";
            $isValid = false;
        }
    }*/
    $fname = $_POST['fname'];
    if (empty($fname)) {
        echo "<p>First name is require</p>";
        $isValid = false;
    } else {
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
            echo "<p>Invalid first name input</p>";
            $isValid = false;

        }else {
            echo "<p> First name: $fname</p> ";
        }
    }
    //Check last name
    $lname = $_POST['lname'];
    if (empty($lname)) {
        echo "<p>Last name is require</p>";
        $isValid = false;
    } else {
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
            echo "<p>Invalid last name input</p>";
            $isValid = false;
        }else {
            echo "<p> First name: $lname</p> ";
        }
    }

    //meeting reason
    $meetingReasons = $_POST['reason'];
    if ($meetingReasons == "none") {
        echo "<p>Please enter a meeting reason</p>";
        $isValid = false;
    }
    elseif ($meetingReasons != "none" &&
            $meetingReasons != "School" &&
            $meetingReasons != "Co-worker" &&
            $meetingReasons != "Meetup" &&
            $meetingReasons != "Job Fair" &&
            $meetingReasons != "Event" &&
            $meetingReasons != "Other" &&
            $meetingReasons != "Not Met"
    ) {
        echo "<p>Enter a valid reason</p>";
        $isValid = false;
    } else {
        echo "<p>Meeting reason: $meetingReasons</p>";
    }
    //check email
    $emailCheckbox = "";

    $email = $_POST['email'];
    if (isset($_POST['addMe']) ){
        $emailCheckbox = $_POST['addMe'];
        if(empty($email)) {
            echo "<p>Email is require</p>";
            $isValid = false;
        }else {
            $email = $_POST['email'];
            if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //echo "<p>Invalid email</p>";
                $isValid = false;
            }
        }
    }

        //$email = $_POST['email'];
        if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Invalid email</p>";
            $isValid = false;
        }else {
            echo "<p>$email</p>";
        }


    /*$email = $_POST['email'];
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid email</p>";
        $isValid = false;
    }*/

    $linkedIn = $_POST['LinkedIn'];
    if (!empty($linkedIn) && !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$linkedIn)) {
        echo "<p>Invalid linkedIn</p>";
        $isValid = false;
    }else {
        echo "<p>$linkedIn</p>";
    }

    //$fname = $_POST['fname'];
    //$lname = $_POST['lname'];
    $company = $_POST['company'];
    $job = $_POST['jobTitle'];
    $phone = $_POST['phone'];
    //$emailCheckBox = $_POST['checkbox'];
    //$email = $_POST['email'];
    //$linkedIn = $_POST['LinkedIn'];
    //$meetReason = $_POST['reason'];
    $otherReason = $_POST['otherReason'];
    $date = "SELECT `date` FROM `guestbook` ORDER BY `id` DESC ";

    //Print information summary
//    echo "<h3>Summary info</h3>";
//    echo "<p>Name: $fname $lname</p>";
//    echo "<p>Company: $company</p>";
//    echo "<p>Job Title: $job</p>";
//    echo "<p>Phone: $phone</p>";
//    echo "<p>Email: $email</p>";
//    echo "<p>LinkedIn: $linkedIn</p>";
//    echo "<p>Reason for meeting: $meetingReasons</p>";
//    echo "<p>Other reason: $otherReason</p>";

    /*$sql = "INSERT INTO `guestbook`(`fname`, `lname`, `company`, `job`, `phone`, `email`, `linkedIn`, `meetReason`, `otherReason`) VALUES
('$fname','$lname','$company','$job','$phone','$email','$linkedIn','$meetingReasons','$otherReason')";
    $success = mysqli_query($cnxn, $sql);
    if(!$success){
        echo "<p>Sorry...double check your information</p>";
        return;
    }*/

    /*$fromEmail = "ttran112@mail.greenriver.edu";

    //send email
    $to = "ttran112@mail.greenriver.edu";
    $subject = "New Applicant";
    $message = "Name: $fname $lname \r\n";
    $message .= "Company: $company \r\n";
    $message .= "Job: $job \r\n";
    $message .= "Phone: $phone \r\n";
    $message .= "Email: $email \r\n";
    $message .= "LinkedIn: $linkedIn \r\n";
    $message .= "Meeting reason: $meetingReasons \r\n";
    $message .= "Other: $otherReason";
    $header = "Name: $fname $lname";

    $success = mail($to, $subject, $message, $header);
    echo $success? "<p>Your applicant are in process, we will be in touch soon.</p>" :
        "<p>Sorry... please check your information</p>"; */

    ?>

        <div class="form-group form-row">

            <!-- Form Submit Button -->
            <!-- Form Submit Button -->
            <div class="formSubmit col-auto" id="back">
                <a href="GuestBook.php"><input type="submit" id="submitButton" value="Back" ></a>
            </div>
            <div class="formSubmit col-auto" id="submit">
                <a href="#"><input type="submit" id="submitButton" value="Submit"></a>
            </div>

        </div>
    </div>
</body>
