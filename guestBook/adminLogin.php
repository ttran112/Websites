<?php
/**
 *  File name & path
 *  Author
 *  Date
 *  Description
 */

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
//var_dump(($_POST));
$err = false;
$username ="";
//$username = strtolower(trim($_POST['username']));

//If the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //echo "Form has been submitted";
    //get user name and password
    $username = strtolower(trim($_POST['username']));
    $password = trim($_POST['password']);

//If they are correct
    //Actual username and password need to be stored in a separate file
    require ('login-creds.php');

    if($username == $adminUser && $password == $adminPassword) {
        $_SESSION['loggedin'] = true;
        ///echo "Login is correct";

        /// //Redirect to index page
        if (!isset($_SESSION['page'])) {
            $_SESSION['page'] = 'GuestBookTable.php';
        }
        header("location: " . $_SESSION['page']);
    }
    else {
            if($username != $adminUser && $password != $adminPassword) {
                echo "Incorrect username and password";
        }
        elseif ($password != $adminPassword) {
            echo "incorrect password";
        }
        elseif ($username != $adminUser ) {
            echo "Incorrect username";
        }
    }
//Redirect to index page
//Set an error flag
    $err = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet"
          href=
          "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .err {
            color: darkred;
        }
        #inputWIthIcon input[type = text ] {
            padding-left:25px ;
        }
        #inputWIthIcon {
            position: relative;
        }
        #inputWIthIcon i{
            position: absolute;
            left: 0px;
            top: 35px;
            padding: 9px 8px;
        }
        #inputWIthIcon {

        }
    </style>
</head>
<body>
<div class="container">

    <h1>Login Page</h1>

    <form action="#" method="post">
        <div class="form-group" id="inputWIthIcon">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username"
                <?php echo "value = '$username' "?>
            >
            <i class="fa fa-user"></i>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <?php
        if ($err) {
            echo '<span class="err">Incorrect Login</span>';
        }
        ?>
        <?php //if($err) : ?>
        <!--<span class="err">Incorrect Login</span>-->
        <?php //endif; ?>
        <br>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <br>
    <div class="justify-content-center">
    <a href="GuestBook.php"><button type="submit" class="btn btn-primary">Back to Home</button></a>
    </div>


</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

