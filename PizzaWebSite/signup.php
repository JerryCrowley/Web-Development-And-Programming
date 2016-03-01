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
        <form id="form1" action="data.php" method="post">
        <fieldset>
                <legend>Info</legend>
                		Full Name <input type='text' name = 'firstName' id='firstName'><br>
                        Street <input type='text' name = 'address' id='address'><br>
                        City <input type='text' name = 'city' id='city'><br>
                        State <input type='text' name = 'state' id='state'><br>
						Zip <input type='text' name = 'zip' id='zip'><br>
                        Phone <input type='text' name='phone' id='phone'><br>
                        Email <input type='text' name='email' id='email'><br><br>
                        <textarea rows="4" cols="45" id='comments'>Comments</textarea>
                </fieldset>
                
                <input type="submit">
        </form>
        </div>
		<footer>
	    		<p style="color:#cccccc;font-family:Verdana, Geneva, sans-serif;font-size:10px">	<a href="index.html">Assignments Page</a></p>
		</footer> 
	</div>
</body>
</html>
