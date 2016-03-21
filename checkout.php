<?php
session_start();
?>

<?php
//connect to mysql

 $db = mysqli_connect("localhost","root","","csv_db");
 mysqli_set_charset($db, "utf8"); 

 if (!$db){
 die("Database connection failed miserably: " . mysql_error());
 }?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Welcome to Lee's Oriental</title>
        <Link rel="stylesheet" href="semantic/dist/semantic.min.css"/>
        <link rel="stylesheet" href="css/StyleSheet.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="js/slick/slick.css" type="text/css"/>
        <link rel="stylesheet" href="js/slick/slick-theme.css" type="text/css"/>
        <script src="js/jquery-1.11.3.min.js"></script>
        
        
    </head>
    <body>
        
        <div id="Header">
            <div id="logo">
                <a href="index.php">
                <h1>Lee's Oriental</h1>
                </a>
            </div>
            
            <div id="right-header">
                Shopping Cart               
                 <div id="cart_trigger">
                     <a href="ShoppingCart.php">
                     <i class="huge shop icon"></i>
                     </a>
                 </div>
            </div>
        </div>

            <div class="ui five item menu">
            <div class="header item">
                Lee's Oriental
            </div>
            <a class="item" href="index.php">
                Home Page
            </a>
            <a class="item">
                New Products
            </a>
            <a class="item" href="hourslocation.html">
                Hours/Location
            </a>
            <a class="item" href="contactus.html">
                Contact Us
            </a>
        </div>
<form class="ui form" action="thankyou.php" method="post">
  <h4 class="ui dividing header">Shipping Information</h4>
  <div class="field">
    <label>Name</label>
    <div class="two fields">
      <div class="field">
        <input type="text" name="shipping[first-name]" placeholder="First Name">
      </div>
      <div class="field">
        <input type="text" name="shipping[last-name]" placeholder="Last Name">
      </div>
    </div>
  </div>
  <div class="field">
    <label>Billing Address</label>
    <div class="fields">
      <div class="twelve wide field">
        <input type="text" name="shipping[address]" placeholder="Street Address">
      </div>
      <div class="four wide field">
        <input type="text" name="shipping[address-2]" placeholder="Apt #">
      </div>
    </div>
  </div>

  <h4 class="ui dividing header">Billing Information</h4>
  <div class="fields">
    <div class="seven wide field">
      <label>Card Number</label>
      <input type="text" name="card[number]" maxlength="16" placeholder="Card #">
    </div>
    <div class="three wide field">
      <label>CVC</label>
      <input type="text" name="card[cvc]" maxlength="3" placeholder="CVC">
    </div>
    <div class="six wide field">
      <label>Expiration</label>
      <div class="two fields">
        <div class="field">
          <select class="ui fluid search dropdown" name="card[expire-month]">
            <option value="">Month</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select>
        </div>
        <div class="field">
          <input type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
        </div>
      </div>
    </div>
  </div>
   <h4 class="ui dividing header">Receipt</h4>
   <div class="field">
    <label>Send Email Receipt To:</label>
        <div class="field">
        <input type="text" name="receipt_email" placeholder="Your Email">
      </div>
  </div>
  <button class="ui button" tabindex="0" type="submit">Submit Order</button>
</form>

















    <script src="semantic/dist/semantic.min.js"></script>  
    <script src="js/slick/slick.min.js"></script>    
    <script src="js/Script.js"></script>          
    </body>
</html>