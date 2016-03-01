<html>
<head>
	<meta charset="utf-8" />
	<title> Assignment 6 </title>
	<link rel="stylesheet" href="assignments.css" />    
</head>

<body>

	<div id="box" class="box">  
		<h4>Assignment 6</h4>
		<h5></h5>
		  
		<div class="area"> 
		<?php 
			session_start();
			$username = $_SESSION['name'];

			if($username !='Username' && $username !=' ' && $username !=NULL){

				$fp = fopen ( 'users.txt', 'r' ); 
				
				while ( $line = fgets ($fp)) 	
				{ 
					$line = trim($line);
					$info = explode("|", $line);
	
					if ($info[0] == $username) 
					{ 
						$name   = $info[2];
						$street = $info[3];
						$city   = $info[4];
						$state  = $info[5];
						$zip    = $info[6];
						$phone  = $info[7];
						$email  = $info[8];
					} 
				} 
				
				fclose($fp);		
				
				$file = fopen( 'customer.txt', 'a+');
				fwrite($file, $username. "|");
				if(!$file)
				{
					echo 'Error: Cannot open file';
					exit;
				}
	
				$wings = $_POST['wings'];
				$boneless = $_POST['boneless'];
				$cheese = $_POST['cheese'];
				$pepperoni = $_POST['pepperoni'];
				$buffaloChicken = $_POST['buffaloChicken'];
				$cheeseSteak = $_POST['cheeseSteak'];
				$hawaii = $_POST['hawaii'];
				$deluxe = $_POST['deluxe'];
				$cake = $_POST['cake'];
				$sticks = $_POST['sticks'];	
				$payment; 
				$total = 0;
	
				$selected_radio = $_POST['check'];
	
				if ($selected_radio == 'visa') {
	
				$payment = 'Visa';
	
				}
				else if ($selected_radio == 'masterCard') {
	
				$payment = 'Master Card';
	
				}
				else if ($selected_radio == 'discover') {
	
				$payment = 'Discover';
	
				}
				else if ($selected_radio == 'americanExpress') {
	
				$payment = 'American Express';
	
				}
				else if ($selected_radio == 'debit') {
	
				$payment = 'Debit';
	
				}
				else if ($selected_radio == 'cash') {
	
				$payment = 'Cash';
	
				}
				
				if($wings > 0){
					$total1+=number_format((double)$wings * 6.99, 2, '.', '');
				}
				fwrite($file, $wings. "|"); 
				if($boneless > 0){
					$total2+=number_format((double)$boneless * 6.99, 2, '.', '');
				}
				fwrite($file, $boneless. "|"); 
				if($cheese > 0){
					$total3+=number_format((double)$cheese * 7.99, 2, '.', '');
				}
				fwrite($file, $cheese. "|"); 
				if($pepperoni > 0){
					$total4+=number_format((double)$pepperoni * 7.99, 2, '.', '');
				}
				fwrite($file, $pepperoni. "|"); 
				if($buffaloChicken > 0){
					$total5+=number_format((double)$buffaloChicken * 8.99, 2, '.', '');
				}
				fwrite($file, $buffaloChicken. "|"); 
				if($cheeseSteak > 0){
					$total6+=number_format((double)$cheeseSteak * 8.99, 2, '.', ''); 
				}
				fwrite($file, $cheeseSteak. "|");
				if($hawaii > 0){
					$total7+=number_format((double)$hawaii * 8.99, 2, '.', '');
				}
				fwrite($file, $hawaii. "|"); 
				if($deluxe > 0){
					$total8+=number_format((double)$deluxe * 8.99, 2, '.', ''); 
				}
				fwrite($file, $deluxe. "|");
				if($cake > 0){
					$total9+=number_format((double)$cake * 4.99, 2, '.', '');
				}
				fwrite($file, $cake. "|"); 
				if($sticks > 0){
					$total0+=number_format((double)$sticks * 4.99, 2, '.', ''); 
				}
				fwrite($file, $sticks. "|");
				
				$total = $total1 + $total2 + $total3+ $total4 + $total5+ $total6+ $total7+ $total8+ $total9 + $total0; 
				$total = number_format((float)$total,2, '.', '');
	
				fclose($file);
				
				$dollarSign = '$';
	
				
				print("Username: $username");
				print("<br />");
				if($wings != NULL && $wings != "Quantity"){
					print("Product: Wings <br />");		
					print("Quantity: $wings <br />");
					print("Total: $dollarSign$total1 <br />");
					print("<br />");
				}
				if($boneless != NULL && $boneless != "Quantity"){
					print("Product: Boneless Wings <br />");		
					print("Quantity: $boneless <br />");
					print("Total: $dollarSign$total2 <br />");
					print("<br />");
				}
				if($cheese != NULL && $cheese != "Quantity"){
					print("Product: Cheese Pie <br />");		
					print("Quantity: $cheese <br />");
					print("Total: $dollarSign$total3 <br />");
					print("<br />");
				}
				if($pepperoni != NULL && $pepperoni != "Quantity"){
					print("Product: Pepperoni Pie <br />");		
					print("Quantity: $pepperoni <br />");
					print("Total: $dollarSign$total4 <br />");
					print("<br />");
				}
				if($cheeseSteak != NULL && $cheeseSteak != "Quantity"){
					print("Product: Cheese Steak Pie <br />");		
					print("Quantity: $cheeseSteak <br />");
					print("Total: $dollarSign$total6 <br />");
					print("<br />");
				}
				if($buffaloChicken != NULL && $buffaloChicken != "Quantity"){
					print("Product: Buffalo Chicken Pie <br />");		
					print("Quantity: $buffaloChicken <br />");
					print("Total: $dollarSign$total5 <br />");
					print("<br />");
				}
				if($deluxe != NULL && $deluxe != "Quantity"){
					print("Product: Deluxe Pie <br />");		
					print("Quantity: $deluxe <br />");
					print("Total: $dollarSign$total8 <br />");
					print("<br />");
				}
				if($hawaii != NULL && $hawaii != "Quantity"){
					print("Product: Hawaii Pie <br />");		
					print("Quantity: $hawaii <br />");
					print("Total: $dollarSign$total7 <br />");
					print("<br />");
				}
				if($cake != NULL && $cake != "Quantity"){
					print("Product: Chocolate Cake <br />");		
					print("Quantity: $cake <br />");
					print("Total: $dollarSign$total9 <br />");
					print("<br />");
				}
				if($sticks != NULL && $sticks != "Quantity"){
					print("Product: Cinnamon Sticks <br />");		
					print("Quantity: $sticks <br />");
					print("Total: $dollarSign$total0 <br />");
					print("<br />");
				}
				
				print("Name: $name <br />");
				print("Street: $street <br />");
				print("City: $city <br />");
				print("Zip: $zip <br />");
				print("Phone Number: $phone <br />");
				print("Email: $email <br />");
				print("Payment: $payment <br />");
				print("Total: $dollarSign$total <br />");
			}
			
			else{
				print('Please sign in. <br />');
				echo '<a href="assignment6.html">Go Back</a>';
			}

		?>
			
		</form>
		</div> 

		<footer>
	    		<p style="color:#cccccc;font-family:Verdana, Geneva, sans-serif;font-size:10px">	<a href="index.html">Assignments Page</a></p>
		</footer> 
	</div>
</body>
</html>
