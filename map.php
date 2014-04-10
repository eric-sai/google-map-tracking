<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript"
 src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBP3lAFHmYCbl6z7nbJ3teKLvXrOBoOlmM&sensor=false">
 </script>
 <script type="text/javascript">
 var myCenter=new google.maps.LatLng(42.03471, -93.6198);
 var marker;
 function initialize()
 {
 var mapProp = {
   center:new google.maps.LatLng(42.0347, -93.6197),
   zoom:12,
  // center: myLatlng,
   mapTypeId:google.maps.MapTypeId.ROADMAP
   };
 var map=new google.maps.Map(document.getElementById("googleMap")
   ,mapProp);
 marker=new google.maps.Marker({
	  position:myCenter,
	  animation:google.maps.Animation.BOUNCE
	  });
   

	marker.setMap(map);
	var infowindow = new google.maps.InfoWindow({
		   content:"Here you are!"
		   });
		 
		infowindow.open(map,marker);
	 
 }

google.maps.event.addDomListener(window, 'load', initialize);
 </script>
</head>
<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
 
</body>
 </html>