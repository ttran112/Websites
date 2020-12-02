<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

//redirect if form has not been submitted
/*if(empty($_POST)) {
    header("location: GuestBook.php");
} */
//Set the time zone
//date_default_timezone_set('America/Los_Angeles');

//Include  file
include ('includes/head.html');
require('includes/databaseCredential.php');
require ('confirmation.php');
?>

<body>
<h3>Thank you for your time. We will be in touch soon</h3>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$company = $_POST['company'];
$job = $_POST['jobTitle'];
$phone = $_POST['phone'];
//$emailCheckBox = $_POST['checkbox'];
$email = $_POST['email'];
$linkedIn = $_POST['LinkedIn'];
$meetingReasons = $_POST['reason'];
$otherReason = $_POST['otherReason'];
$date = "SELECT `date` FROM `guestbook` ORDER BY `id` DESC ";

$sql = "INSERT INTO `guestbook`(`fname`, `lname`, `company`, `job`, `phone`, `email`, `linkedIn`, `meetReason`, `otherReason`) VALUES 
('$fname','$lname','$company','$job','$phone','$email','$linkedIn','$meetingReasons','$otherReason')";
$success = mysqli_query($cnxn, $sql);
if(!$success){
    echo "<p>Sorry...double check your information</p>";
    return;
}
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
    "<p>Sorry... please check your information</p>";*/

?>
</body>
</html>

