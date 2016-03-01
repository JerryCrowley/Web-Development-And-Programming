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

		<form>
            	<fieldset>
                	<legend>Search Result</legend>
		<?php 
			if(isset($_GET['keyword']) && $_GET['keyword']!='search'){
			
				$keyword = strtolower((string)$_GET['keyword']);

				$name = 0;
				$description = 0;
				$price = 0;
				$quantity = 0;
				$pic = 0; 
		

				$fp = fopen("product.txt","r");
			
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
						if ($info[$j] == $keyword) 
						{ 
							$startingPoint = $j; 
							$name = $info[$j];						
						
							for ($i=$startingPoint+1; $i<$startingPoint+10; $i++)
							{
								if($info[$i] != NULL && $info[$i] != 'Quantity'){
									if($i == $startingPoint+1){
										$description = $info[$i];
									}
									if($i == $startingPoint+2){
										$quantity = $info[$i];
									}
									if($i == $startingPoint+3){
										$price = $info[$i];
									}
									if($i == $startingPoint+4){
										$pic = $info[$i];
									}
								
								}
							}
						} 
					}
				} 	

				if($name == 0 && $description == 0 && $price == 0 && $quantity == 0 && $pic == 0){
					print("No results found <br />");
				}
				else{
					$isPic = TRUE;
					print("Name: $name <br />");
					print("Description: $description <br />");
					print("Price: $price <br />");
					print("Quantity: $quantity <br />");	
		
				}
			}
			
			else{
				print("Nothing searched for");
			}
			?>
		</fieldset>
		</form>

		<?php if($isPic == TRUE) : ?>
			<img style="display: block;margin-left: auto;margin-right:auto;"src="<?php echo $pic?>" alt="Image" />
		<?php endif; ?>
		</div> 

		<footer>
	    		<p style="color:#cccccc;font-family:Verdana, Geneva, sans-serif;font-size:10px">	<a href="index.html">Assignments Page</a></p>
		</footer> 
	</div>
</body>
</html>
