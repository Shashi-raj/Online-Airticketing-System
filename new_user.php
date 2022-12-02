<html>

<head>
	<title>
		Create New User Account
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<style>
		body{
			background-image: url("images/new_img2.jpg");
            background-repeat: no-repeat;
            background-position: centrer;
            background-size: 100%;		
			padding: 10px;
			margin:5px;
           }
		input {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 7px 100px;
		}

		input[type=submit] {
			background-color: #030337;
			color: white;
			border-radius: 4px;
			padding: 7px 40px;
			margin: 0px 135px
		}
		strong{
			margin-left: 5px;
		}
		td{
			color: #030337;
		}
	</style>

</head>

<body>
	<img class="logo" src="images/travel1.png" />
	<h1 id="title">
		Airlines </h1>
	<div>
		<ul>
			<li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			<li><a href="book_tickets.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
			<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
			<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
		</ul>
	</div>
	<br>
	<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
		<h2><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h2>
		<br>
		<table cellpadding='10'>
			<strong>ENTER LOGIN DETAILS</strong>
			<tr>
				<td>Enter a valid username </td>
				<td><input type="text" name="username" required><br></td>
			</tr>
			<tr>
				<td>Enter your desired password </td>
				<td><input type="password" name="password" required><br></td>
			</tr>
			<tr>
				<td>Enter your email ID</td>
				<td><input type="text" name="email" required><br></td>
			</tr>
		</table>
		<br>
		<table cellpadding='10'>
			<strong>ENTER CUSTOMER'S PERSONAL DETAILS</strong>
			<tr>
				<td>Enter your name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;</td>
				<td><input type="text" name="name" required><br></td>
			</tr>
			<tr>
				<td>Enter your phone no. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="phone_no" required><br></td>
			</tr>
			<tr>
				<td>Enter your address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="address" required><br></td>
			</tr>
		</table>
		<br>
		<strong>User Type:</strong><br>
				<p style="margin-left:5px;">Customer <input type='radio' name='user_type' value='Customer' checked/> Administrator <input type='radio' name='user_type' value='Administrator'/></p>
				<br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
				<br>
		<br>
		<input type="submit" value="Submit" name="Submit">
		<br>
	</form>
</body>

</html>