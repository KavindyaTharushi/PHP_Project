
function newPage1(){
	window.location.assign("register.php");
}

function newPage2(){
	window.location.assign("Login.php");
}

function newDoc(){
	window.location.href = "Home.php";
}
 
function checkpassword(){
	v1=document.getElementById("pwd1").value;
	v2=document.getElementById("pwd2").value;
	
	if(v1!=v2){
		alert("passwords are not match");
		return false;
	}
	
	return true;
 
}

function toggleMenu() {
  var menu = document.getElementById("dropdownMenu");
  if (menu.style.display === "none" || menu.style.display === "") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}
