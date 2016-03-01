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
			$username = $_POST['username'];
			$password = $_POST['password'];
			$name = $_POST['firstName'];
			$street = $_POST['address'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$takenUsername = FALSE; 
			
			$fp = fopen("users.txt","r");
			
			if(!$fp)
			{
				echo 'Error: Cannot open file';
				exit;
			}

			while ( $line = fgets ($fp)) 
			{ 
				$line = trim($line);
				$info = explode("|", $line);
				$infoCount = count($info);	
							
				for ($j=0; $j<$infoCount; $j++)
				{
					if ($info[$j] == $username) 
					{ 
						$takenUsername = TRUE;
						break;
					} 
				}
			} 
			
			fclose($fp);
			
			
			if($takenUsername == FALSE && $username != 'Username')
			{
				$fp = fopen("users.txt","a");
				
				if(!$fp)
				{
					echo 'Error: Cannot open file';
					exit;
				}
	
				fwrite($fp, $username. "|" .$password. "|" .$name. "|" .$street. "|" .$city. "|" .$state. "|" .$zip. "|" .$phone. "|" .$email."\n");
				fclose($fp);
				
				print("Thank you $name for registering for our website!  <br />");
				print("Username: $username  <br />");
				print("Street: $street  <br />");
				print("City: $city  <br />");
				print("State: $state  <br />");
				print("Zip: $zip  <br />");
				print("Phone: $phone  <br />");
				print("Email: $email  <br />");
			}
			
			else{
				print('Please choose a different username. <br />');
				echo '<a href="assignment6.html">Go Back</a>'; 
			}
			?>
		</div> 

		<footer>
	    		<p style="color:#cccccc;font-family:Verdana, Geneva, sans-serif;font-size:10px">	<a href="index.html">Assignments Page</a></p>
		</footer> 
	</div>
</body>
</html>
