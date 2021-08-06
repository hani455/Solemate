var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");
var remember_email = "";
var theme = "white";
function register_view(){
	x.style.left = "-400px";
	y.style.left = "50px";
	z.style.left = "110px";
	console.log("Register_View function called");
}
function login_view(){
	x.style.left = "50px";
	y.style.left = "450px";
	z.style.left = "0px";
	console.log("Login_View function called");
	document.getElementById("login-email").value = remember_email;
}
function login(){
	var email = document.getElementById("login-email").value;
	var password = document.getElementById("login-password").value;
	console.log("Email:"+email+"----password:"+password)
	console.log("Login function called");
	if(document.getElementById("remember-email").checked){
		remember_email = document.getElementById("login-email").value;
	}
}

function register(){
	var name = document.getElementById("register-name").value;
	var email = document.getElementById("register-email").value;
	var password = document.getElementById("register-password").value;
	console.log("Name:"+name+"----Email:"+email+"----password:"+password)
	console.log("Register function called");
	//document.write("<h1>Register fucntion called</h1>");
}
function change_theme(){
	var img = document.getElementById("theme-icon");
	var div = document.getElementById("form-box");
	if(theme=="white"){
		img.setAttribute("src","img/moon-icon-black.png");
		div.style.backgroundColor="black";
		theme = "black";
		console.log("BLACK BACKGROUND");

	}else if(theme=="black"){
		img.setAttribute("src","img/moon-icon-white.png");
		theme = "white";
		div.style.backgroundColor="white";
		console.log("WHITE BACKGROUND");
	}
}