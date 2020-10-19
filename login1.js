var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("uname").value;
var password = document.getElementById("psw").value;

if(username=="")
{
	alert("please enter username!!");
	document.getElementById("uname").focus();
	return false;
}
if(password=="")
{
	alert("please enter password!!");
	document.getElementById("psw").focus();
	return false;
}

if ( username == "qwe" && password == "qwe"){
alert ("Login successfully");
window.location = "index.html"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("uname").disabled = true;
document.getElementById("psw").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}