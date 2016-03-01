// JavaScript Document


function monthDay() 
{	
	//Clear day array
	document.dayForm.selectNumber.options.length=0; 
	
	//Get Month 
	var monthSelect=month.value;
	
	//If month has 31 days
	if(monthSelect == "January" || monthSelect == "March" || monthSelect == "May" || monthSelect == "July" || monthSelect == "August" || monthSelect == "October" || monthSelect == "December")
	{
		for (i=1,k=0; i<=31; i++,k++)
		{
			document.dayForm.selectNumber.options[k]=new Option(i,i);
		}
	}
	
	//If month has 30 days
	if(monthSelect == "April" || monthSelect == "June" || monthSelect == "September" || monthSelect == "November")
	{
		for (i=1,k=0; i<=30; i++,k++)
		{
			document.dayForm.selectNumber.options[k]=new Option(i,i);
		}
	}
	
	//If month is Feb 
	if(monthSelect == "February")
	{
		for (i=1,k=0; i<=29; i++,k++)
		{
			document.dayForm.selectNumber.options[k]=new Option(i,i);
		}
	}
	
}

function answer(month,day)
{	
	document.getElementById("box").style.color = "blue";

	var zodiac; 

	//If month is January 
	if(month == "January")
	{
		//If their birthday is less than or equal to the 20th 
		if(day <= 20)
		{
			//Make zodiac equal to Capricorn
			zodiac = 'Capricorn';
			
			//Run printMsg function with month,day,and zodiac parameters 
			printMsg1(month,day,zodiac);
		}
		
		//If greater than the 20th
		else
		{
			//Person is an aquarius
			zodiac = 'Aquarius';
			
			//Run function with aquarius as zodiac 
			printMsg1(month,day,zodiac);
		}
	}
	
	if(month == "February")
	{
		if(day <= 19)
		{
			zodiac = 'Aquarius';
			
			printMsg1(month,day,zodiac);
		}
		
		else
		{
			zodiac = 'Pisces';
			
			printMsg1(month,day,zodiac);
		}
	}
	
	if(month == "March")
	{
		if(day <= 20)
		{
			zodiac = 'Pisces';
			
			printMsg1(month,day,zodiac);
		}
		
		else
		{
			zodiac = 'Aries';
			
			printMsg1(month,day,zodiac);
		}
	}
	
	if(month == "April")
	{
		if(day <= 20)
		{
			zodiac = 'Aries';
			
			printMsg1(month,day,zodiac);
		}
		
		else
		{
			zodiac = 'Taurus';
			
			printMsg1(month,day,zodiac);
		}
	}
	
	if(month == "May")
	{
		if(day <= 21)
		{
			zodiac = 'Taurus';
			
			printMsg1(month,day,zodiac);
		}
		
		else
		{
			zodiac = 'Gemini';
			
			printMsg1(month,day,zodiac);
		}
	}
	
	if(month == "June")
	{
		if(day <= 21)
		{
			zodiac = 'Gemini';
			
			printMsg1(month,day,zodiac);
		}
		
		else
		{
			zodiac = 'Cancer';
			
			printMsg1(month,day,zodiac);
		}
	}
	
	if(month == "July")
	{
		if(day <= 22)
		{
			zodiac = 'Cancer';
			
			printMsg1(month,day,zodiac);
		}
		
		else
		{
			zodiac = 'Leo';
			
			printMsg1(month,day,zodiac);
		}
	}
	
	if(month == "August")
	{
		if(day <= 22)
		{
			zodiac = 'Leo';
			
			printMsg1(month,day,zodiac);
		}
		
		else
		{
			zodiac = 'Virgo';
			
			printMsg1(month,day,zodiac);
		}
	}
	
	if(month == "September")
	{
		if(day <= 21)
		{
			zodiac = 'Virgo';
			
			printMsg1(month,day,zodiac);
		}
		
		else
		{
			zodiac = 'Libra';
			
			printMsg1(month,day,zodiac);
		}
	}
	
	if(month == "October")
	{
		if(day <= 22)
		{
			zodiac = 'Libra';
			
			printMsg1(month,day,zodiac);
		}
		
		else
		{
			zodiac = 'Scorpio';
			
			printMsg1(month,day,zodiac);
		}
	}
	
	if(month == "November")
	{
		if(day <= 21)
		{
			zodiac = 'Scorpio';
			
			printMsg1(month,day,zodiac);
		}
		
		else
		{
			zodiac = 'Sagitarius';
			
			printMsg1(month,day,zodiac);
		}
	}
	
	if(month == "December")
	{
		if(day <= 21)
		{
			zodiac = 'Sagitarius';
			
			printMsg1(month,day,zodiac);
		}
		
		else
		{
			zodiac = 'Capricorn';
			
			printMsg1(month,day,zodiac);
		}
	}
	
	
}

function printMsg1(month,day,zodiac)
{
	//Make node variable using assignments div to write over
	var node = document.getElementById("form");
	//Make node variable using submitButton div to write over old button
	var submitButton = document.getElementById("submitButton");
	//Make Array
	var fortunes = new Array();
	
	//Change button text
	submitButton.onclick = function() {window.location='assignment3.html';};
	submitButton.innerHTML="Go Back";

	//Create array with fortunes
	fortunes[0]="There is a true and sincere friendship between you and your friends.";
	fortunes[1]="You find beauty in ordinary things, do not lose this ability.";
	fortunes[2]="Ideas are like children; there are none so wonderful as your own.";
	fortunes[3]="Something you lost will soon turn up."
	fortunes[4]="A pleasant surprise is in store for you." 
	fortunes[5]="A thrilling time is in your immediate future." 
	fortunes[6]="You have a deep appreciation of the arts and music." 
	fortunes[7]="Fame, riches and romance are yours for the asking." 
	fortunes[8]="Someone is speaking well of you."
	fortunes[9]="Your life will be happy and peaceful." 
	fortunes[10]="Your ability to juggle many tasks will take you far."
	
	
	//If zodiac is capricorn
	if(zodiac == "Capricorn")
	{ 
		//Write over div with capricorn image and details
		node.innerHTML = "<br> <img src=Capricorn.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are a "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	if(zodiac == "Aquarius")
	{ 
		node.innerHTML = "<br> <img src=Aquarius.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are an "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	if(zodiac == "Pisces")
	{ 
		node.innerHTML = "<br> <img src=Pisces.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are a "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	if(zodiac == "Aries")
	{ 
		node.innerHTML = "<br> <img src=Aries.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are an "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	if(zodiac == "Taurus")
	{ 
		node.innerHTML = "<br> <img src=Taurus.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are a "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	if(zodiac == "Gemini")
	{ 
		node.innerHTML = "<br> <img src=Gemini.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are a "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	if(zodiac == "Cancer")
	{ 
		node.innerHTML = "<br> <img src=Cancer.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are a "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	if(zodiac == "Leo")
	{ 
		node.innerHTML = "<br> <img src=Leo.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are a "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	if(zodiac == "Virgo")
	{ 
		node.innerHTML = "<br> <img src=Virgo.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are a "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	if(zodiac == "Libra")
	{ 
		node.innerHTML = "<br> <img src=Libra.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are a "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	if(zodiac == "Scorpio")
	{ 
		node.innerHTML = "<br> <img src=Scorpio.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are a "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	if(zodiac == "Sagitarius")
	{ 
		node.innerHTML = "<br> <img src=Sagitarius.jpg> <p>" + "Your birthday: "+month+" "+day+ "</p> <p>" + "You are a "+zodiac+"!"+ "</p> <p>" + "Your fortune: <br>"+fortunes[Math.floor((Math.random()*10)+1)] + "</p>";
	}
	
}