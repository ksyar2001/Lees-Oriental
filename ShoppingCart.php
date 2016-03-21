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

<?php
    @$product_id= $_GET['id'];
    @$action= $_GET['action'];
    
    switch($action){
        case "add":
                @$_SESSION['cart'][$product_id]++;
            break;
            
        case "remove":
			$_SESSION['cart'][$product_id]--; //remove one from the quantity of the product with id $product_id 
			if($_SESSION['cart'][$product_id] == 0) unset($_SESSION['cart'][$product_id]); //if the quantity is zero, remove it completely
		break;
		
		case "empty":
			unset($_SESSION['cart']); //unset the whole cart, i.e. empty the cart. 
		break;        
    }

    //var_dump($_SESSION['cart']);
    if (!empty($_GET)){
        header('Location: ShoppingCart.php');
    }
    

?>



<?php
    if(@$_SESSION['cart']){
        foreach($_SESSION['cart'] as $product_id => $quantity) { ?>
        <?php
                $sql= "SELECT ItemName, Description, Price FROM tbl_name WHERE ItemID= '{$product_id}'";
				//get the name, description and price from the database
				$result = mysqli_query($db, $sql);
					
                    list($ItemName, $description, $price) = mysqli_fetch_row($result);
				
					$line_cost = $price * $quantity;
					@$total = $total + $line_cost; ?>			
				
                    <table class="ui fixed table">
                    <thead>
                        <tr>
                        <th>ItemName</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Add/Remove</th>
                        <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo $ItemName?></td>
                        <td><?php echo $description?></td>
                        <td><?php echo $price?></td>
                        <td><?php echo $quantity?></td>
                        <td>
                            <div class="ui buttons">
                                <a class="ui button" href="ShoppingCart.php?action=remove&id=<?php echo $product_id?>">Remove</a>
                                <div class="or"></div>
                                <a class="ui positive button" href="ShoppingCart.php?action=add&id=<?php echo $product_id?>">Add</a>
                            </div>
                        </td>
                        <td><?php echo $line_cost?></td>
                      </tr>
                     </tbody>
                    </table>                    
				<?php        } } ?>

        

        <button class="ui right floated primary button">
            <a class="checkout" href="checkout.php">
            CheckOut
            </a>
        </button>

        <a class="ui button" href="ShoppingCart.php?action=empty">
            EmptyCart
        </a>

        <a class="ui button" href="index.php">
            Continue Shopping        
        </a>

        <div class="ui huge label">
            Checkout Total $
            <div class="detail"><?php echo @$total; @$_SESSION['total']= $total; ?></div>
        </div>






















    <script src="semantic/dist/semantic.min.js"></script>  
    <script src="js/slick/slick.min.js"></script>    
    <script src="js/Script.js"></script>          
    </body>
</html>