<div class="container>
<div class="row">
    <div class="col-sn-12">
        <div class="panel panel-primary">
                <div class="panel-heading">Pemetaan Kerawanan Bencana Gempa</div>
                <div class="panel-body">
                        <div id="map" style="height: 500px;"></div>

                </div>
        </div>
    </div>
</div>
</div>


					<script src="../geojson/gempa_rendah.js"></script>
					<script src="../geojson/gempa_sedang.js"></script>
					<script src="../geojson/gempa_tinggii.js"></script>
					<script src="../geojson/batas_nagari_kajai.js"></script>
					<script src="../geojson/patahan.js"></script>
					<!-- <script src="../geojson/pusat_gempa.js"></script> -->



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


//////////////////////////////////
	
var gempa_icon = L.icon({
    iconUrl: '<?= base_url('icon/pin.png')?>',
    iconSize:     [28, 30], // size of the icon
    iconAnchor:   [12, 15], // point of the icon which will correspond to marker's location
});

	var gempa1 = L.marker ([0.14, 99.989999999999995], {icon:gempa_icon}).bindPopup('<b>Pusat Gempa Terekam</b><br /><br />Tanggal : 2/25/2022<br />Waktu : 08:35:51 WIB<br />Magnitudo : 5.20 SR<br />Kedalaman : 10 Km').addTo(map);
	var gempa2 = L.marker ([0.15, 99.980000000000004], {icon:gempa_icon}).bindPopup('<b>Pusat Gempa Terekam</b><br /><br />Tanggal : 2/25/2022<br />Waktu : 08:39:29 WIB<br />Magnitudo : 6.20 SR<br />Kedalaman : 10 Km').addTo(map);
	var gempa3 = L.marker ([0.15, 99.969999999999999], {icon:gempa_icon}).bindPopup('<b>Pusat Gempa Terekam</b><br /><br />Tanggal : 2/25/2022<br />Waktu : 11:02:20 WIB<br />Magnitudo : 5.00 SR<br />Kedalaman : 10 Km').addTo(map);
	var gempa4 = L.marker ([0.12, 99.980000000000004], {icon:gempa_icon}).bindPopup('<b>Pusat Gempa Terekam</b><br /><br />Tanggal : 2/25/2022<br />Waktu : 11:06:38 WIB<br />Magnitudo : 5.10 SR<br />Kedalaman : 10 Km').addTo(map);
	var gempa5 = L.marker ([0.16, 100.010000000000005], {icon:gempa_icon}).bindPopup('<b>Pusat Gempa Terekam</b><br /><br />Tanggal : 2/25/2022<br />Waktu : 22:17:21 WIB<br />Magnitudo : 4.70 SR<br />Kedalaman : 8 Km').addTo(map);
	var gempa6 = L.marker ([0.23, 99.909999999999997], {icon:gempa_icon}).bindPopup('<b>Pusat Gempa Terekam</b><br /><br />Tanggal : 2/27/2022<br />Waktu : 02:08:18 WIB<br />Magnitudo : 4.90 SR<br />Kedalaman : 10 Km').addTo(map);
	var gempa7 = L.marker ([0.22, 99.930000000000007], {icon:gempa_icon}).bindPopup('<b>Pusat Gempa Terekam</b><br /><br />Tanggal : 3/1/2022<br />Waktu : 22:37:03 WIB<br />Magnitudo : 4.50 SR<br />Kedalaman : 10 Km').addTo(map);
	var gempa8 = L.marker ([0.26, 99.890000000000001], {icon:gempa_icon}).bindPopup('<b>Pusat Gempa Terekam</b><br /><br />Tanggal : 3/2/2022<br />Waktu : 11:41:14 WIB<br />Magnitudo : 3.70 SR<br />Kedalaman : 3 Km').addTo(map);
	var gempa9 = L.marker ([0.15, 100.000000000000000], {icon:gempa_icon}).bindPopup('<b>Pusat Gempa Terekam</b><br /><br />Tanggal : 3/3/2022<br />Waktu : 13:37:04 WIB<br />Magnitudo : 4.80 SR<br />Kedalaman : 10 Km').addTo(map);


var gempa_rendah = L.geoJSON(gempa_rendah,{
		"color" : '#47F039',
		"weight" : 1,
		"opacity" : 0.7
	}).bindPopup("Rendah").addTo(map);
	
var gempa_sedang = L.geoJSON(gempa_sedang,{
		"color" : '#FFEC00',
		"weight" : 1,
		"opacity" : 0.7
	}).bindPopup("Sedang").addTo(map);

var gempa_tinggi = L.geoJSON(gempa_tinggi,{
		"color" : '#FF0000',
		"weight" : 1,
		"opacity" : 0.7
	}).bindPopup("Tinggi").addTo(map);

	L.geoJSON(batas_nagari,{
		"weight": 2,
        "opacity": 1,
        "color": '#798079',
        "dashArray" : '3',
	}).addTo(map);

var patahan = L.geoJSON(patahan,{
		"weight": 1,
        "opacity": 1,
        "color": '#A88A7C',
        "dashArray" : '3',
	}).addTo(map);

	// L.geoJSON(pusat_gempa,{
	// 	"weight": 1,
    //     "opacity": 1,
    //     "color": '#A88A7C',
	// }).addTo(map);



    var overlays = {
		'Tingkat Kerusakan Rendah': gempa_rendah,
        'Tingkat Kerusakan Sedang': gempa_sedang,
        'Tingkat Kerusakan Tinggi' : gempa_tinggi,
        'Patahan' : patahan,
	};


	var layerControl = L.control.layers(baseMaps, overlays).addTo(map);

</script>