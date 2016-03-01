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
		
			$fp = fopen("customer.txt","r");
			
			if(!$fp)
			{
				echo 'Error: Cannot open file';
				exit;
			}

			while ( $line = fgets ($fp)) 
			{ 
				$line = trim($line);
				$ctr = 1;
				$info = explode("|", $line);
				$infoCount = count($info);	
							
				for ($j=0; $j<$infoCount; $j++)
				{
					if ($info[$j] == $username) 
					{ 
						print("Order $ctr <br />");
						$startingPoint = $j; 

						for ($i=$startingPoint+1; $i<$startingPoint+10; $i++)
						{
							if($info[$i] != NULL && $info[$i] != 'Quantity'){
								if($i == $startingPoint+1){
									print("Wings Quantity: $info[$i] <br />");
								}
								if($i == $startingPoint+2){
									print("Boneless Wings Quantity: $info[$i] <br />");
								}
								if($i == $startingPoint+3){
									print("Cheese Pie Quantity: $info[$i] <br />");
								}
								if($i == $startingPoint+4){
									print("Pepperoni Pie Quantity: $info[$i] <br />");
								}
								if($i == $startingPoint+5){
									print("Buffalo Chicken Pie Quantity: $info[$i] <br />");
								}
								if($i == $startingPoint+6){
									print("Cheese Steak Pie Quantity: $info[$i] <br />");
								}
								if($i == $startingPoint+7){
									print("Hawaii Pie Quantity: $info[$i] <br />");
								}
								if($i == $startingPoint+8){
									print("Deluxe Pie Quantity: $info[$i] <br />");
								}
								if($i == $startingPoint+9){
									print("Chocolate Cake Quantity: $info[$i] <br />");
								}
								if($i == $startingPoint+10){
									print("Cinamon Sticks Quantity: $info[$i] <br />");
								}
							}
						}
						print("<br />");
						$ctr++;
					} 
				}
			} 			

			?>
			<p style="color:#cccccc;font-family:Verdana, Geneva, sans-serif;font-size:10px">	<a href="assignment6.html">Go Back</a></p>
		</div> 

		<footer>
	    		<p style="color:#cccccc;font-family:Verdana, Geneva, sans-serif;font-size:10px">	<a href="index.html">Assignments Page</a></p>
		</footer> 
	</div>
</body>
</html>
