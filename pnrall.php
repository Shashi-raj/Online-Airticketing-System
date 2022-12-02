<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "airline_reservation");
if (!isset($con)) {
    die("Database Not Found");
}


if (isset($_REQUEST["u_sub"])) {

    $id = $_POST['pnr'];

    if ($id != '') {
        $query = mysqli_query($con, "select * from passengers where pnr='" . $id . "'");
        $res = mysqli_fetch_row($query);
        $query0 = mysqli_query($con, "select * from ticket_details where pnr='" . $id . "'");
        $res0 = mysqli_fetch_row($query0);
        $query1 = mysqli_query($con, "select * from payment_details where pnr='" . $id . "'");
        $res1 = mysqli_fetch_row($query1);

        if ($res) {
            $_SESSION['user'] = $id;
            header('location:pnrcheckall.php');
        } else {

            echo '<script>';
            echo 'alert("Wrong PNR Number")';
            echo '</script>';
        }
        if ($res0) {
            $_SESSION['user'] = $id;
            header('location:pnrcheckall.php');
        } else {

            echo '<script>';
            echo 'alert("Wrong PNR Number")';
            echo '</script>';
        }



        if ($res1) {
            $_SESSION['user'] = $id;
            header('location:pnrcheckall.php');
        } else {

            echo '<script>';
            echo 'alert("Wrong PNR Number")';
            echo '</script>';
        }
    } else {
        echo '<script>';
        echo 'alert("Wrong PNR Number")';
        echo '</script>';
    }
}
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link type="text/css" rel="stylesheet" href="css/login.css">
    </link>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
    <style>
        body{
            background-image: url("images/max.jpg");
            background-repeat: no-repeat;
            background-position: centrer;
            background-size: 100%;
        }
    </style>

</head>

<body class="">
<img class="logo" src="images/travel1.png" />
    <h1 id="title">
        Airlines
    </h1>
    <div>
        <ul>
            <li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
            <li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
    </div>
    <form id="index" action="pnrall.php" method="post">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                </div>
            </div>
            <div id="divtop">
                <center>
                    <br> <br><br>
                    <div id="dmain">
                        <center><img src=".images/new_img2.jpg" width="180px" height="150px"></center>
                        <br>
                        <input type="text" id="u_id" name="pnr" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your PNR Number"><br>

                        <input type="submit" id="u_sub" name="u_sub" value="Check" class="toggle btn btn-primary" style="width:100px; margin-left: 70px;"><br>

                    </div>
            </div>
        </div>
    </form>
</body>

</html>