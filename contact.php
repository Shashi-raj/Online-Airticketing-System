<?php
session_start();
?>
<html>

<head>
    <title>
        Contact
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
    <style>
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
            margin: 0px 68px
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
				background-color:#001E6C ;
			
        }


        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
            margin-left: 30px;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            box-sizing: border-box;
            margin: 20px;
        }
    
    </style>
  
</head>

<body>
    <img class="logo" src="images/travel1.png "/>
    <h1 id="title">
        AIRLINES
    </h1>
    <div>
        <ul>
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
            <li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
    </div>
    <form class="container" action="contact_handler.php" method="post">
        <h2>Contact Us</h2>
        <label for="name">Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name..." required>

        <label for="cno">Contact No.</label>
        <input type="text" id="lname" name="contact" placeholder="Your contact number..." required>

        <label for="city">City</label>
        <input type="text" id="cname" name="city" placeholder="Your City name..." required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" name="Submit" value="Submit">
    </form>

</body>

</html>