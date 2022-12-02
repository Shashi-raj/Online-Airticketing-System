<?php
session_start();
?>
<html>

<head>
	<title>
		Welcome to Airlines
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>

<body>
	<img class="logo" src="images/irctc.png" />
	<h1 id="title">
		Airline
	</h1>
	<div>
		<ul>
			<li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			<li>
				<?php
				if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Customer') {
					echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
				} else if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Administrator') {
					echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
				} else {
					echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
				}
				?>
			</li>
			<li><a href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i> Check PNR </a></li>
			<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
			

			<li>
				<?php
				if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Customer') {
					echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
				} else if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Administrator') {
					echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
				} else {
					echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
				}
				?>
			</li>
			<li>
				<?php
				if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Customer') {
					echo "<a href=\"custemor_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> SignUp</a>";
				} else if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Administrator') {
					echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> SignUp</a>";
				} else {
					echo "<a href=\"new_user.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> SignUp</a>";
				}
				?>
			</li>
		</ul>
	</div>
	<div class="container">
		<div class="welcome_text">Welcome to Airlines !</div>
		<img class="img-22" src="images/maxx.jpg" width=100% hight=80%>
	</div>
</body>

</html>