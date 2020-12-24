/*
    Name: Ryan Christopher
    Pawprint: rdcb2f
    Date: December 11, 2020
    Chalenge: Final Project

    Type: JavaScript
*/

// Found online at https://www.w3schools.com/howto/howto_html_include.asp
	// Unused
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("htmlInclude");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("htmlInclude");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
}

// Index File JavaScript
	// Unused
function displayFact() {
	// document.getElementById("indexQFInfo").innerHTML = "";

	var fact = document.getElementById("indexQuickFacts").value;

	if (fact == "nickname") {
		document.getElementById("indexQFInfo").innerHTML = "Phi Delt, Phis";
	}
	else if (fact == "principles") {
		document.getElementById("indexQFInfo").innerHTML = "Friendship, Sound Learning, & Moral Rectitude";
	}
	else if (fact == "motto") {
		document.getElementById("indexQFInfo").innerHTML = "One Man is No Man";
	}
	else if (fact == "natfounding") {
		document.getElementById("indexQFInfo").innerHTML = "1848";
	}
	else if (fact == "mofounding") {
		document.getElementById("indexQFInfo").innerHTML = "1870";
	}
	else {
		document.getElementById("indexQFInfo").innerHTML = "Live Like Lou Foundation";
	}
}

	// AJAX and PHP Used here
	// Based off of lecture code
function updateInfo() {

	var fact = document.getElementById("indexQuickFacts").value;

	var xmlHttp = new XMLHttpRequest();

	xmlHttp.onload = function() {
		if (xmlHttp.status == 200) {
			document.getElementById("indexQFInfo").innerHTML = xmlHttp.responseText;
		}
	};

	var reqURL = "indexInfo_Final.php?infoId=" + fact;

	console.log(reqURL);

	xmlHttp.open("GET", reqURL, true);
	xmlHttp.send();

}

// Log In File JavaScript
function loginCheck() {
	var user = document.getElementById("username").value;
	var pass = document.getElementById("password").value;

	if (user == "test" && pass == "pass") {
		document.getElementById("loginContainerDiv").style.display = "block";
		document.getElementById("loginFormDiv").style.display = "none";
		document.getElementById("loginPageTitle").style.display = "none";
		document.getElementById("includedContent").style.visibility = "hidden";
		document.getElementById("emailDiv").style.display = "none";
	}
	else if (user == "" && pass == "") {
		document.getElementById("loginContainerDiv").style.display = "none";
		document.getElementById("loginFormDiv").style.display = "block";
		document.getElementById("emailDiv").style.display = "block";
		alert("Username and Password Field were left empty");
		clearContents();
	}
	else if (user == "") {
		document.getElementById("loginContainerDiv").style.display = "none";
		document.getElementById("loginFormDiv").style.display = "block";
		document.getElementById("emailDiv").style.display = "block";
		alert("Username Field was left empty.");
		clearContents();
	}
	else if (pass == "") {
		document.getElementById("loginContainerDiv").style.display = "none";
		document.getElementById("loginFormDiv").style.display = "block";
		document.getElementById("emailDiv").style.display = "block";
		alert("Password Field was left empty");
		clearContents();
	}
	else {
		document.getElementById("loginContainerDiv").style.display = "none";
		document.getElementById("loginFormDiv").style.display = "block";
		document.getElementById("emailDiv").style.display = "block";
		alert("Username or Password was incorrect.");
		clearContents();
	}
}
function logOut() {
	document.getElementById("loginContainerDiv").style.display = "none";
	document.getElementById("loginFormDiv").style.display = "block";
	document.getElementById("loginPageTitle").style.display = "block";
	document.getElementById("includedContent").style.visibility = "visible";
	document.getElementById("emailDiv").style.display = "block";

	document.getElementById("username").value = "";
	document.getElementById("password").value = "";
}
function clearContents() {

  	// console.log(document.getElementById("username").value);
  	// console.log(document.getElementById("password").value);

	document.getElementById("username").value = "";
  	document.getElementById("password").value = "";
}

