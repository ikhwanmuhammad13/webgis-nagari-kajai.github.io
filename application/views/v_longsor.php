<div id="map" style="height: 500px;"></div>

<script src="geojson/longsor_sangat_rendah.js"></script>
<script src="geojson/longsor_rendah.js"></script>
<script src="geojson/longsor_sedang.js"></script>
<script src="geojson/longsor_tinggi.js"></script>
<script src="geojson/longsor_sangat_tinggi.js"></script>
<script src="geojson/longsor_sangat_tinggi.js"></script>
<script src="geojson/batas_nagari_kajai.js"></script>

<script>


var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	});


/////////////////////////////////

	var map = L.map('map', {
    center: [0.155972, 99.951003],
    zoom: 12,
    layers: [peta1]
	});

	var baseMaps = {
    "Light": peta1,
    "Sattelite": peta2,
	"Streets" : peta3,
	"Dark" : peta4,
	};
	var layerControl = L.control.layers(baseMaps).addTo(map);



	//////////////////////////////////////////////////////////////////
	L.geoJSON(longsor_sangat_rendah,{
		"color" : '#31712C',
		"weight" : 1,
		"opacity" : 0.7
	}).bindPopup("Sangat Rendah").addTo(map);
	
	L.geoJSON(longsor_rendah,{
		"color" : '#47F039',
		"weight" : 0,
		"opacity" : 0.7
	}).bindPopup("Rendah").addTo(map);
	
	L.geoJSON(longsor_sedang,{
		"color" : '#FEFE2C',
		"weight" : 0,
		"opacity" : 0.7
	}).bindPopup("Sedang").addTo(map);
	
	L.geoJSON(longsor_tinggi, {
		"color" : '#FE682C',
		"weight" : 0,
		"opacity" : 0.7
	}).bindPopup("Tinggi").addTo(map);
	
	L.geoJSON(longsor_sangat_tinggi, {
		"color" : '#D30000',
		"weight" : 0,
		"opacity" : 0.7
	}).bindPopup("Sangat Tinggi").addTo(map);

	L.geoJSON(batas_nagari,{
		"weight": 2,
        "opacity": 1,
        "color": '#798079',
        "dashArray" : '3',
	}).addTo(map);

</script>