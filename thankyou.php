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

 <?php //var_dump($_POST); var_dump($_SESSION['cart']); echo $_SESSION['total'];
      
    
    $to = 'hk.grace3082@gmail.com'; // this is to Email address
    $from = "love.power.yeah@gmail.com"; // this is the sender's Email address
    $first_name = $_POST['shipping']['first-name'];
    $last_name = $_POST['shipping']['last-name'];
    $shipping_address= $_POST['shipping']['address'];
    $shipping_address2= $_POST['shipping']['address-2'];
    $cardnumber= $_POST['card']['number'];
    $cvc= $_POST['card']['cvc'];
    $expire_month= $_POST['card']['expire-month'];
    $expire_year= $_POST['card']['expire-year'];
    $order_info= print_r($_SESSION['cart'], true);
    $subject = "Order Submission";
    $subject2 = "Copy of your Order submission";
    $message = "Name: " . $first_name . $last_name . "\n" . "Shipping: " . $shipping_address . $shipping_address2 .
                "\n" . $order_info . "cardnumber:" . $cardnumber . "cvc: " . $cvc . "expire: " . $expire_month . $expire_year;  
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $shipping_address;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    print "<h2>Order Sent. Thank you </h2>" . "<h2>$first_name</h2>" . "<h2>we will contact you shortly.</h2>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    
    //if(mail($to, $subject, $message, $headers))
    //echo "Email sent";
//else
    //echo "Email sending failed";


    session_destroy();
  ?>




    <script src="semantic/dist/semantic.min.js"></script>  
    <script src="js/slick/slick.min.js"></script>    
    <script src="js/Script.js"></script>          
    </body>
</html>