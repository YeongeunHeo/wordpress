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
	
	//�������� �ִ� �ٸ� &div>���� ������ �� displayLocation���� showMap�� ȣ���Ѵ�.
	showMap(position.coords);
}

//map�̶�� ���������� �����ϴµ�, ������ ���� ������ �� ������ ����.
var map;

function showMap(coords) {
	//coords ��ü�� ������ �浵�� �����ͼ� google.maps.LatLng ��ü�� �����Ѵ�.
	var googleLatAndLong = new google.maps.LatLng(coords.latitude, coords.longitude);
	var mapOptions = {
		zoom: 10,
		center: googleLatAndLong,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var mapDiv = document.getElementById("map");

	//���������� DOM���� map &div>�� �о�µ�, mapOptions�� �Բ� �̸� Map �����ڿ� �����ؼ� google.maps.Map ��ü�� ����� ������ �� ������ �����.
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
	
	//�������� �ִ� �ٸ� &div>���� ������ �� displayLocation���� showMap�� ȣ���Ѵ�.
	showMap(position.coords);
}		

</script>

</body>
</html>
