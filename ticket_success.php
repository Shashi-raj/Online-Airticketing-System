<?php
	session_start();
$con = mysqli_connect("localhost", "root", "", "airline_reservation");
if (!isset($con)) {
    die("Database Not Found");
}


if (isset($_REQUEST["u_sub"])) {

    $id = $_SESSION['pnr'];

    if ($id != '') {
        $query = mysqli_query($con, "select * from passengers where pnr='" . $id . "'");
        $res = mysqli_fetch_row($query);
        $query0 = mysqli_query($con, "select * from ticket_details where pnr='" . $id . "'");
        $res0 = mysqli_fetch_row($query0);
        $query1 = mysqli_query($con, "select * from payment_details where pnr='" . $id . "'");
        $res1 = mysqli_fetch_row($query1);

        if ($res) {
            $_SESSION['user'] = $id;
            header('location:pnrcheck.php');
        } else {

            echo '<script>';
            echo 'alert("Invalid username or password")';
            echo '</script>';
        }
        if ($res0) {
            $_SESSION['user'] = $id;
            header('location:pnrcheck.php');
        } else {

            echo '<script>';
            echo 'alert("Invalid username or password")';
            echo '</script>';
        }



        if ($res1) {
            $_SESSION['user'] = $id;
            header('location:pnrcheck.php');
        } else {

            echo '<script>';
            echo 'alert("Invalid username or password")';
            echo '</script>';
        }
    } else {
        echo '<script>';
        echo 'alert("Enter both username and password")';
        echo '</script>';
    }
}
?>

<html>
	<head>
		<title>
			Ticket Booking Successful
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<style>
				body{
            background-image: url("images/max.jpg");
            background-repeat: no-repeat;
            background-position: centrer;
            background-size: 100%;
        }
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
		</style>
		
	</head>
	<body>
		<img class="logo" src="images/aeroplane.png"/> 
		<h1 id="title">
			AIRLINES
		</h1>
		<div>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h2>BOOKING SUCCESSFUL</h2>
		<h3>Your payment of &#x20b9; <?php echo $_SESSION['total_amount']; ?> has been received.<br><br> Your PNR is <strong><?php echo $_SESSION['pnr'];?></strong>. Your tickets have been booked successfully.</h3>
		  <form>
		        <div id="dmain">
                     <input type="submit" id="u_sub" name="u_sub" value="Print" class="toggle btn btn-primary" style="width:px; margin-left: 70px;">
                     <br>

                 </div>
		  </form>
		       
	</body>
</html>