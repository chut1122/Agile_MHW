<p id="location"></p>
<div class="blank">
<header><h5>LOCATION</h5></header>
</div>
<div id="map" style="width:100%;height:830px;"></div>


<script>
function myMap() {
	var myCenter = new google.maps.LatLng(5.341910,100.281397);
	var mapCanvas = document.getElementById("map");
	var mapOptions = {center: myCenter, zoom: 17};
	var map = new google.maps.Map(mapCanvas, mapOptions);
	var marker = new google.maps.Marker({position:myCenter});
	marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcQ6874L1XULhzeu2H_timqr3LSZIXzMc&callback=myMap"></script>
</div>
