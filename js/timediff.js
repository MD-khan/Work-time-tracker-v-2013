// JavaScript Document

	
function get_time_difference(earlierDate,laterDate)
{
       var nTotalDiff = laterDate.getTime() - earlierDate.getTime();
       var oDiff = new Object();
 		
		oDiff.time = nTotalDiff/1000/60; // get total minutes
       //oDiff.days = Math.floor(nTotalDiff/1000/60/60/24);
       //nTotalDiff -= oDiff.days*1000*60*60*24;
 		
       oDiff.hours = Math.floor(nTotalDiff/1000/60/60);
	   nTotalDiff -= oDiff.hours*1000*60*60;
 		
       oDiff.minutes = Math.floor(nTotalDiff/1000/60);
       nTotalDiff -= oDiff.minutes*1000*60;
 
       oDiff.seconds = Math.floor(nTotalDiff/1000);
 
       return oDiff;
 
}
// Function Usage
function use_time_difference()
{
	timein = new Date(document.getElementById('timein').value);
	timeout = new Date(document.getElementById('timeout').value);
	oDiff = get_time_difference(timein, timeout);
	
	document.getElementById('totalhours').value=oDiff.hours + ":Hours, " + oDiff.minutes + " Minutes";
	//document.getElementById('totalhours').value="It has been " + oDiff.days + " days since India won it's first cricket worldcup";
	
	
}


function net_time() {
	
	  var breaktime = parseInt(document.getElementById('minute').value);
	  //use_time_difference();
	  minuesbreak = oDiff.time - breaktime;
	  
	  totalhours = Math.abs(minuesbreak/60); // hours and minute altogether
	  	  
	//document.getElementById('nethours').value=breaktime;
	document.getElementById('nethours').value = totalhours.toFixed(2);
	}


