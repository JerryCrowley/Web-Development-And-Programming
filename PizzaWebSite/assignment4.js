// JavaScript Document

//Global Variables
var totalAmount = 0; 
var counter = 0;
var storedData = new Array();
var address=getCookie("address");
var city=getCookie("city");
var state=getCookie("state");
var zip=getCookie("zip");
var phone=getCookie("phone");

//Set Cookie
function setCookie(c_name,value,exdays)
{
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

//Get Cookie
function getCookie(c_name)
{
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	if (c_start == -1)
	  {
	  c_start = c_value.indexOf(c_name + "=");
	  }
	if (c_start == -1)
	  {
	  c_value = null;
	  }
	else
	  {
	  c_start = c_value.indexOf("=", c_start) + 1;
	  var c_end = c_value.indexOf(";", c_start);
	  if (c_end == -1)
	  {
	c_end = c_value.length;
	}
	c_value = unescape(c_value.substring(c_start,c_end));
	}
	return c_value;
}

//Check Cookie
function checkCookie()
{
	var username=getCookie("username");
	  if (username!=null && username!="")
	  {
		//Ask for Username
		var r = confirm("Are you " + username + "? If not, click cancel");
		
		//If not user then clear cookies
		if (r != true)
		{
			setCookie("username",username,-1);
			setCookie("address",address,-1);
			setCookie("city",city,-1);
			setCookie("state",state,-1);
			setCookie("zip",zip,-1);
			setCookie("phone",phone,-1);
			
			document.getElementById('firstName').value = null;
			document.getElementById('address').value = null;
			document.getElementById('city').value = null;
			document.getElementById('state').value = null;
			document.getElementById('zip').value = null;
			document.getElementById('phone').value = null;
			
			//Ask for new name
			username=prompt("Please enter your name:","");
			if (username!=null && username!="")
			{
				setCookie("username",username,365);
				document.getElementById('firstName').value = username;
				document.getElementById('address').value = null;
				document.getElementById('city').value = null;
				document.getElementById('state').value = null;
				document.getElementById('zip').value = null;
				document.getElementById('phone').value = null;
			}
		}
		
		//If user, set cookies to form values
		else
		{
			document.getElementById('firstName').value = username;
			document.getElementById('address').value = address;
			document.getElementById('city').value = city;
			document.getElementById('state').value = state;
			document.getElementById('zip').value = zip;
			document.getElementById('phone').value = phone;
		}
	  }
	else
	  {
		  username=prompt("Please enter your name:","");
		  if (username!=null && username!="")
		  {
			setCookie("username",username,365);
			document.getElementById('firstName').value = username;
			document.getElementById('address').value = null;
			document.getElementById('city').value = null;
			document.getElementById('state').value = null;
			document.getElementById('zip').value = null;
			document.getElementById('phone').value = null;
		  }
	  }
}

//Add form to data array
function add(quantity,total,name)
{
	var newArray = new Array(quantity, total, name);
	storedData[counter] = newArray;
	counter++; 
	totalAmount += total;
}

function total()
{
	//If quantity is greater than 0, add it to data
	if(document.getElementById('wings').value > 0)
	{
		add(document.getElementById('wings').value,document.getElementById('wings').value * 6.99, '8pc Wings');
	}
	if(document.getElementById('boneless').value > 0)
	{
		add(document.getElementById('boneless').value,document.getElementById('boneless').value * 6.99,'8pc Boneless Chicken');
	}
	if(document.getElementById('cheese').value > 0)
	{
		add(document.getElementById('cheese').value,document.getElementById('cheese').value * 7.99,'Cheese Pie');
	}
	if(document.getElementById('pepperoni').value > 0)
	{
		add(document.getElementById('pepperoni').value,document.getElementById('pepperoni').value * 7.99,'Pepperoni Pie');
	}
	if(document.getElementById('buffaloChicken').value > 0)
	{
		add(document.getElementById('buffaloChicken').value,document.getElementById('buffaloChicken').value * 8.99,'Buffalo Chicken Pie');
	}
	if(document.getElementById('cheeseSteak').value > 0)
	{
		add(document.getElementById('cheeseSteak').value,document.getElementById('cheeseSteak').value * 8.99,'Cheese Steak Pie');
	}
	if(document.getElementById('hawaii').value > 0)
	{
		add(document.getElementById('hawaii').value,document.getElementById('hawaii').value * 8.99,'Hawaiian Pie');
	}
	if(document.getElementById('deluxe').value > 0)
	{
		add(document.getElementById('deluxe').value,document.getElementById('deluxe').value * 8.99,'Deluxe Pie');
	}
	if(document.getElementById('cake').value > 0)
	{
		add(document.getElementById('cake').value,document.getElementById('cake').value * 4.99,'Chocolate Cake');
	}
	if(document.getElementById('sticks').value > 0)
	{
		add(document.getElementById('sticks').value,document.getElementById('sticks').value * 4.99,'Cinnamon Sticks');
	}
	
	if(document.getElementById('delivery').checked)
	{
		totalAmount+=5;
	}
	
	//Get sum to 2 decimal places
	var sum = parseFloat(Math.round(totalAmount * 100) / 100).toFixed(2);
	document.getElementById('totalAmountDue').innerHTML = 'Total Amount Due: $'+sum;
}

//Reset Form
function formReset()
{
	totalAmount = 0;
	document.getElementById('totalAmountDue').innerHTML = 'Total Amount Due:';
	document.getElementById('form1').reset();
	storedData = [];
	counter = 0; 
}

//Print Receipt
function receipt(name,address1,city1,state1,zip1,phone1,comments)
{
	//If total button wasn't pressed, run total function
	if (totalAmount == 0)
	{
		total();
	}
	
	//Validation
	var x=document.forms["form2"]["firstName"].value;
	var y=document.forms["form2"]["address"].value;
	
	if (x==null || x=="")
	{
		alert("First name must be filled out");
		return false;
	}
	
	if (y==null || y=="")
	{
		alert("Address must be filled out");
		return false;
	}
	
	if(storedData[0]==null)
	{
		alert("No items selected");
		return false;
	}
	

	//Get cookies
	address = address1;
	city = city1;
	state = state1;
	zip = zip1;
	phone = phone1;
	
	setCookie("address",address,365);
	setCookie("city",city,365);
	setCookie("state",state,365);
	setCookie("zip",zip,365);
	setCookie("phone",phone,365);	
		
	var creditCard; 
	
	//Get Payment
	if(document.getElementById('visa').checked)
	{
		creditCard = 'Visa';
	}
	if(document.getElementById('masterCard').checked)
	{
		creditCard = 'Master Card';
	}
	if(document.getElementById('discover').checked)
	{
		creditCard = 'Discover';
	}
	if(document.getElementById('americanExpress').checked)
	{
		creditCard = 'American Express';
	}
	if(document.getElementById('debit').checked)
	{
		creditCard = 'Debit';
	}
	if(document.getElementById('cash').checked)
	{
		creditCard = 'Cash';
	}
	
	if (creditCard ==null)
	{
		alert("Payment must be filled out");
		return false;
	}
	
	//Write Printer Friendly Page
	document.write("<h1>Receipt</h1>");
	document.write("Name: "+name+"<p></p>");
	document.write("Address: "+address1+"<p></p>");
	document.write("City: "+city1+"<p></p>");
	document.write("State: "+state1+"<p></p>");
	document.write("Zip: "+zip1+"<p></p>");
	document.write("Phone: "+phone1+"<p></p>");
	document.write("Comments: "+comments+"<p></p>");
	document.write("Payment: "+creditCard+"<p></p>");
	
	//Write items consumer selected
	for(var i = 0; i < storedData.length; i++)
	{
		document.write("<b>Item: </b>"+storedData[i][2]+" <b>Quantity:</b> "+storedData[i][0]+" <b>Total:</b> $"+storedData[i][1]+"<p></p>");
	}
	
	//Write Total Amount
	document.write("<h3>Total: </h3>"+"$"+totalAmount);
}