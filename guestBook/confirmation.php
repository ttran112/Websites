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
?>
<body>
    <div class="container" id="main ">
        <h2>Please Confirm Your Information</h2>

    <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $company = $_POST['company'];
    $job = $_POST['jobTitle'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $linkedIn = $_POST['LinkedIn'];
    $meetReason = $_POST['reason'];
    $otherReason = $_POST['otherReason'];


    //Print information summary
    echo "<p>Name: $fname $lname</p>";
    echo "<p>Company: $company</p>";
    echo "<p>Job Title: $job</p>";
    echo "<p>Phone: $phone</p>";
    echo "<p>Email: $email</p>";
    echo "<p>LinkedIn: $linkedIn</p>";
    echo "<p>Reason for meeting: $meetReason</p>";
    echo "<p>Other reason: $otherReason</p>";

    $sql = "INSERT INTO `guestbook`(`fname`, `lname`, `company`, `job`, `phone`, `email`, `linkedIn`, `meetReason`, `otherReason`) VALUES 
('$fname','$lname','$company','$job','$phone','$email','$linkedIn','$meetReason','$otherReason')";

    $success = mysqli_query($cnxn, $sql);
    if(!$success){
        echo "<p>Sorry...double check your information</p>";
        return;
    }
    ?>
    </div>
</body>
