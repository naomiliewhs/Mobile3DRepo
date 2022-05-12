// JavaScript Document
// JavaScript Document
function populateHomePage(jsonObj){
	//AJAX service request to get the main text data from the json data store
	   console.log("Jeeepers");
	   console.log(jsonObj);
	   //Get the home page main text data
	   $('#title_home').html('<h2>' + jsonObj[0].title + '<h2>');
	   $('#subTitle_home').html('<h3>' + jsonObj[0].subtitle + '</h3>');
	   $('#description_home').html('<p>' + jsonObj[0].description + '</p>');
	   
		//Get the home page left column text data
	   $('#title_coke').html('<h2>' + jsonObj[1].title + '<h2>');
	   $('#subTitle_coke').html('<h3>' + jsonObj[1].subtitle + '</h3>');
	   $('#description_coke').html('<p>' + jsonObj[1].description + '</p>');	
	   
	   //Get the home page centre column text data
	   $('#title_pepper').html('<h2>' + jsonObj[2].title + '<h2>');
	   $('#subTitle_pepper').html('<h3>' + jsonObj[2].subtitle + '</h3>');
	   $('#description_pepper').html('<p>' + jsonObj[2].description + '</p>');	
	   
	   //Get the home page right column text data
	   $('#title_fanta').html('<h2>' + jsonObj[3].title + '<h2>');
	   $('#subTitle_fanta').html('<h3>' + jsonObj[3].subtitle + '</h3>');
	   $('#description_fanta').html('<p>' + jsonObj[3].description + '</p>');
	   
	   //Get the home page right column text data
	   $('#title_schweppe').html('<h2>' + jsonObj[4].title + '<h2>');
	   $('#subTitle_schweppe').html('<h3>' + jsonObj[4].subtitle + '</h3>');
	   $('#description_schweppe').html('<p>' + jsonObj[4].description + '</p>');
	};











var counter = 1;
$(document).ready(function() {
	
	selectPage();
	
});

// JavaScript Document
function getXMLHttp() {
	var xmlHttp
	try {
		xmlHttp = new XMLHttpRequest ();
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				return false;
			}
		}
	}
	return xmlHttp;
}

//Make AJAX request to the server
var xmlHttp = getXMLHttp();
//stores newly generated gallery HTML code
var htmlCode = "";
//temporarily stores server response while code is generated
var response;

function requestEmbed(tgt){
	var send = "../application/controller/postHandler.php";
	console.log(send);
	// Open the connection to the web server
	xmlHttp.open("POST", send, true);
	// Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
	//xmlHttp.setRequestHeader("func", "home")
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlHttp.send("func="+tgt);
	// Check we get a valid server response
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
			response_array = xmlHttp.responseText.split("<!-- END IMPORTED BLOCK -->");
			htmlCode = response_array[0];
			document.getElementById('embed-container').innerHTML = htmlCode;
			switch(tgt){
				case "home":
					jsonObj = eval(response_array[1].slice(5));
					populateHomePage(jsonObj);
					break;
				case "models":
					jsonObj = eval(response_array[1].slice(5));
					const sHtml = "<script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>";
					const frag = document.createRange().createContextualFragment(sHtml)
					document.body.appendChild( frag );
					break;
				default:
					break;
			}
		}
	}
}
$(document).ready(requestEmbed("home"));
function selectPage() {
	$('#navHome').click(function(){
		requestEmbed("home");	  
	});

	$('#navAbout').click(function(){
		requestEmbed("about"); 	  
	});

	$('#navModels').click(function(){
		requestEmbed("models");
	});
}

function cameraOptions() {
	$("button").click(function(){
		
		$("#cameraOps").show();
        $("#renderOps").hide();
		$("#animationOps").hide();

    }); 
}

function renderOptions() {
	$("button").click(function(){
		
		$("#cameraOps").hide();
        $("#renderOps").show();
		$("#animationOps").hide();

    }); 
}

function animationOptions() {
	$("button").click(function(){
		
		$("#cameraOps").hide();
        $("#renderOps").hide();
		$("#animationOps").show();

    }); 
}

function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = 'rgb(197 4 4)';
			document.getElementById('headerColor').style.backgroundColor = 'rgb(114 7 7)';
			document.getElementById('footerColor').style.backgroundColor = 'rgb(114 7 7)';
			break;
		case 2:
			document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
			document.getElementById('headerClor').style.backgroundColor = '#FF9999';
			document.getElementById('footerColor').style.backgroundColor = '#996699';
			break;
		case 3:
			document.getElementById('bodyColor').style.backgroundColor = 'coral';
			document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
			document.getElementById('footerColor').style.backgroundColor = 'darksalmom';
			break;
		case 4:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
			document.getElementById('headerColor').style.backgroundColor = 'chocolate';
			document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
			break;
	}
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = 'rgb(197 4 4)';
	document.getElementById('headerColor').style.backgroundColor = 'rgb(114 7 7)';
	document.getElementById('footerColor').style.backgroundColor = 'rgb(114 7 7)';
}

