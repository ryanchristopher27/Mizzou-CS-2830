/*
	Created by Professor Wergeles for CS2830 at the University of Missouri 

	The following is the data used by the application.
	Typically this data is loaded from a server or
	from a file.
	
	To make life easier and to see how the app works, the 
	data is provided here instead of loading it from somewhere.
	
*/

var title = 'Animal Photographs';

var photos = [
	{
		uri : '../images/birdnest.png',
		title : 'Bird Nest'
	},
	{
		uri : '../images/birdrow.png',
		title : 'Row of Birds'
	},
	{
		uri : '../images/bluefootedbird.png',
		title : 'Blue-footed Birds'
	},
	{
		uri : '../images/deer.png',
		title : 'Running Deer'
	},
	{
		uri : '../images/hounds.png',
		title : 'Hound Dogs'
	},
	{
		uri : '../images/parrots.png',
		title : 'Colorful Parrots'
	},
	{
		uri : '../images/penguins.png',
		title : 'Rockhopper Penguins'
	},
	{
		uri : '../images/pheasants.png',
		title : 'Pheasants'
	},
	{
		uri : '../images/polarbears.png',
		title : 'Polar Bears'
	},
	{
		uri : '../images/sheep.png',
		title : 'Flock of Sheep'
	},
	{
		uri : '../images/sheep.png',
		title : 'Flock of Sheep 2'
	}
];

// The following 'controller' code utilizes the above data.
// The code and the html in index.html do not contain any specifics
// of the images that are displayed.  The data 'drives' what the logic does.

// The paradigm is Model-View-Controller (MVC)
// 		Model = the data above
// 		View = interface elements and CSS
// 		Controller = the code below
// 	https://developer.chrome.com/apps/app_frameworks

function prepareDisplay(photos){
	$("#title").html(title);

	if (photos.length < 1) return;

	var firstPhoto = photos[0];
	$("#imageHolder").attr("src", firstPhoto.uri);
	$("#photoTitle").html(firstPhoto.title);
}

function displayItem(event){
	console.dir(event);

	var data = event.data;
	var item = data.item;

	$("#imageHolder").attr("src", item.uri);
	$("#photoTitle").html(item.title);
}

function populateMenu(photos){
	for (var i=0;i<photos.length;i++) {
		var item = photos[i];

		var menuItem = $("<li>" + item.title+ "</li>");

		$("#menuItems").append(menuItem);

		var eventData = {
			'num': i,
			'item': item
		};

		menuItem.click(eventData, displayItem);
	}
}

$(document).ready(function(){
	prepareDisplay(photos);

	populateMenu(photos);
});

