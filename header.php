<html>
<head>

	<title>Donba Retro</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/foundation/foundation.topbar.js"></script>
	<script src="js/foundation/foundation.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script>
		var myCenter=new google.maps.LatLng(-34.493152, -58.527263);
		function initialize(){
			var mapProp = {
				center:myCenter,
				zoom:2,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			var map=new google.maps.Map(document.getElementById("googleMap")
			,mapProp);
			var marker=new google.maps.Marker({
 	 			position:myCenter});
				marker.setMap(map);
		}		
		google.maps.event.addDomListener(window,'load',initialize);
	</script>
</head>
	<body>
		<div class= 'small-10 small-centered columns wrapper'>
			<h1>Donba Retro - las leyendas nunca mueren </h1>