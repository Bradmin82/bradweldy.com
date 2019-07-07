/* Pull local Farers market data from the USDA API and display on 
** Google Maps using GeoLocation or user input zip code. By Paul Dessert
** www.bradweldy.com | www.seedtip.com
*/

$(function() {
	var clickCount = 0;
	//grab form data
    $('#natParks').submit(function() { // bind function to submit event of form
		
		//define and set variables
		clickCount++;
		console.log('Click Count: ' + clickCount);
		var userState = $("#textState").val();
		var userLimit = $("#textLimit").val() - 1;
		if(userLimit < 1) { userLimit = 1; }
		var userStart = (clickCount * (userLimit + 1));
// 		userLimit--;
		console.log(clickCount + ' ' + userStart);
		//console.log("This-> " + userCords.latitude);
		
		
		var accessURL;
		
		if(userState && userLimit){
			accessURL = "https://developer.nps.gov/api/v1/campgrounds?api_key=4ORgftOhkKd7lZVT9ItitAR4RRvjGIDXfVkHVfUw&stateCode=" 
			+ userState 
			+ "&limit=" 
			+ userLimit
			+ "&start=" 
			+ (userStart - 1);
		} 
		console.log(userState + '\n' + userLimit + '\n' + accessURL);


		$.ajax({
			url: accessURL,
			dataType: 'json',
			type: 'get',
			cache: false,
			success: function(data) {
				$(data.data).each(function(index, value) {
					console.log(value); 
					
					$('#map-canvas').prepend(
					'<a href="' + value.regulationsurl + '">' + value.name + '</a><br />'
					+ '<p>Park Code: ' + value.parkCode + ' and id: ' + value.id + '</p><br />'
					+ '<p>latLong: ' + value.latLong + '</p><br />'
					+ '<p>Description: ' + value.description + '</p><br /><br />'
					+ '<p>Weather overview: ' + value.weatheroverview + '</p><br /><br />'
					);
				
				});	
			},
		});

		
		//var campgrounds = loadJSON(accessURL, gotData, 'jsonp');
/*
		$.getJSON(accessURL, function(data) {
			console.log(data);
			
			console.log(data.name + '\n'); 
		});
*/
		
/*
		function setup() {
			createCanvas(200, 200);
			loadJSON(accessURL, gotData, 'jsonp');
		}
		
		function gotData(data) {
			spaceData = data;	
		}
		
		function draw(data) {
			println(data);
			
			background(0);
			if(spaceData) {
				for (var i = 0; i < data.total; i++) {
					fill(255);
					ellipse(random(width), random(height), 16, 16);
				}
			}
		}
*/



        return false; // important: prevent the form from submitting
    });
});