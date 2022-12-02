<?php
session_start();
?>
<html>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
     <link rel="stylesheet" type="text/css" href="styles.css"></link>
    
  </head>
  <body>
    <div class="header">
      <h1><img src="images/travel.png" width=40px" style="margin-left:30px;margin-right:20px">Airlines</h1>
    </div>

    <div class="row">
      <div class="col-3 menu">
        <div class="vertical-menu">
        <a href="index.html">Home</a>
        <a href="admin_view_booked_tickets.php">View Booked Ticket List</a></a>
        <a href="add_flight_details.php">Add-Flight-Schedule</a>
        <a href="delete_flight_details.php">Delete-Flight-Schedule</a>
        <a href="add_jet_details.php">Add-Jet-Details</a>
        <a href="activate_jet_details.php">Activate-Aircraft</a>
        
        <a href="deactivate_jet_details.php">Deactivate-Aircraft</a>
        <a href="logout_handler.php">Logout</a>
        </div>
      </div>

      <div class="col-6">
        <h1>Welcome Admin.</h1></h1>
        
      </div>

      <div class="col-3 right">
        <div class="aside">
          <h2>AVAILABLE OFFER:</h2>
          <h3>NOCF:Get 100% instant discount on convenience fee.</h3>
          <h3>BOOKEARLY: Avail Flat 10% discount Up to 700.</h3>
          <h3>INTPOINTS:Get 100% Paytm First Points up to 30,000 points.</h3>
          <h3>FLIGHTREWARD:Get 3X cashback points up to 20,000 points</h3>
          <h3>FLYPERKS:Get vouchers from Myntra, Cult.Fit, Tata 1MG, OYO Wizard and Wakefit worth Rs. 5000</h3>
        </div>
      </div>
      </div>
      <div class="row-2">
        <h2 class="heading_2">Popular Flight Routes:</h2>
      <div class="grid-container">
        <div class="grid-item">
          <a><img src="images/travel.png" width=40px" style="margin-right:10px;">DELHI:</a><br>
          <a herf="book_tickets.php" method="post">Mumbai,Chennai,kolkata</a>
        </div>
        <div class="grid-item">
          <a><img src="images/travel.png" width=40px" style="margin-right:5px;">GUWAHATI:</a><br>
          <a herf="book_tickets.php" method="post">Mumbai,Chennai,kolkata</a>
        </div>
        <div class="grid-item">
          <a><img src="images/travel.png" width=40px" style="margin-right:5px;">BANGALORE:</a><br>
          <a herf="book_tickets.php" method="post">Mumbai,Chennai,kolkata</a>
        </div>
        <div class="grid-item">
          <a><img src="images/travel.png" width=40px" style="margin-right:5px;">HYDRABAD:</a><br>    
          <a herf="book_tickets.php" method="post">Mumbai,Chennai,kolkata</a>
        </div>
        <div class="grid-item">
          <a><img src="images/travel.png" width=40px" style="margin-right:5px;">PATNA:</a><br>
          <a herf="book_tickets.php" method="post">Mumbai,Chennai,kolkata</a>
        </div>
        <div class="grid-item">
          <a><img src="images/travel.png" width=40px" style="margin-right:5px;">CHENNAI:</a><br>
          <a herf="book_tickets.php" method="post">Mumbai,Delhi,kolkata</a>
        </div>
        <div class="grid-item">
          <a><img src="images/travel.png" width=40px" style="margin-right:5px;">MUMBAI:</a><br>
          <a herf="book_tickets.php" method="post">Delhi,Chennai,kolkata</a>
        </div>
        <div class="grid-item">
            <a><img src="images/travel.png" width=40px" style="margin-right: 5px;">BHOPAL:</a><br>
            <a herf="book_tickets.php" method="post">Mumbai,Chennai,kolkata</a>
        </div>
        <div class="grid-item">
            <a><img src="images/travel.png" width=40px" style="margin-right: 5px;">AGRA:</a><br>
            <a herf="book_tickets.php" method="post">Mumbai,Chennai,kolkata</a>
        </div>
           
      </div>
    
      </div>
      

    <div class="footer">
      <div class="contact-me">
        <h2>Popular Cities</h2>
        <p></p>
        
        <div class="row1">
          <div class="column1">
            <img src="images/delhi.jpg" alt="Delhi" style="width:100%">
            <p class="content">Delhi</p>
          </div>
          <div class="column1">
            <img src="images/mumbai.jpg" alt="Mumbai" style="width:100%">
            <p class="content">Mumbai</p>         
          </div>
          <div class="column1">
            <img src="images/kolkata.jpg" alt="kolkata" style="width:100%">
            <p class="content">kolkata</p>
          </div>
          <div class="column1">
            <img src="images/chennai.jpg" alt="Chennai" style="width:100%">
            <p class="content">Chennai</p>
          </div>
        </div>
        
      </div>
    </div>
    <div class="row-2">
     <h2 class="heading_2">Frequently Asked Question</h2>
      <div class="grid-container">
        <div class="grid-item">
          <a><img src="images/question-mark.png" width=40px" style="margin-right:5px;">How to book tickets?</a><br>
          <p>In order to book flight ticket login to Airline, enter departure and arrival destination, travel dates, number of passengers and travel class to get a list of all available flights that you can compare and choose from.</p>
        </div>
        <div class="grid-item">
          <a><img src="images/question-mark.png" width=40px" style="margin-right:5px;">How do I check available seat?</a><br>
          <p>When you have performed a flight search on Airline you get a list of all available flights for your desired dates. After checking out prices and entering your personal information you can check flight seat availability by seeing seat map of the plane that you will be getting on for your travel and choose your seat accordingly.</p>
        </div>
        <div class="grid-item">
          <a><img src="images/question-mark.png" width=40px" style="margin-right:5px;">How do I get low fare Ticket?</a><br>
          <p>The best way to get a low fare air ticket is to filter your search on the basis of price which will then refresh the page and display a list of flights with the cheapest one on top and most expensive one on bottom. One can even select the price range to get flights only within that particular price range.</p>
        </div>
        <div class="grid-item">
          <a><img src="images/question-mark.png" width=40px" style="margin-right:5px;">How do I book air ticket?</a><br>    
          <p>It is very simple to book air tickets on Airline. Simply enter your arrival and departure destination, number of passengers, travel class and departure date to get a list of all the available flights and click on book now to reserve your preferred flight.</p>
        </div>
        <div class="grid-item">
          <a><img src="images/question-mark.png" width=40px" style="margin-right:5px;">What does air reservation means?</a><br>
          <p>Air ticket reservation means booking an airline ticket after checking out its price, baggage policy, cancellation and refund policy as well as seat map.</p>
        </div>
        <div class="grid-item">
          <a><img src="images/question-mark.png" width=40px" style="margin-right:5px;">Is it worthit booking online?</a><br>
          <p>It certainly is worth booking flights online as you get to compare prices of different flights on a single page and compare other features as well.</p>
        </div>
           
      </div>
    </div>
    <div class="bottom-container">
      <p>Follow us:</p>
      <a class="footer-link" href="https://www.linkedin.com/in/shashi-prabhat-ranjan-00541a226/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3BfRqfqZN%2FSoKRPneaI6QMeQ%3D%3D">LinkedIn.</a>
      <a class="footer-link" href="https://www.instagram.com/shashi_pra/">Instagram.</a>
      <a class="footer-link" href="https://www.facebook.com/shashi.prabhat.906">facebook.</a>
      <p class="copyright">© Shashi Prabhat.</p>
    </div>
  </body>
</html>
