<?php
ini_set('display_errors',1);
error_reporting(E_ALL);


session_start();
if (!isset($_SESSION['loggedin'])) {

    //Store the page that I'm currently on in the session
    //$_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    //Redirect to login
    header("location: adminLogin.php");
}

//include files
//include('includes/head.html');
require('includes/databaseCredential.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" >
    <link rel="icon" href="images/guestbook.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Guestbook</a>
            <ul class="nav navbar-nav">
                <li class="active"><a href="GuestBook.php">Home</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="adminLogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>

</div>
<!--<body>
<div class="container">
<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
    <div class="container-fluid">

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
            </div>
            <div class="nav navbar-nav navbar-right">
                <a href="adminLogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
            </div>

        </div>

    </div>
</nav>
</div> -->
<div class="container-fluid" id="table-main">
    <h1>GuestBook Summary</h1>
    <table id="order-table" class="display" style="width:100%">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Company</td>
            <td>Job</td>
            <td>Phone</td>
            <td>Email</td>
            <td>LinkedIn</td>
            <td>Meet Reason</td>
            <td>Other Reason</td>
            <td>Date</td>
        </tr>
        </thead>
        <tbody>


        <?php
        $sql = "SELECT * FROM guestbook";
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        foreach ($result as $row) {
            //var_dump($row);
            $id = $row['id'];
            $fullname = $row['fname'] . " " . $row['lname'];
            $company = $row['company'];
            $job = $row['job'];
            $phone = $row['phone'];
            $email = $row['email'];
            $linkedIn = $row['linkedIn'];
            $meetReason = $row['meetReason'];
            $otherReason = $row['otherReason'];
            $date = date("F j, Y g:i a", strtotime($row['date']) );
            //$date = "SELECT `date` FROM `guestbook` ORDER BY `id` DESC ";

            echo "<tr>";
            echo "<td>$id</td>";
            //echo "<td>$date</td>";
            echo "<td>$fullname</td>";
            echo "<td>$company</td>";
            echo "<td>$job</td>";
            echo "<td>$phone</td>";
            echo "<td>$email</td>";
            echo "<td>$linkedIn</td>";
            echo "<td>$meetReason</td>";
            echo "<td>$otherReason</td>";
            echo "<td>$date</td>";
            echo "</tr>";
        }

        /*
         * Create Table pizza (
         * order_id Int(4) not null primary key auto_increment,
         * fname varchar(20) not null,
         * lname varchar(20) not null,
         * address varchar(100) null,
         * size varchar(100) not null,
         * toppings varchar(20) null,
         * method varchar(20) not null,
         * price decimal(4,2) not null,
         * order_date datetime not null default now()
         * )
         *
         * populate table
         * insert into pizza values
         * (null, 'joe', 'shom', '123 elm', 'small', 'cheese', 'deliver', 20.50, null)
         */

        ?>
        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="scripts/scripts.js"></script>
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
    $('#order-table').DataTable();
</script>
</body>
