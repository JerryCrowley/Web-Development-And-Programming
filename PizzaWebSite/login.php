<html>

<head>
	<meta charset="utf-8" />
	<title> Assignment 6 </title>
	<link rel="stylesheet" href="assignment4.css" />
    <script src="assignment4.js"></script>
    
</head>

<body>   
    <?php 
		session_start();
		$username = $_POST['userName'];
		$_SESSION['name'] = $username;

		if (isset ($_POST['submit'])) 
		{ 
			$loggedin = FALSE;  
			$fp = fopen ( 'users.txt', 'r' ); 

			while ( $line = fgets ($fp)) 
			{ 
				$line = trim($line);
				$info = explode("|", $line);

				if ( ($info[0] == $username) && ($info[1] == $_POST['passWord'] ) ) 
				{ 
					$loggedin = TRUE; 
					break; 
				} 

			} 
		}
    ?>
    <div id="box" class="box" >  
        <h4>Assignment 6</h4>
        <h5></h5>
          
        <div class="area">  
	<?php if($loggedin == TRUE) : ?>
    		<ul>  
                <li>Menu</li>     
            </ul>  
              
            <div id="assignments" class="assignment">  
            <br>
            <form id='search' action="search.php" method="get">
                	<input class='second' type="text" value="Search" name="keyword" /><br>
            </form>
            <form id='signin' action="login.php" method="post">
            	<fieldset id="field0">
                	<legend>Account</legend>
                    	<?php
				 print ("<p> Welcome, ".$_POST['userName']."!<p>"); 
			?>
			<a href="prevOrders.php">Previous Orders</a>
                </fieldset>
            </form>
            
            <div id="form">
            <form id="form1" action="checkout.php" method="post">
              <fieldset id="field1">
                <legend>Appetizers</legend>
                    <p class="first">Wings<br>8pc $6.99<br><img src="wings.jpg" width="131" height="114"></p>
                    <p class="second">Boneless Chicken<br>8pc $6.99<br><img src="boneless.jpg" width="131" height="114"></p>
                  	<input class="first" type="number" min='0' step ='1' value="Quantity" name="wings"><br>
                  	<input class="second" type="number" min='0' step="1" value="Quantity" name="boneless"><br>
              </fieldset>
                
              <fieldset>
              	<legend>Pizzas</legend>
                    <p class="first">Cheese<br>Medium $7.99<br><img src="cheese.jpg" width="131" height="114"></p>
                    <p class="second">Pepperoni<br>Medium $7.99<br><img src="pepperoni.png" width="131" height="114"></p>
                    <input class="first" type="number" min='0' step ='1' value="Quantity" name="cheese"><br>
                    <input class="second" type="number" min='0' step="1" value="Quantity" name="pepperoni"><br>
                    <br>
                    <p class="first">Buffalo Chicken<br>Medium $8.99<br><img src="buffaloChicken.jpg" width="131" height="114"></p>
                  	<p class="second">Philly Cheese Steak<br>Medium $8.99<br><img src="cheeseSteak.jpg" width="131" height="114"></p>
                    <input class="first" type="number" min='0' step ='1' value="Quantity" name="buffaloChicken"><br>
                    <input class="second" type="number" min='0' step="1" value="Quantity" name="cheeseSteak"><br>
                    <br>
                    <p class="first">Hawaiian<br>Medium $8.99<br><img src="hawaii.jpg" width="131" height="114"></p>
                  	<p class="second">Deluxe<br>Medium $8.99<br><img src="deluxe.png" width="131" height="114"></p>
                    <input class="first" type="number" min='0' step ='1' value="Quantity" name="hawaii"><br>
                    <input class="second" type="number" min='0' step="1" value="Quantity" name="deluxe"><br>
                </fieldset>
                
                <fieldset>
                <legend>Desserts</legend>
                    <p class="first">Chocolate Cake<br>2pc $4.99<br><img src="cake.jpg" width="131" height="114"></p>
                    <p class="second">Cinnamon Sticks<br>8pc $4.99<br><img src="sticks.jpg" width="131" height="114"></p>
                  	<input class="first" type="number" min='0' step ='1' value="Quantity" name="cake"><br>
                  	<input class="second" type="number" min='0' step="1" value="Quantity" name="sticks"><br>
                </fieldset>
                        
                <fieldset>
                <legend>Payment</legend>
                    <input type="radio" name="check" value='visa'>Visa<br>
                    <input type="radio" name="check" value='masterCard'>Master Card<br>
                    <input type="radio" name="check" value='discover'>Discover<br>
                    <input type="radio" name="check" value='americanExpress'>American Express<br>
                    <input type="radio" name="check" value='debit'>Debit<br>
                    <input type="radio" name="check" value='cash' checked='checked'>Cash
                </fieldset>

                <input type="submit">
                <input type='button' value="Reset" onClick="formReset()">
            </form>
            </div>
	<?php else : ?>
	<p>Login Incorrect</p>
	<?php endif; ?>	
          
        </div> 
        <footer>
    		<p style="color:#cccccc;font-family:Verdana, Geneva, sans-serif;font-size:10px;text-align:center">	<a href="index.html">Assignments Page</a></p>
		</footer>    

</body>

</html>
