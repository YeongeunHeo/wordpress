<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</head>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");
var map;

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;

	var latitude = position.coords.latitude;
	var longitude = position.coords.longitude;

	var div = document.getElementById("demo");
	div.innerHTML = "You are at Latitude: " + latitude + ", Longitude: " + longitude;

	var km = computeDistance(position.coords, ourCoords);
	var distance = document.getElementById("distance");
	distance.innerHTML = "You are " + km + " km from the WickedlySmart HQ";
	
	//페이지에 있는 다른 &div>들을 갱신한 후 displayLocation에서 showMap을 호출한다.
	showMap(position.coords);
}

//map이라는 전역변수를 선언하는데, 생성한 구글 지도가 이 변수에 담긴다.
var map;

function showMap(coords) {
	//coords 객체의 위도와 경도를 가져와서 google.maps.LatLng 객체를 생성한다.
	var googleLatAndLong = new google.maps.LatLng(coords.latitude, coords.longitude);
	var mapOptions = {
		zoom: 10,
		center: googleLatAndLong,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var mapDiv = document.getElementById("map");

	//마지막으로 DOM에서 map &div>를 읽어온뒤, mapOptions와 함께 이를 Map 생성자에 전달해서 google.maps.Map 객체를 만들어 페이지 상에 지도를 만든다.
	map = new google.maps.Map(mapDiv, mapOptions);
}


function displayLocation(position) {
	var latitude = position.coords.latitude;
	var longitude = position.coords.longitude;

	var div = document.getElementById("location");
	div.innerHTML = "You are at Latitude: " + latitude + ", Longitude: " + longitude;

	var km = computeDistance(position.coords, ourCoords);
	var distance = document.getElementById("distance");
	distance.innerHTML = "You are " + km + " km from the WickedlySmart HQ";
	
	//페이지에 있는 다른 &div>들을 갱신한 후 displayLocation에서 showMap을 호출한다.
	showMap(position.coords);
}		

</script>

</body>
</html>

