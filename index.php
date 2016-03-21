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
        
   
        <div class="ui grid">
            <div class= "two column row">
            <div class="four wide column"> 
            <div class="ui vertical menu">
                    <div class="item">
                    <div class="header">Item Categories</div>
                        <div class="menu">
                            <a class="item">Ready to Serve</a>
                            <a class="item">Noodles</a>
                            <a class="item" href="kimchi.php">Kimchi</a>
                            <a class="item">Snacks</a>
                            <a class="item">Dry Food</a>
                            <a class="item">Beverages</a>
                            <a class="item">Sauces&Spices</a>
                            <a class="item" href="rice.php">Rice&Grains</a>
                        </div>
                    </div>
                    </div>
                </div>
               

            <div class="ten wide column">
            <div class="main conttent">
                <div class="slider">
                    <div><img class="sliderimage" src="images/image1.jpg" alt="Image"></div>
                    <div><img class="sliderimage" src="images/typography.png" alt="Image"></div>
                </div>
                </div>
                </div>
                </div>
            </div>
       


        
    <script src="semantic/dist/semantic.min.js"></script>  
    <script src="js/slick/slick.min.js"></script>    
    <script src="js/Script.js"></script>          
    </body>
</html>
