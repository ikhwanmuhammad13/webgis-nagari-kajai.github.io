<div id="map" style="height: 500px;"></div>

<script src="geojson/batas_nagari_kajai.js"></script>
<script src="geojson/tutupan_lahan_hutan_rimba.js"></script>
<script src="geojson/tutupan_lahan_perkebunan.js"></script>
<script src="geojson/tutupan_lahan_permukiman.js"></script>
<script src="geojson/tutupan_lahan_sawah.js"></script>
<script src="geojson/tutupan_lahan_semak_belukar.js"></script>
<script src="geojson/tutupan_lahan_sungai.js"></script>
<script src="geojson/tutupan_lahan_tegalan_ladang.js"></script>


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

	L.geoJSON(batas_nagari,{
		"weight": 2,
        "opacity": 1,
        "color": '#798079',
        "dashArray" : '3',
	}).addTo(map);

	L.geoJSON(tutupan_lahan_hutan_rimba, {
		"color" : '#376218',
		"weight" : 0,
		"opacity" : 0.7
	}).bindPopup("Hutan Rimba").addTo(map);

	L.geoJSON(tutupan_lahan_perkebunan, {
		"color" : '#F98A05',
		"weight" : 0,
		"opacity" : 0.7
	}).bindPopup("Perkebunan").addTo(map);

	L.geoJSON(tutupan_lahan_permukiman, {
		"color" : '#000000',
		"weight" : 0,
		"opacity" : 0.7
	}).bindPopup("Permukiman").addTo(map);

	L.geoJSON(tutupan_lahan_sawah, {
		"color" : '#F9EE03',
		"weight" : 0,
		"opacity" : 0.7
	}).bindPopup("Sawah").addTo(map);

	L.geoJSON(tutupan_lahan_semak_belukar, {
		"color" : '#91F903',
		"weight" : 0,
		"opacity" : 0.7
	}).bindPopup("Semak Belukar").addTo(map);

	L.geoJSON(tutupan_lahan_sungai, {
		"color" : '#03F9CC',
		"weight" : 0,
		"opacity" : 0.7
	}).bindPopup("Sungai").addTo(map);

	L.geoJSON(tutupan_lahan_tegalan_ladang, {
		"color" : '#EE2828',
		"weight" : 0,
		"opacity" : 0.99
	}).bindPopup("Tegal dan Ladang").addTo(map);





</script>