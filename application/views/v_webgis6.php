<div class="container>
<div class="row">
    <div class="col-sn-12">
        <div class="panel panel-primary">
                <div class="panel-heading">Pemetaan Kerawanan Bencana Banjir Bandang</div>
                <div class="panel-body">
                        <div id="map" style="height: 500px;"></div>

                </div>
        </div>
    </div>
</div>
</div>

						<script src="../geojson/banjir_bandang_sangat_rendah.js"></script>
						<script src="../geojson/banjir_bandang_rendah.js"></script>
						<script src="../geojson/banjir_bandang_tinggi.js"></script>
						<script src="../geojson/banjir_bandang_sangat_tinggi.js"></script>
						<script src="../geojson/batas_nagari_kajai.js"></script>
						<script src="../geojson/bangunan.js"></script>

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
    center: [0.15822581020963297, 99.909399216014],
    zoom: 12,
    layers: [peta3]
	});

	var baseMaps = {
    "Light": peta1,
    "Sattelite": peta2,
	"Streets" : peta3,
	"Dark" : peta4,
	};


/////////////////////////////////


var banjir_bandang_sangat_rendah = L.geoJSON(banjir_bandang_sangat_rendah,{
		"color" : '#358131',
		"weight" : 1,
		"opacity" : 0.7
	}).bindPopup("Sangat Rendah").addTo(map);

var banjir_bandang_rendah = L.geoJSON(banjir_bandang_rendah,{
		"color" : '#31712C',
		"weight" : 1,
		"opacity" : 0.7
	}).bindPopup("Rendah").addTo(map);

var banjir_bandang_tinggi = L.geoJSON(banjir_bandang_tinggi,{
		"color" : '#F56821',
		"weight" : 1,
		"opacity" : 0.7
	}).bindPopup("Tinggi").addTo(map);

var banjir_bandang_sangat_tinggi = L.geoJSON(banjir_bandang_sangat_tinggi,{
		"color" : '#EE0303',
		"weight" : 1,
		"opacity" : 0.7
	}).bindPopup("Sangat Tinggi").addTo(map);

	L.geoJSON(batas_nagari,{
		"weight": 2,
        "opacity": 1,
        "color": '#798079',
        "dashArray" : '3',
	}).addTo(map);

var bangunan = L.geoJSON(bangunan,{
		"color" : '#332720',
		"weight" : 1,
		"opacity" : 0.7
	}).addTo(map);


	
    var overlays = {
		'Kerawanan Sangat Rendah': banjir_bandang_sangat_rendah,
        'Kerawanan Rendah': banjir_bandang_rendah,
        'Kerawanan Tinggi' : banjir_bandang_tinggi,
        'Kerawanan Sangat Tinggi' : banjir_bandang_sangat_tinggi,
		'Bangunan' : bangunan,
	};


	var layerControl = L.control.layers(baseMaps, overlays).addTo(map);


</script>