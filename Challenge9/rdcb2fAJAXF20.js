/*
    Name: Ryan Christopher
    Pawprint: rdcb2f
    Date: November 20, 2020
    Challenge: AJAX F20

    JavaScript File
*/

// Code from lectures
function getData() {
    var xmlHttp = new XMLHttpRequest();
    
    xmlHttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            // Hides loading icon (From Lecture)
            document.getElementById("loader").style.display = "none";

            // Get the XML Document
            var xmlDoc = xmlHttp.responseXML;
            
            // Variable for our output
            var output = '';

            var selectedRover = document.getElementById("rover").value;

            var name = xmlDoc.getElementsByTagName("name");
            var launchDate = xmlDoc.getElementsByTagName("launch_date");
            var description = xmlDoc.getElementsByTagName("description");

            var count = 0;

            for (var i=0; i<name.length; i++) {
                if (name[i].textContent == selectedRover) {
                    output = "<h4 class='dataText'>Rover: " + name[i].textContent + "</h4>";
                    break;
                }
                count++;
            }

            output += "<h4 class='dataText'>Launch Date: " + launchDate[count].textContent + "</h4>";
            output += "<h4 class='dataText'>Description: " + description[count].textContent + "</h4>";
            
            var divObj = document.getElementById("roverData");
            
            divObj.innerHTML = output;
            
        }
    }
    // Shows loading icon and hides data (From Lecture)
    document.getElementById("loader").style.display = "block";
    document.getElementById("roverData").innerHTML = "";

    xmlHttp.open("GET", "https://www.professorwergeles.com/webService.php?content=data&format=xml", true);
	xmlHttp.send();
} 

var manifest = {};

// Code from Christian Caldwell in Office Hours
function getManifest() {
    var xmlHttp = new XMLHttpRequest();

    xmlHttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            var response = JSON.parse(this.responseText)["photo_manifest"];

            for (photo in response["photos"]) {

                var sols = response["photos"][photo]["sol"];
                manifest[sols] = response["photos"][photo];

            }
        }
        else if (this.readyState == 4 && this.status != 200) {
            alert("Request Error!");
        }
    }

    xmlHttp.open("GET", "https://api.nasa.gov/mars-photos/api/v1/manifests/curiosity?api_key=Y54VfEECDQA5b7M2w6Pga2U4YgqXr0d3NEA4L26p", true);
    xmlHttp.send();
}

function updateCam() {

    var solValue = document.getElementById("martianSol").value;
    var front = false;
    var mast = false;
    var nav = false;

    for (var i=1; i<4; i++) {
        document.getElementById("camera").options[i].disabled = true;
    }

    // console.log(manifest[solValue]["cameras"]);

    for (var i=0; i< manifest[solValue]["cameras"].length; i++) {
        if (manifest[solValue]["cameras"][i] == "FHAZ") {
            document.getElementById("camera").options[1].disabled = false;
            front = true;
        }
        else if (manifest[solValue]["cameras"][i] == "MAST") {
            document.getElementById("camera").options[2].disabled = false;
            mast = true;
        }
        else if (manifest[solValue]["cameras"][i] == "NAVCAM") {
            document.getElementById("camera").options[3].disabled = false;
            nav = true;
        }
    }

    if (front == false && mast == false && nav == false) {
        alert("There are no pictures for this sol");
    }

}


var slideIndex = 0;

// Code from lecture
function getContent() {
        
    var xmlHttp = new XMLHttpRequest();

    var solValue = document.getElementById("martianSol").value;
    var camValue = document.getElementById("camera").value;
    
    xmlHttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            // document.getElementById("loadIcon").innerHTML = "";
            
            var response_images = JSON.parse(this.responseText)["photos"];

            var photoBox = document.getElementById("photoDiv");

            for (image in response_images) {
                var source = response_images[image]["img_src"];
            
                photoBox.innerHTML += "<div class='mySlides'><img src='" + source + "' alt='image'></img></div>";
            }
            showCurrentSlide(0);
        }
        else if (this.readyState == 4 && this.status != 200) {
            alert("API not found");
        }
    };

    // document.getElementById("loadIcon").innerHTML = "Loading...";
    // document.getElementById("photoDiv").innerHTML = "";
        
    xmlHttp.open("GET", "https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=" + solValue + "&camera=" + camValue + "&api_key=Y54VfEECDQA5b7M2w6Pga2U4YgqXr0d3NEA4L26p", true);
    xmlHttp.send();
}

// Code from Christian Caldwell in Office Hours
function showCurrentSlide(current) {
    // console.log("Showing slides");
    var slides = document.getElementsByClassName("mySlides");

    for (var i=0; i<slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[current].style.display = "block";
}

// Code from Christian Caldwell in Office Hours
function plusSlides(x) {
    var slides = document.getElementsByClassName("mySlides");

    if (slideIndex + x > slides.length-1) {
        slideIndex = 0;
    }
    else if (slideIndex + x < 0) {
        slideIndex = slides.length-1;
    }
    else {
        slideIndex += x;
    }
    showCurrentSlide(slideIndex);
}

// Code from Lecture
var tick = 1;
setInterval(function() {
    var loadNodes = document.querySelectorAll(".loadNode");
    var backgroundColors;
    if (tick == 1) {
        backgroundColors = ["rgb(206, 203, 203)", "rgb(25, 0, 255)", "rgb(251, 255, 0)"];
        tick = 2;
    }
    else if (tick == 2) {
        backgroundColors = ["rgb(251, 255, 0)", "rgb(206, 203, 203)", "rgb(25, 0, 255)"];
        tick = 3
    }
    else {
        backgroundColors = ["rgb(25, 0, 255)", "rgb(251, 255, 0)", "rgb(206, 203, 203)"];
        tick = 1;
    }
    loadNodes[0].style.backgroundColor = backgroundColors[0];
    loadNodes[1].style.backgroundColor = backgroundColors[1];
    loadNodes[2].style.backgroundColor = backgroundColors[2];
}, 200);