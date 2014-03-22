/*$(document).ready(function()
{
	alert("the DOM is ready");
});*/
var counter = 30;
$(function() {

	var test = $("#userName").val("default text");
	$("p").hide();
	
	
	
	$("#button").click(function ()
	{
		$("p").slideDown(500);
	});
	
	setInterval(timerTick, 1000);
	
	//alert(test);
});

function timerTick()
{
	counter= counter-1; 
	 $("#timer").text(counter);
	 
	if(counter<=0)
	{
	 	$("#timer").text("You cannot the answer the question anymore!");
	    $("h3").hide();
	    
	}
	
	
	
	
	
}


function changeName() {
                var userName = document.getElementById("txtUserName").value;
                document.getElementById("userName").innerHTML = userName;
				document.getElementById("txtUserName").value=" ";
            }// JavaScript Document